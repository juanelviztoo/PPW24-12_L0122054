<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MovieController;
use App\Http\Controllers\PageController;

Route::get('/', [PageController::class, 'home'])->name('home');
Route::resource('movies', MovieController::class);
Route::get('/developer', [PageController::class, 'developer'])->name('developer');

// Route::get('/', function () {
//     return view('welcome');
// });