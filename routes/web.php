<?php
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\BookingController;

Route::resource('services', ServiceController::class);
Route::resource('bookings', BookingController::class);
