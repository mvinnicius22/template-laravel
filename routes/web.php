<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});


Route::inertia('login', 'Auth/Login')->name('login');
Route::post('login', [\App\Http\Controllers\Auth\LoginController::class, 'store'])
->name('login.post');

Route::post('logout', [\App\Http\Controllers\Auth\LoginController::class, 'destroy'])
->name('logout');

Route::group(['middleware' => 'auth'], function () {
    Route::inertia('about', 'About')->name('pages.about');
    Route::resource('users', \App\Http\Controllers\UserController::class);
});