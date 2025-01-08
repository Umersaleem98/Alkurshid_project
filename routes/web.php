<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Home\HomeController;
use App\Http\Controllers\Home\Appointment\AppointmentController;



Route::get('/', [HomeController::class, 'index'])->name('index');
Route::get('/appointment', [AppointmentController::class, 'index'])->name('index');