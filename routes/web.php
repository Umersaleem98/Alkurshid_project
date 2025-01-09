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
use App\Http\Controllers\Dashboard\Contact\ContactDashboardController;
use App\Http\Controllers\Dashboard\Doctors\DoctorsDashboardController;
use App\Http\Controllers\Dashboard\Appointment\AppointmentDashboardController;
use App\Http\Controllers\Dashboard\DoctorsCategory\CategoryDashboardController;

Route::get('/', [HomeController::class, 'index'])->name('home');

Route::get('/about', [AboutController::class, 'index'])->name('About us');
Route::get('/services', [ServicesController::class, 'index'])->name('services');
Route::get('/doctors', [DoctorsController::class, 'index'])->name('doctors');
Route::get('/about-doctor/{id}', [DoctorsController::class, 'AboutDoctor']);
Route::get('/contact', [ContactController::class, 'index'])->name('contact us');
Route::post('/contacts', [ContactController::class, 'store']);

Route::get('/appointment', [AppointmentController::class, 'index'])->name('index');
Route::post('/appointments', [AppointmentController::class, 'store'])->name('appointments.store');

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

// Dashboard Contact Routs 
Route::get('contact.index',[ContactDashboardController::class, 'index']);
Route::get('/delete/{id}', [ContactDashboardController::class, 'destroy']);

// Dashboard appointments Routs 
Route::get('appointments.index',[AppointmentDashboardController::class, 'index']);

// Dashboard Doctor Routs 
Route::get('doctors.index',[DoctorsDashboardController::class, 'index']);
Route::get('doctors.create',[DoctorsDashboardController::class, 'create']);
Route::post('doctors.store',[DoctorsDashboardController::class, 'store']);

Route::get('categories.index',[CategoryDashboardController::class, 'index']);
Route::get('categories.create',[CategoryDashboardController::class, 'create']);
Route::post('categories.store',[CategoryDashboardController::class, 'store']);

