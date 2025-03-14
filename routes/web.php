<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthManager;

Route::get('/home', function () {
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
    return view('../product/genshin');
})->name('genshin');

Route::get('/hsr', function () {
    return view('../product/hsr');
})->name('hsr');

Route::get('/mole', function () {
    return view('../product/mole');
})->name('mole');

Route::get('/pubg', function () {
    return view('../product/pubg');
})->name('pubg');

Route::get('/wuwa', function () {
    return view('../product/wuwa');
})->name('wuwa');

Route::get('/valo', function () {
    return view('../product/valo');
})->name('valo');

Route::get('/steam', function () {
    return view('../product/steam');
})->name('steam');

Route::get('/epep', function () {
    return view('../product/epep');
})->name('epep');

Route::get('/superstargfriend', function () {
    return view('../product/superstargfriend');
})->name('superstargfriend');

Route::get('/cookierunkingdom', function () {
    return view('../product/cookierunkingdom');
})->name('cookierunkingdom');

Route::get('/roblox', function () {
    return view('../product/roblox');
})->name('roblox');

Route::get('/playtogether', function () {
    return view('../product/playtogether');
})->name('playtogether');