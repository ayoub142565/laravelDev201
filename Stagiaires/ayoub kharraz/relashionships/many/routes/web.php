<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\store;

Route::get('/', [store::class, 'all'])->name('store.all');
// Route::get('/store', [store::class, 'index'])->name('store.index');
Route::get('/{category}', [store::class, 'show'])->name('categories.show');
