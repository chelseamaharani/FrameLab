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