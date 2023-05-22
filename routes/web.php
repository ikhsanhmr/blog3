<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Http\Controllers\UserController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/
Route::get('/', function () {
    return view('frontend.index', ['title' => 'Home']);
})->name('frontend.index');





Route::get('home', function () {
    return view('frontend.index', ['title' => 'Home']);
})->name('frontend.index');

Route::get('about', function () {
    return view('frontend.about', ['title' => 'About']);
})->name('frontend.about');

Route::get('blog', function () {
    return view('blog');
});

Route::get('admin', function () {
    return view('layout');
});

Route::resource('post', PostController::class);



Route::get('register', [UserController::class, 'register'])->name('register');
Route::post('register', [UserController::class, 'register_action'])->name('register.action');
Route::get('login', [UserController::class, 'login'])->name('login');
Route::post('login', [UserController::class, 'login_action'])->name('login.action');
Route::get('password', [UserController::class, 'password'])->name('password');
Route::post('password', [UserController::class, 'password_action'])->name('password.action');
Route::get('logout', [UserController::class, 'logout'])->name('logout');
