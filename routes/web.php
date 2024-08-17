<?php

use Illuminate\Support\Facades\Route;
use \App\Http\Controllers\HomeController;
use \App\Http\Controllers\ProductController;
use \App\Http\Controllers\NewController;
use \App\Http\Controllers\CartDetailController;
use \App\Http\Controllers\ProductDetailController;
use \App\Http\Controllers\Auth\LoginController;
use \App\Http\Controllers\Auth\RegisterController;

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
    return view('index');
});

Route::get('/index', [HomeController::class, 'index']);
Route::get('/products', [ProductController::class, 'listProducts']);
Route::get('/news', [NewController::class, 'listNews']);
Route::get('/cart', [CartDetailController::class, 'cartDetail']);
Route::get('/productDetail', [ProductDetailController::class, 'productDetail']);
Route::get('/login', [LoginController::class, 'login']);
Route::get('/register', [RegisterController::class, 'register']);
