<?php

use App\Http\Controllers\Admin\ActivityController;
use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\PostController;
use App\Http\Controllers\Admin\PublicationController;
use App\Http\Controllers\Admin\TagController;
use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\EventController;
use Illuminate\Support\Facades\Route;

Route::resource('events', EventController::class);
Route::resource('categories', CategoryController::class);
Route::resource('posts', PostController::class);
Route::resource('tags', TagController::class);
Route::resource('users', UserController::class);
Route::resource('activities', ActivityController::class);
Route::resource('publications', PublicationController::class);

