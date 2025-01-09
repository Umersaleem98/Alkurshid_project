<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\AuthController;
use App\Http\Controllers\Home\HomeController;
use App\Http\Controllers\Home\About\AboutController;
use App\Http\Controllers\Home\Contact\ContactController;
use App\Http\Controllers\Home\Doctors\DoctorsController;
use App\Http\Controllers\Home\Services\ServicesController;
use App\Http\Controllers\Home\Department\DepartmentController;
use App\Http\Controllers\Home\Appointment\AppointmentController;

Route::get('/', [HomeController::class, 'index'])->name('home');

Route::get('/appointment', [AppointmentController::class, 'index'])->name('index');
Route::get('/about', [AboutController::class, 'index'])->name('About us');
Route::get('/services', [ServicesController::class, 'index'])->name('services');
Route::get('/doctors', [DoctorsController::class, 'index'])->name('doctors');
Route::get('/contact', [ContactController::class, 'index'])->name('contact us');

// Department Routes
Route::get('/departments/pathology', [DepartmentController::class, 'Pathology'])->name('pathology');
Route::get('/departments/cardiology', [DepartmentController::class, 'Cardiology'])->name('cardiology');
Route::get('/departments/radiology', [DepartmentController::class, 'Radiology'])->name('radiology');

// Auth Routes 
Route::get('login', [AuthController::class, 'showLoginForm'])->name('login');
Route::post('login', [AuthController::class, 'login']);
Route::get('register', [AuthController::class, 'showRegisterForm'])->name('register');
Route::post('register', [AuthController::class, 'register']);
// Route::post('logout', [AuthController::class, 'logout'])->name('logout');
Route::post('/logout', function () {
    Auth::logout();
    request()->session()->invalidate();
    request()->session()->regenerateToken();
    return redirect('/login');
})->name('logout');

// Dashboard Routes 

Route::middleware('auth')->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    });
});