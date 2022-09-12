<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PagesController;
use App\Http\Controllers\PostsController;

Route::get('/', [PagesController::class, 'home']);

Route::get('/about', [PagesController::class, 'about']);

Route::get('/services', [PagesController::class, 'service']);

Route::resource('/posts', PostsController::class);
 

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index']);
Route::delete('/home/{id}', [App\Http\Controllers\HomeController::class, 'destroy']);


