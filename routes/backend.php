<?php

use App\Http\Controllers\backend\DashboardController;
use Illuminate\Support\Facades\Route;



Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');




