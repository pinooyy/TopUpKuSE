<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\AuthManager;

Route::get('/', [ProductController::class, 'home'])->name('home');
Route::get('/home', [ProductController::class, 'home'])->name('home');

Route::get('/register', [AuthManager::class, 'register'])->name('register');
Route::post('/register', [AuthManager::class, 'registerPost'])->name('register.post');
Route::get('/login', [AuthManager::class, 'login'])->name('login');
Route::post('/login', [AuthManager::class, 'loginPost'])->name('login.post');
Route::get('/logout', [AuthManager::class, 'logout'])->name('logout');

Route::get('/product', function () {
    return view('product');
})->name('product');

Route::get('/contactus', function () {
    return view('contactus');
})->name('contactus');

Route::get('/checkout', function () {
    return view('checkout');
})->name('checkout');

Route::view('/faq', 'faq')->name('faq');

Route::get('/Genshin-Impact', [ProductController::class, 'show'])->name('genshin')->defaults('game_name', 'genshin');

Route::get('/Honkai-Starrail', [ProductController::class, 'show'])->name('hsr')->defaults('game_name', 'hsr');

Route::get('/MobileLegends',[ProductController::class, 'show'])->name('mole')->defaults('game_name', 'mole');

Route::get('/PUBG-Mobile',[ProductController::class, 'show'])->name('pubg')->defaults('game_name', 'pubg');

Route::get('/Wuthering-Waves', [ProductController::class, 'show'])->name('wuwa')->defaults('game_name', 'wuwa');

Route::get('/Valorant',[ProductController::class, 'show'])->name('valo')->defaults('game_name', 'valo');

Route::get('/Steam',[ProductController::class, 'show'])->name('steam')->defaults('game_name', 'steam');

Route::get('/FreeFire',[ProductController::class, 'show'])->name('epep')->defaults('game_name', 'epep');

Route::get('/SuperStar-GFriend', [ProductController::class, 'show'])->name('superstar')->defaults('game_name', 'superstar');

Route::get('/Cookierun-Kingdom',[ProductController::class, 'show'])->name('cookierunkingdom')->defaults('game_name', 'cookierunkingdom');

Route::get('/Roblox',[ProductController::class, 'show'])->name('roblox')->defaults('game_name', 'roblox');

Route::get('/Play-Together',[ProductController::class, 'show'])->name('playtogether')->defaults('game_name', 'playtogether');

Route::get('/product/{game_name}', [ProductController::class, 'show'])->name('product.show');


