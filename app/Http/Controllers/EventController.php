<?php

namespace App\Http\Controllers;

use App\Models\Event;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Storage;
use App\Mail\EventRegistrationConfirmed;
use App\Mail\EventUnregistrationConfirmed;

class EventController extends Controller
{
    /**
     * Muestra la lista de eventos.
     */
    public function index()
    {
        // 1. Configuración de consulta base
        $query = Event::query();

        // 2. Si NO es admin, solo mostrar eventos activos y futuros
        if (!Auth::check() || Auth::user()->role !== 'admin') {
            $query->where('is_active', true)
                ->where('end_time', '>', now());
        }

        // 3. Ordenar y Paginar
        $events = $query->withCount('attendees') // Contar inscritos
        ->orderBy('start_time', 'asc')
            ->paginate(9);

        return view('events.index', compact('events'));
    }

    /**
     * Formulario de creación (Solo Admin).
     */
    public function create()
    {
        $this->authorizeAdmin(); // Seguridad extra
        return view('events.create');
    }

    /**
     * Guardar evento (Solo Admin).
     */
    public function store(Request $request)
    {
        $this->authorizeAdmin();

        $validated = $request->validate([
            'title'        => 'required|string|max:255',
            'description'  => 'required|string',
            'start_time'   => 'required|date',
            'end_time'     => 'required|date|after:start_time',
            'capacity'     => 'nullable|integer|min:1',
            'type'         => 'required|in:workshop,course,conference,other',
            'requirements' => 'nullable|string',
            'image'        => 'nullable|image|mimes:jpeg,png,jpg,webp|max:2048',
        ]);

        // Subir Imagen
        if ($request->hasFile('image')) {
            $validated['image'] = $request->file('image')->store('events', 'public');
        }

        $validated['is_active'] = true;

        Event::create($validated);

        return redirect()->route('events.index')->with('success', 'Evento creado correctamente.');
    }

    /**
     * Formulario de edición (Solo Admin).
     */
    public function edit(Event $event)
    {
        $this->authorizeAdmin();
        return view('events.edit', compact('event'));
    }

    /**
     * Actualizar evento (Solo Admin).
     */
    public function update(Request $request, Event $event)
    {
        $this->authorizeAdmin();

        $validated = $request->validate([
            'title'        => 'required|string|max:255',
            'description'  => 'required|string',
            'start_time'   => 'required|date',
            'end_time'     => 'required|date|after:start_time',
            'capacity'     => 'nullable|integer|min:1',
            'type'         => 'required|in:workshop,course,conference,other',
            'requirements' => 'nullable|string',
            'image'        => 'nullable|image|mimes:jpeg,png,jpg,webp|max:2048',
        ]);

        // Manejo de Imagen: Reemplazar si se sube una nueva
        if ($request->hasFile('image')) {
            if ($event->image) {
                Storage::disk('public')->delete($event->image);
            }
            $validated['image'] = $request->file('image')->store('events', 'public');
        } else {
            unset($validated['image']);
        }

        $event->update($validated);

        return redirect()->route('events.index')->with('success', 'Evento actualizado correctamente.');
    }

    /**
     * Eliminar evento (Solo Admin).
     */
    public function destroy(Event $event)
    {
        $this->authorizeAdmin();

        // Borrar imagen del servidor
        if ($event->image) {
            Storage::disk('public')->delete($event->image);
        }

        $event->delete();

        return redirect()->route('events.index')->with('success', 'Evento eliminado correctamente.');
    }

    /**
     * Inscribir usuario (Cualquier usuario autenticado).
     */
    public function join(Request $request, Event $event)
    {
        $user = $request->user();

        // Validar si ya está inscrito
        if ($event->attendees()->where('user_id', $user->id)->exists()) {
            return back()->with('error', 'Ya estás inscrito en este evento.');
        }

        // Validar cupo
        if ($event->capacity && $event->attendees()->count() >= $event->capacity) {
            return back()->with('error', 'Lo sentimos, el evento está lleno.');
        }

        // Inscribir
        $event->attendees()->attach($user->id);

        // Enviar Email
        try {
            Mail::to($user->email)->send(new EventRegistrationConfirmed($event, $user));
        } catch (\Exception $e) {
            \Log::error('Error mail inscripción: ' . $e->getMessage());
        }

        return back()->with('success', '¡Inscripción exitosa!');
    }

    /**
     * Cancelar inscripción (Cualquier usuario autenticado).
     */
    public function leave(Request $request, Event $event)
    {
        $user = $request->user();

        $event->attendees()->detach($user->id);

        try {
            Mail::to($user->email)->send(new EventUnregistrationConfirmed($event, $user));
        } catch (\Exception $e) {
            \Log::error('Error mail cancelación: ' . $e->getMessage());
        }

        return back()->with('success', 'Has cancelado tu inscripción.');
    }

    /**
     * Helper para verificar rol de admin rápidamente.
     */
    private function authorizeAdmin()
    {
        if (Auth::check() && Auth::user()->role !== 'admin') {
            abort(403, 'Acceso no autorizado.');
        }
    }
}