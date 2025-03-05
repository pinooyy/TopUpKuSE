<?php

use Illuminate\Support\Facades\Route;

Route::get('/home', function () {
    return view('home');
});

Route::get('/register', function () {
    return view('register');
})->name('register');

Route::get('/login', function () {
    return view('login');
})->name('login');

Route::get('/cart', function () {
    return view('cart');
})->name('cart');

Route::get('/shop', function () {
    return view('shop');
})->name('shop');

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