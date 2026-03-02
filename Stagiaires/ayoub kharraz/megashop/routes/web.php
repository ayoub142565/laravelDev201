<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MegashopController;

Route::get('/', [MegashopController::class, 'index'])->name('home');
Route::get('/categorie/{slug}', [MegashopController::class, 'category'])->name('category');
Route::get('/produit/{id}', [MegashopController::class, 'productDetail'])->name('product.detail');
Route::get('/cgv', [MegashopController::class, 'cgv'])->name('cgv');
Route::get('/contact', [MegashopController::class, 'contact'])->name('contact');
