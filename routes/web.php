<?php

use App\Livewire\CreateProducts;
use App\Livewire\EditProduct;
use App\Livewire\ShowProducts;
use Illuminate\Support\Facades\Route;

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
    return view('welcome');
});

Route::get('/', ShowProducts::class)->name('products');
Route::get('/create', CreateProducts::class)->name('create.product');
Route::get('/user/edit/{product}', EditProduct::class)->name('edit.product');