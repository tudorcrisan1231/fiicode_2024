<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthCotroller;

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
    return view('home');
})->name('dashboard');

Route::get('/home', function () {
    return view('home');
})->name('home');

Route::get('login', [AuthCotroller::class, 'login'])->name('login');
Route::post('custom-login', [AuthCotroller::class, 'customLogin'])->name('login.custom');

Route::get('register', [AuthCotroller::class, 'register'])->name('register');
Route::post('custom-register', [AuthCotroller::class, 'customRegister'])->name('register.custom');

Route::get('signout', [AuthCotroller::class, 'signOut'])->name('signout');
