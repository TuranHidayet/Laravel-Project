<?php


use App\Http\Controllers\Admin\CarController;
use App\Http\Controllers\Admin\ContactController as AdminContactController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\Auth\AuthController;
use App\Http\Controllers\Front\ContactController;
use App\Http\Controllers\Front\HomeController;
use Illuminate\Support\Facades\Route;


Route::name('app.')->group(function () {
    Route::controller(HomeController::class)->group(function () {
        Route::get('/', 'index')->name('home');
        Route::get('/about', 'about')->name('about');
        Route::get('/cars', 'cars')->name('cars');
        Route::get('/cars{id}', 'car')->name('car');
        Route::get('/contact', 'contact')->name('contact');
        Route::get('/blogs', 'blogs')->name('blogs');
    });

    Route::post('/contact', [ContactController::class, 'store'])->name('contact.store');

    Route::controller(AuthController::class)->group(function () {
        Route::get('/register', 'register')->name('register');
        Route::post('/register', 'postRegister')->name('postRegister');
        Route::get('/login', 'login')->name('login');
        Route::post('/login', 'postLogin')->name('postLogin');
        Route::get('/profile', 'profile')->name('profile')->middleware('auth');
        Route::get('/logout', 'logout')->name('logout');
    });
});

Route::prefix('admin')->name('admin.')->group(function () {
    Route::controller(AuthController::class)->group(function () {
       Route::get('/login', 'login')->name('login');
    });

    Route::controller(UserController::class)->prefix('users')->name('users.')->group(function () {
        Route::get('/', 'index')->name('index')->middleware('auth');
        Route::get('destroy/{id}', 'destroy')->name('destroy');
    });

    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard')->middleware('auth');

    Route::controller(CarController::class)->prefix('cars')->name('cars.')->middleware('auth')->group(function () {
        Route::get('/', 'index')->name('index');
        Route::get('/create', 'create')->name('create');
        Route::get('show/{id}', 'show')->name('show');
        Route::post('/store', 'store')->name('store');
        Route::get('destroy/{id}', 'destroy')->name('destroy');
        Route::get('edit/{id}', 'edit')->name('edit');
        Route::post('update/{id}', 'update')->name('update');
    });

    Route::controller(AdminContactController::class)->prefix('contact')->name('contact.')->middleware('auth')->group(function () {
        Route::get('/', 'index')->name('index');
        Route::get('/destroy/{id}', 'destroy')->name('destroy');
    });
});







