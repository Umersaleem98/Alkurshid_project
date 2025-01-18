<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\AuthController;
use App\Http\Controllers\Home\HomeController;
use App\Http\Controllers\Home\About\AboutController;
use App\Http\Controllers\Home\Career\CareerController;
use App\Http\Controllers\Home\Contact\ContactController;
use App\Http\Controllers\Home\Doctors\DoctorsController;
use App\Http\Controllers\Home\Services\ServicesController;
use App\Http\Controllers\Home\Department\DepartmentController;
use App\Http\Controllers\Home\Appointment\AppointmentController;
use App\Http\Controllers\Dashboard\Career\CareerDashboardController;
use App\Http\Controllers\Dashboard\Contact\ContactDashboardController;
use App\Http\Controllers\Dashboard\Doctors\DoctorsDashboardController;
use App\Http\Controllers\Dashboard\Services\ServicesDashboardController;
use App\Http\Controllers\Dashboard\Appointment\AppointmentDashboardController;
use App\Http\Controllers\Dashboard\DoctorsCategory\CategoryDashboardController;
use Illuminate\Support\Facades\Artisan;

Route::get('/clear-all', function () {
    // Clear application cache
    Artisan::call('cache:clear');
    // Clear route cache
    Artisan::call('route:clear');
    // Clear config cache
    Artisan::call('config:clear');
    // Clear view cache
    Artisan::call('view:clear');
    // Optional: Clear compiled files
    Artisan::call('clear-compiled');
    // Optional: Reset the application and reload autoload
    Artisan::call('optimize:clear');

    return response()->json([
        'message' => 'All caches cleared successfully!',
    ]);
});

Route::get('/', [HomeController::class, 'index'])->name('home');

Route::get('/about', [AboutController::class, 'index'])->name('About us');
Route::get('/services', [ServicesController::class, 'index'])->name('services');
Route::get('/doctors', [DoctorsController::class, 'index'])->name('doctors');
Route::get('/about-doctor/{id}', [DoctorsController::class, 'AboutDoctor']);
Route::get('/contact', [ContactController::class, 'index'])->name('contact us');
Route::post('/contacts', [ContactController::class, 'store']);
Route::get('/career', [CareerController::class, 'index']);

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
Route::get('contact_index',[ContactDashboardController::class, 'index']);
Route::get('/delete/{id}', [ContactDashboardController::class, 'destroy']);

// Dashboard appointments Routs 
Route::get('appointments_index',[AppointmentDashboardController::class, 'index']);

// Dashboard Doctor Routs 
Route::get('doctors_index',[DoctorsDashboardController::class, 'index']);
Route::get('doctors_create',[DoctorsDashboardController::class, 'create']);
Route::post('doctors_store',[DoctorsDashboardController::class, 'store']);
Route::get('doctors_edit/{id}',[DoctorsDashboardController::class, 'edit']);
Route::post('doctors_update/{id}',[DoctorsDashboardController::class, 'update']);
Route::get('doctors_delete/{id}',[DoctorsDashboardController::class, 'delete']);
// Dashboard Doctor Category Routs 

Route::get('categories_index',[CategoryDashboardController::class, 'index']);
Route::get('categories_create',[CategoryDashboardController::class, 'create']);
Route::post('categories_store',[CategoryDashboardController::class, 'store']);
Route::get('category_delete/{id}',[CategoryDashboardController::class, 'delete']);

Route::get('careers_index',[CareerDashboardController::class, 'index']);
Route::get('careers_create',[CareerDashboardController::class, 'create']);
Route::post('careers_store',[CareerDashboardController::class, 'store']);
Route::get('careers_edit/{id}',[CareerDashboardController::class, 'edit']);
Route::post('careers_update/{id}',[CareerDashboardController::class, 'update']);
Route::get('careers_delete/{id}',[CareerDashboardController::class, 'detete']);


Route::get('services_index',[ServicesDashboardController::class, 'index']);
Route::get('services_create',[ServicesDashboardController::class, 'create']);
Route::post('services_store',[ServicesDashboardController::class, 'store']);
// Route::get('services_edit/{id}',[ServicesDashboardController::class, 'edit']);
// Route::post('services_update/{id}',[ServicesDashboardController::class, 'update']);
Route::get('services_delete/{id}',[ServicesDashboardController::class, 'detete']);
