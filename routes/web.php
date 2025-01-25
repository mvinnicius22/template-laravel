<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::inertia('about', 'About')->name('pages.about');

Route::get('/users', [\App\Http\Controllers\UserController::class, 'index'])->name('users.index');