<?php

use App\Livewire\Categorie;
use App\Livewire\CounterTest;
use App\Livewire\Product;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});
Route::get('/categorie', Categorie::class)->name('categorie');
Route::get('/product', Product::class)->name('product');
Route::get('/counter', CounterTest::class)->name('counter');
