<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ProjectController;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\TestimonialController;
use App\Http\Controllers\BlogPostController;
use App\Http\Controllers\ContactController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    $projects = \App\Models\Project::all();
    $services = \App\Models\Service::all();
    $testimonials = \App\Models\Testimonial::all();
    return view('welcome', compact('projects', 'services', 'testimonials'));
})->name('home');

Route::get('/projects', [ProjectController::class, 'index'])->name('projects');
Route::post('/contact', [ContactController::class, 'store'])->name('contact.store');

Route::middleware(['auth'])->prefix('admin')->group(function () {
    Route::get('/dashboard', function () {
        return view('admin.dashboard');
    })->name('admin.dashboard');
    Route::resource('projects', ProjectController::class)->except(['index']);
    Route::resource('services', ServiceController::class);
    Route::resource('testimonials', TestimonialController::class);
    Route::resource('blog_posts', BlogPostController::class);
});

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
