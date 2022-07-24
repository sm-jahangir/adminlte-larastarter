<?php

use App\Http\Controllers\Frontend\CartController;
use App\Http\Controllers\Frontend\HomeController as FrontendHomeController;
use App\Http\Controllers\Frontend\ProductController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;

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

// Route::get('/', function () {
//     return view('frontend.index');
// });
Route::get('/', [FrontendHomeController::class, 'index'])->name('frontend');
// Route::view('shop', 'frontend.products.products');
Route::view('contact', 'frontend.contact');
Route::view('cart', 'frontend.cart');
Route::view('blog', 'frontend.blog');
Route::view('checkout', 'frontend.checkout');
Route::view('single-blog', 'frontend.single-blog');
Route::get('/products', [ProductController::class, 'index'])->name('products.index');
Route::get('/product/{product}', [ProductController::class, 'show'])->name('products.show');

Route::get('/cart', [CartController::class, 'index'])->name('cart.index');
Route::get('/addtocart/{id}', [CartController::class, 'storeCart'])->name('cart.store');
Route::delete('/cart/{id}', [CartController::class, 'remove'])->name('cart.remove');
Route::put('cart-update/{id}', [CartController::class, 'update'])->name('cart-update');
Route::get('/cart/destroy', [CartController::class, 'destroy'])->name('cart.destroy');
Route::get('/check', [CartController::class, 'check']);


Auth::routes();

Route::get('/home', [HomeController::class, 'index'])->name('home');
