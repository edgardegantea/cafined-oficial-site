<?php

use Illuminate\Support\Facades\Route;
use Livewire\Volt\Volt;

use App\Http\Controllers\PostController;
use App\Http\Controllers\FrontendController;
use App\Http\Controllers\ActivityController;
use App\Http\Controllers\EventController;


/*Route::get('/', function () {
    return view('welcome');
})->name('home');*/

// Route::redirect('/', 'posts')->name('inicio');
Route::get('/', [FrontendController::class, 'index'])->name('inicio');

Route::get('/posts', [PostController::class, 'index'])->name('posts.index');
Route::get('/posts/{post}', [PostController::class, 'show'])->name('posts.show');


Route::redirect('/inicio', '/');

Route::get('/equipo', [FrontendController::class, 'equipo'])->name('equipo');
Route::get('/activities', [ActivityController::class, 'index'])->name('activities');
Route::get('/foros', [FrontendController::class, 'foros'])->name('foros');
Route::get('/proyectos', [FrontendController::class, 'proyectos'])->name('proyectos');
Route::get('/produccioncientifica', [FrontendController::class, 'produccioncientifica'])->name('produccioncientifica');
Route::get('/proyectos/saberes360/privacidad', [FrontendController::class, 'saberes360privacidad'])->name('saberes360/privacidad');
Route::get('/proyectos/orientatec/privacidad', [FrontendController::class, 'orientatecprivacidad'])->name('orientatecprivacidad');
Route::get('/proyectos/saberes360', [FrontendController::class, 'saberes360'])->name('saberes360');
Route::get('/proyectos/orientatec', [FrontendController::class, 'orientatec'])->name('orientatec');


// Cualquiera puede ver los eventos
Route::get('/eventos', [EventController::class, 'index'])->name('events.index');

// SOLO usuarios autenticados pueden inscribirse
Route::post('/eventos/{event}/inscribirse', [EventController::class, 'join'])
    ->middleware(['auth'])
    ->name('events.join');

Route::delete('/eventos/{event}/desinscribirse', [EventController::class, 'leave'])
    ->middleware('auth')
    ->name('events.leave');



Route::view('dashboard', 'dashboard')
    ->middleware(['auth', 'verified', 'admin'])
    ->name('dashboard');

Route::middleware(['auth'])->group(function () {
    Route::redirect('settings', 'settings/profile');

    Volt::route('settings/profile', 'settings.profile')->name('settings.profile');
    Volt::route('settings/password', 'settings.password')->name('settings.password');
    Volt::route('settings/appearance', 'settings.appearance')->name('settings.appearance');
});


Route::middleware(['auth', 'admin'])->group(function () {

    // Formulario de Crear
    Route::get('/events/create', [EventController::class, 'create'])->name('events.create');

    // Guardar (Store)
    Route::post('/events', [EventController::class, 'store'])->name('events.store');

    // Formulario de Editar
    Route::get('/events/{event}/edit', [EventController::class, 'edit'])->name('events.edit');

    // Actualizar (Update)
    Route::put('/events/{event}', [EventController::class, 'update'])->name('events.update');

    // Eliminar (Destroy)
    Route::delete('/events/{event}', [EventController::class, 'destroy'])->name('events.destroy');
});

require __DIR__.'/auth.php';













