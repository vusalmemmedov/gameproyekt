<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;

Route::get('/', function () {
    return view('welcome');
})->name('home');

Route::get('/home', function () {
    return view('welcome');
})->name('home');

Route::get('/profile', [UserController::class, 'show'])->middleware('auth');

Route::get('/category', function () {
    return view('category');
})->name('category');

Route::get('/contact', function () {
    return view('contact');
})->name('contact');

Route::get('/login', function () {
    return view('login');
})->name('login');

Route::post('/login', [UserController::class, 'login'])->name('login.submit');

Route::get('/register', [UserController::class, 'showRegistrationForm'])->name('register');

Route::post('/register', [UserController::class, 'register']);
Route::get('/register', function () {
    return view('register');
})->name('register');


Route::get('/oferta', function () {
    return view('oferta');
})->name('oferta');

Route::get('/serveradd', function () {
    return view('serveradd');
})->name('server.add');

Route::get('/serverdetails', function () {
    return view('serverdetails');
})->name('server.details');

Route::get('/admin', function () {
    if (Auth::check() && Auth::user()->is_admin == 1) {
        return view('admin');
    } else {
        return redirect()->route('home');
    }
})->name('admin');