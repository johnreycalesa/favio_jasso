<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\AvailabilityController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\CustomerController;
use App\Http\Controllers\ServiceController;

// Public Routes
Route::get('/', [CustomerController::class, 'portfolio']);
Route::get('/portfolio', [CustomerController::class, 'portfolio']);
Route::get('/advocacy', [CustomerController::class, 'advocacy']);
Route::get('/contact', [CustomerController::class, 'contact']);
Route::get('/about', [CustomerController::class, 'about']);

// Authentication Routes
Route::get('/login', [LoginController::class, 'showLoginForm'])->name('login');
Route::post('/login', [LoginController::class, 'login']);
Route::get('/logout', [LoginController::class, 'logout'])->name('logout');

// Customer Routes
Route::post('/customer/book', [CustomerController::class, 'book'])->name('book');

// Admin Routes
Route::prefix('admin')->group(function () {
    Route::get('/dashboard', [AdminController::class, 'dashboard'])->name('admin.dashboard');
    Route::get('/service', [ServiceController::class, 'index'])->name('admin.service');
    Route::get('/service/create', [ServiceController::class, 'create'])->name('service.create');
    Route::post('/service/create', [ServiceController::class, 'store'])->name('service.store');
    Route::get('/service/update/{id}', [ServiceController::class, 'show']);
    Route::post('/service/update/{id}', [ServiceController::class, 'update'])->name('service.update');
    Route::view('/schedule-dashboard', 'admin.schedule')->name('admin.schedule');
    Route::view('/appointment-dashboard', 'admin.appointment')->name('admin.appointment');
    Route::get('/availabilities', [AvailabilityController::class, 'index'])->name('admin.availability');
    Route::get('/availabilities/create', [AvailabilityController::class, 'create'])->name('admin.availability.create');
    Route::post('/availabilities/create', [AvailabilityController::class, 'store'])->name('admin.availability.store');
});
