<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\Product;
use App\Http\Controllers\Client;

use App\Http\Controllers\Domain;


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
// Route::get('/domain', [Domain::class, 'sds']);

Route::get('/domain', [Domain::class, 'store'])->name('domain');

Route::get('/check_domain', [Domain::class, 'check_domain'])->name('check_domain');
