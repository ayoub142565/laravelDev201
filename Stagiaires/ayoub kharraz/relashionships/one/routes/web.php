<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\store;

Route::get('/', [store::class, 'index'])->name('store.index');
Route::get('/{category}', [store::class, 'show'])->name('categories.show');
