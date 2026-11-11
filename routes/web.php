<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PagesController;
use App\Http\Controllers\CustomersController;
use App\Http\Controllers\UsersController;

Route::get('/', [PagesController::class, 'landing'])->name('landing');
Route::get('/about', [PagesController::class, 'about'])->name('about');
Route::get('/customers', [CustomersController::class, 'index'])->name('customers.index');
Route::get('/users', [UsersController::class, 'index'])->name('users.index');
