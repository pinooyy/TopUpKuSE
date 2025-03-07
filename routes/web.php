<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthManager;

Route::get('/', function () {
    return view('home');
})->name('home');

Route::get('/register', [AuthManager::class, 'register'])->name('register');
Route::post('/register', [AuthManager::class, 'registerPost'])->name('register.post');
Route::get('/login', [AuthManager::class, 'login'])->name('login');
Route::post('/login', [AuthManager::class, 'loginPost'])->name('login.post');
Route::get('/logout', [AuthManager::class, 'logout'])->name('logout');

Route::get('/cart', function () {
    return view('cart');
})->name('cart');

Route::get('/product', function () {
    return view('product');
})->name('product');

Route::get('/contactus', function () {
    return view('contactus');
})->name('contactus');

Route::get('/genshin', function () {
    return view('genshin');
})->name('genshin');

Route::get('/hsr', function () {
    return view('hsr');
})->name('hsr');

Route::get('/mole', function () {
    return view('mole');
})->name('mole');

Route::get('/pubg', function () {
    return view('pubg');
})->name('pubg');

Route::get('/wuwa', function () {
    return view('wuwa');
})->name('wuwa');

Route::get('/valo', function () {
    return view('valo');
})->name('valo');

Route::get('/steam', function () {
    return view('steam');
})->name('steam');

Route::get('/epep', function () {
    return view('epep');
})->name('epep');