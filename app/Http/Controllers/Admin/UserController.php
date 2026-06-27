<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $users = User::orderBy('created_at', 'desc')->paginate(7);
        return view('admin.users.index', compact('users'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.users.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data = $request->validate([
            'name'     => 'required|string|max:255|min:3',
            'email'    => 'required|email|unique:users,email',
            'password' => 'required|string|min:8|confirmed', // Requerido al crear
            'image'    => 'nullable|image|max:8192',
            'role'     => 'required',
            'type'     => 'required',
            'bio'      => 'nullable',
            'active'   => 'required|boolean',
        ]);

        // Manejo de la imagen
        if ($request->hasFile('image')) {
            $data['image_path'] = Storage::put('images/users', $request->file('image'));
        }

        // Encriptar contraseña
        $data['password'] = Hash::make($data['password']);

        $user = User::create($data);

        session()->flash('swal', [
            'icon'  => 'success',
            'title' => '¡Creado!',
            'text'  => 'El usuario ha sido registrado con éxito.',
        ]);

        return redirect()->route('admin.users.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(User $user)
    {
        // Generalmente se usa para ver perfiles detallados
        return view('admin.users.show', compact('user'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(User $user)
    {
        return view('admin.users.edit', compact('user'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, User $user)
    {
        $data = $request->validate([
            'name'     => 'required|string|max:255|min:3',
            'email'    => 'required|email|unique:users,email,'.$user->id,
            'password' => 'nullable|string|min:8|confirmed',
            'image'    => 'nullable|image|max:8192',
            'role'     => 'required',
            'type'     => 'required',
            'bio'      => 'nullable',
            'active'   => 'required|boolean',
        ]);

        if ($request->hasFile('image')) {
            if ($user->image_path) {
                Storage::delete($user->image_path);
            }
            $data['image_path'] = Storage::put('images/users', $request->file('image'));
        }

        if ($request->filled('password')) {
            $data['password'] = Hash::make($data['password']);
        } else {
            unset($data['password']);
        }

        $user->update($data);

        session()->flash('swal', [
            'icon'  => 'success',
            'title' => '¡Correcto!',
            'text'  => 'Información de usuario actualizada correctamente.',
        ]);

        return redirect()->route('admin.users.edit', $user);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(User $user)
    {
        // Borrar imagen del almacenamiento si existe
        if ($user->image_path) {
            Storage::delete($user->image_path);
        }

        $user->delete();

        session()->flash('swal', [
            'icon'  => 'success',
            'title' => '¡Eliminado!',
            'text'  => 'El usuario ha sido borrado definitivamente.',
        ]);

        return redirect()->route('admin.users.index');
    }
}