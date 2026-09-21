<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

// Public Website Routes
Route::livewire('/', 'pages::home')->name('home');
Route::livewire('/about', 'pages::about')->name('about');
Route::livewire('/services', 'pages::services')->name('services');
Route::livewire('/services/{slug?}', 'pages::service-show')->name('services.show');
Route::livewire('/contact', 'pages::contact')->name('contact');
Route::livewire('/blog', 'pages::blog')->name('blog');
Route::livewire('/blog/{slug?}', 'pages::blog-show')->name('blog.show');

// Guest Authentication Routes
Route::middleware('guest')->group(function () {
    Route::livewire('/login', 'auth::login')->name('login');
});

// Authenticated Admin Routes
Route::middleware('auth')->group(function () {
    Route::livewire('/admin', 'admin::dashboard')->name('admin.dashboard');
    Route::livewire('/admin/testimonials', 'admin::testimonial')->name('admin.testimonials');
    Route::livewire('/admin/categories', 'admin::category')->name('admin.categories');
    Route::livewire('/admin/services', 'admin::service.list')->name('admin.services.index');
    Route::livewire('/admin/services/create', 'admin::service.add')->name('admin.services.create');
    Route::livewire('/admin/services/{service}/edit', 'admin::service.update')->name('admin.services.edit');

    Route::get('/logout', function () {
        Auth::logout();
        request()->session()->invalidate();
        request()->session()->regenerateToken();

        return redirect('/login');
    })->name('logout');
});
