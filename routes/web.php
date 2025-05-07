<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\OrdersTotalController;
Route::get('/orders_total_admin', [OrdersTotalController::class, 'index'])->name('orders_total_admin');

use App\Http\Controllers\UsersDataController;
Route::get('/users_data_admin', [UsersDataController::class, 'index'])->name('users_data_admin');

use App\Http\Controllers\PendingDataController;
Route::get('/pending_data_admin', [PendingDataController::class, 'index'])->name('pending_data_admin');

use App\Http\Controllers\SettingsController;
Route::get('/settings_admin', [SettingsController::class, 'index'])->name('settings_admin');

use App\Http\Controllers\FeedbackController;
Route::get('/feedback_admin', [FeedbackController::class, 'index'])->name('feedback_admin');

use App\Http\Controllers\RoomDataController;
Route::get('/room_data_admin', [RoomDataController::class, 'index'])->name('room_data_admin');

use App\Http\Controllers\DataVerificationController;
Route::get('/data_verification', [DataVerificationController::class, 'index'])->name('data_verification');

use App\Http\Controllers\LoginController;
Route::get('/login', [LoginController::class, 'index'])->name('login');

use App\Http\Controllers\RegisterController;
Route::get('/register', [RegisterController::class, 'index'])->name('register');

use App\Http\Controllers\LandingPage1Controller;
Route::get('/landing_page1', [LandingPage1Controller::class, 'index'])->name('landing_page1');
