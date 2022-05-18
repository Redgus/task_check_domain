<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\Product;
use App\Http\Controllers\Client;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/products', [Product::class, 'store'])->name('products');

Route::post('/product_create', [Product::class, 'create'])->name('product_create');

Route::get('/clients', [Client::class, 'store'])->name('clients');

Route::post('/client_create', [Client::class, 'create'])->name('client_create');