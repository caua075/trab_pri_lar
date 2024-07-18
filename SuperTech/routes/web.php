<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\CheckoutController;

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

//Page index
Route::get('/', [ProductController::class, 'index']);

//Page about
Route::get('/about', [ProductController::class, 'about']);

//Page products
Route::get('/products/create', [ProductController::class, 'create']);
Route::get('/products/{id}', [ProductController::class, 'show']);
Route::post('/products', [ProductController::class, 'store']);

//Page cart
Route::get('/add-to-cart/{id}', [CartController::class, 'addToCart']);
Route::get('/remove-from-cart/{id}', [CartController::class, 'removeFromCart']);
Route::get('/carrinho-compras', [CartController::class, 'viewCart']);

//Page checkout
Route::post('/checkout', [CheckoutController::class, 'checkout']);
Route::get('/checkout', [CheckoutController::class, 'checkoutPage']);
