<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

Route::livewire('/', 'pages::home')->name('home');
Route::livewire('/about', 'pages::about')->name('about');
Route::livewire('/services', 'pages::services')->name('services');
Route::livewire('/services/{slug?}', 'pages::service-show')->name('services.show');
Route::livewire('/contact', 'pages::contact')->name('contact');
Route::livewire('/blog', 'pages::blog')->name('blog');
Route::livewire('/blog/{slug?}', 'pages::blog-show')->name('blog.show');

Route::livewire('/login', 'auth::login')->name('login');
Route::livewire('/admin', 'admin::dashboard')->name('admin.dashboard');
Route::get('/logout', function () {
    Auth::logout();
    request()->session()->invalidate();
    request()->session()->regenerateToken();

    return redirect('/login');
})->name('logout');


