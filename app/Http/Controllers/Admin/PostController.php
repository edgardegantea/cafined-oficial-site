<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Post;
use App\Models\Tag;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $posts = Post::orderBy('id', 'desc')->paginate(6);
        return view('admin.posts.index', compact('posts'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        // Se envían también las etiquetas para poder seleccionarlas en el formulario de creación
        $categories = Category::orderBy('name', 'asc')->get();
        $tags = Tag::orderBy('name', 'asc')->get();

        return view('admin.posts.create', compact('categories', 'tags'));
    }

    /**
     * Store a newly created resource in storage.
     * * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // Validación ampliada para incluir todos los campos del formulario
        $data = $request->validate([
            'title' => 'required',
            'slug'  => 'required|unique:posts',
            'category_id' => 'required|exists:categories,id',
            'excerpt' => 'required',
            'content' => 'required',
            'image' => 'nullable|image|max:8192',
            'image_2' => 'nullable|image|max:8192',
            'is_published' => 'required|boolean',
            'tags' => 'nullable|array',
            'tags.*' => 'exists:tags,id',
            'published_at' => 'nullable|date', // Se hace nullable por si se guarda como borrador
        ]);

        // Asignar el ID del usuario autenticado
        $data['user_id'] = auth()->id();

        // Manejo de la subida de la primera imagen
        if ($request->hasFile('image')) {
            $data['image_path'] = Storage::put('images/posts', $request->file('image'));
        }

        // Manejo de la subida de la segunda imagen
        if ($request->hasFile('image_2')) {
            $data['image_path_2'] = Storage::put('images/posts', $request->file('image_2'));
        }

        // Crear el post y obtener la instancia
        $post = Post::create($data);

        // Sincronizar (asignar) las etiquetas al post recién creado
        if (!empty($data['tags'])) {
            $post->tags()->sync($data['tags']);
        }

        session()->flash('swal', [
            'icon'  => 'success',
            'title' => '¡Correcto!',
            'text'  => 'La publicación se ha creado correctamente.',
        ]);

        // Redirigir al listado de posts
        return redirect()->route('admin.posts.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Post $post)
    {
        $categories = Category::orderBy('name', 'asc')->get();
        $tags = Tag::orderBy('name', 'asc')->get();

        $data = [
            'post' => $post,
            'categories' => $categories,
            'tags' => $tags,
        ];

        return view('admin.posts.show', $data);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Post $post)
    {
        $categories = Category::orderBy('name', 'asc')->get();
        $tags = Tag::orderBy('name', 'asc')->get();

        $data = [
            'post' => $post,
            'categories' => $categories,
            'tags' => $tags,
        ];
        return view('admin.posts.edit', $data);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Post $post)
    {
        $data = $request->validate([
            'title' => 'required',
            'slug'  => 'required|unique:posts,slug,'.$post->id,
            'category_id' => 'required|exists:categories,id',
            'excerpt' => 'required',
            'content' => 'required',
            'image' => 'nullable|image|max:8192',
            'image_2' => 'nullable|image|max:8192',
            'is_published' => 'required|boolean',
            'tags' => 'nullable|array',
            'tags.*' => 'exists:tags,id',
            'published_at' => 'required|date',
        ]);

        if ($request->is_published && !$post->published_at) {
            $data['published_at'] = now();
        }

        if ($request->hasFile('image')) {
            if ($post->image_path) {
                Storage::delete($post->image_path);
            }
            $data['image_path'] = Storage::put('images/posts', $request->file('image'));
        }

        if ($request->hasFile('image_2')) {
            if ($post->image_path_2) {
                Storage::delete($post->image_path_2);
            }
            $data['image_path_2'] = Storage::put('images/posts', $request->file('image_2'));
        }

        $data['user_id'] = auth()->id();
        $post->update($data);

        $post->tags()->sync($data['tags'] ?? []);

        session()->flash('swal', [
            'icon'  => 'success',
            'title' => '¡Correcto!',
            'text'  => 'La publicación se ha actualizado correctamente.',
        ]);

        return redirect()->route('admin.posts.edit', $post);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Post $post)
    {
        if ($post->image_path) {
            Storage::delete($post->image_path);
        }

        $post->delete();

        session()->flash('swal', [
            'icon'  => 'success',
            'title' => 'Correcto!',
            'text'  => 'Publicación eliminada correctamente.',
        ]);

        return redirect()->route('admin.posts.index');
    }
}