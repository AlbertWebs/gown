<?php

use Illuminate\Support\Facades\Route;



Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/gown-for-hire', [App\Http\Controllers\HomeController::class, 'gown_hire'])->name('gown-for-hire');
Route::get('/gown-for-hire/{slung}', [App\Http\Controllers\HomeController::class, 'gown_hire_single'])->name('gown-for-hire-single');
Route::get('/legal-wear', [App\Http\Controllers\HomeController::class, 'legal_wear'])->name('legal-wear');
Route::get('/church-wear', [App\Http\Controllers\HomeController::class, 'church_wear'])->name('church-wear');

Route::get('/buy-gown-wear', [App\Http\Controllers\HomeController::class, 'shop'])->name('church-wear-shop');
Route::get('/buy-gown-wear/checkout', [App\Http\Controllers\HomeController::class, 'shop_checkout'])->name('church-wear-shop-checkout');

Route::get('/blog', [App\Http\Controllers\HomeController::class, 'blog'])->name('blog');
Route::get('/blog/{slung}', [App\Http\Controllers\HomeController::class, 'blog_single'])->name('blog-single');

Auth::routes();
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

