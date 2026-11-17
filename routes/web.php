<?php

use App\Models\Blog;
use App\Models\Service;
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

Route::get('/sitemap.xml', function () {
    $staticPageRoutes = ['home', 'about', 'services', 'contact', 'blog'];

    $staticPages = collect($staticPageRoutes)->map(fn (string $routeName): array => [
        'loc' => route($routeName),
        'priority' => $routeName === 'home' ? '1.0' : '0.8',
    ]);

    $servicePages = Service::query()
        ->where('is_active', true)
        ->get(['slug', 'updated_at'])
        ->map(fn (Service $service): array => [
            'loc' => route('services.show', ['slug' => $service->slug]),
            'lastmod' => $service->updated_at?->toAtomString(),
            'priority' => '0.7',
        ]);

    $blogPages = Blog::query()
        ->where('is_active', true)
        ->get(['slug', 'updated_at'])
        ->map(fn (Blog $blog): array => [
            'loc' => route('blog.show', ['slug' => $blog->slug]),
            'lastmod' => $blog->updated_at?->toAtomString(),
            'priority' => '0.6',
        ]);

    return response()->view('sitemap', [
        'urls' => $staticPages->concat($servicePages)->concat($blogPages),
    ], 200, ['Content-Type' => 'application/xml']);
})->name('sitemap');

// Guest Authentication Routes
Route::middleware('guest')->group(function () {
    Route::livewire('/login', 'auth::login')->name('login');
});

// Authenticated Admin Routes
Route::middleware('auth')->group(function () {
    Route::livewire('/admin', 'admin::dashboard')->name('admin.dashboard');
    Route::livewire('/admin/homesliders', 'admin::homeslider')->name('admin.homesliders');
    Route::livewire('/admin/testimonials', 'admin::testimonial')->name('admin.testimonials');
    Route::livewire('/admin/categories', 'admin::category')->name('admin.categories');
    Route::livewire('/admin/services', 'admin::service.list')->name('admin.services.index');
    Route::livewire('/admin/services/create', 'admin::service.add')->name('admin.services.create');
    Route::livewire('/admin/services/{service}/edit', 'admin::service.update')->name('admin.services.edit');

    Route::livewire('/admin/blogs', 'admin::blog.list')->name('admin.blogs.index');
    Route::livewire('/admin/blogs/create', 'admin::blog.add')->name('admin.blogs.create');
    Route::livewire('/admin/blogs/{blog}/edit', 'admin::blog.update')->name('admin.blogs.edit');
    Route::livewire('/admin/contacts', 'admin::contact')->name('admin.contacts');
    Route::livewire('/admin/settings', 'admin::setting')->name('admin.settings');

    Route::get('/logout', function () {
        Auth::logout();
        request()->session()->invalidate();
        request()->session()->regenerateToken();

        return redirect('/login');
    })->name('logout');
});
