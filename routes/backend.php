<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Backend\AdsController;
use App\Http\Controllers\Backend\TagController;
use App\Http\Controllers\Backend\PageController;
use App\Http\Controllers\Backend\RoleController;
use App\Http\Controllers\backend\UserController;
use App\Http\Controllers\Backend\BrandController;
use App\Http\Controllers\Backend\ProfileController;
use App\Http\Controllers\Backend\CategoryController;
use App\Http\Controllers\Backend\ColorController;
use App\Http\Controllers\Backend\CouponController;
use App\Http\Controllers\backend\DashboardController;
use App\Http\Controllers\Backend\OrderController;
use App\Http\Controllers\Backend\ProductController;
use App\Http\Controllers\Backend\SizeController;
use App\Http\Controllers\Backend\SliderController;
use App\Models\Slider;

Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');
Route::resource('roles', RoleController::class);
Route::resource('users', UserController::class);
Route::get('user/export', [UserController::class, 'exportuser'])->name('user.export');
Route::post('user/import', [UserController::class, 'importUser'])->name('user.import');
Route::view('user-export-import', 'backend.users.import')->name('eiview');

//Profile Routes
Route::get('profile', [ProfileController::class, 'index'])->name('profile.index');
Route::post('profile', [ProfileController::class, 'update'])->name('profile.update');
//Change Password Routes
Route::get('profile/changepassword', [ProfileController::class, 'changepass'])->name('profile.changepassindex');
Route::post('profile/changepassword', [ProfileController::class, 'changepassword'])->name('profile.changepassword');

Route::resource('pages', PageController::class);

Route::resource('category', CategoryController::class);
Route::resource('tags', TagController::class);
Route::resource('brand', BrandController::class);
Route::resource('ads', AdsController::class);
Route::resource('size', SizeController::class);
Route::resource('color', ColorController::class);
Route::resource('product', ProductController::class);
Route::resource('slider', SliderController::class);
Route::resource('coupons', CouponController::class);

Route::get('orders', [OrderController::class, 'orders'])->name('orders');
Route::get('order/details/{id}', [OrderController::class, 'details'])->name('orders.details');
