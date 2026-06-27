<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Publication;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PublicationController extends Controller
{
    /**
     * Muestra una lista de las publicaciones.
     */
    public function index()
    {
        // Paginamos los resultados (10 por página) y los ordenamos por los más recientes
        $publications = Publication::orderBy('created_at', 'desc')->paginate(10);

        return view('admin.publications.index', compact('publications'));
    }

    /**
     * Muestra el formulario para crear una nueva publicación.
     */
    public function create()
    {
        return view('admin.publications.create');
    }

    /**
     * Almacena una publicación recién creada en la base de datos.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'title'     => 'required|string',
            'authors'   => 'nullable|string',
            'journal'   => 'nullable|string|max:255',
            'publisher' => 'nullable|string|max:255',
            'year'      => 'nullable|string|max:4',
            'doi'       => 'nullable|string|max:255|unique:publications,doi',
            'url'       => 'nullable|url|max:255',
        ]);

        // Asignamos el ID del usuario que está creando el registro
        $validated['user_id'] = Auth::id();

        Publication::create($validated);

        return redirect()->route('admin.publications.index')
            ->with('success', 'Publicación creada exitosamente.');
    }

    /**
     * Muestra una publicación específica.
     */
    public function show(Publication $publication)
    {
        return view('admin.publications.show', compact('publication'));
    }

    /**
     * Muestra el formulario para editar una publicación específica.
     */
    public function edit(Publication $publication)
    {
        return view('admin.publications.edit', compact('publication'));
    }

    /**
     * Actualiza la publicación especificada en la base de datos.
     */
    public function update(Request $request, Publication $publication)
    {
        $validated = $request->validate([
            'title'     => 'required|string',
            'authors'   => 'nullable|string',
            'journal'   => 'nullable|string|max:255',
            'publisher' => 'nullable|string|max:255',
            'year'      => 'nullable|string|max:4',
            // Importante: Ignorar el ID actual para la regla unique del DOI
            'doi'       => 'nullable|string|max:255|unique:publications,doi,' . $publication->id,
            'url'       => 'nullable|url|max:255',
        ]);

        $publication->update($validated);

        return redirect()->route('admin.publications.index')
            ->with('success', 'Publicación actualizada exitosamente.');
    }

    /**
     * Elimina la publicación especificada de la base de datos.
     */
    public function destroy(Publication $publication)
    {
        $publication->delete();

        return redirect()->route('admin.publications.index')
            ->with('success', 'Publicación eliminada exitosamente.');
    }
}