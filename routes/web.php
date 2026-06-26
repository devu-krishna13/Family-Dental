<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\AdminController;
use App\Http\Middleware\AdminMiddleware;

Route::get('/', function () {
    $latestArticles = BlogController::getLatestArticles();
    return view('welcome', compact('latestArticles'));
});

Route::get('/blog', [BlogController::class, 'index'])->name('blog.index');
Route::get('/blog/{slug}', [BlogController::class, 'show'])->name('blog.show');

// Admin Auth Routes
Route::get('/login', [AuthController::class, 'showLoginForm'])->name('admin.login.form');
Route::post('/login', [AuthController::class, 'login'])->name('admin.login');
Route::post('/logout', [AuthController::class, 'logout'])->name('admin.logout');

// Protected Admin Dashboard & CRUD Routes
Route::middleware([AdminMiddleware::class])->prefix('admin')->group(function () {
    Route::get('/dashboard', [AdminController::class, 'dashboard'])->name('admin.dashboard');
    Route::get('/blog/create', [AdminController::class, 'create'])->name('admin.blog.create');
    Route::post('/blog', [AdminController::class, 'store'])->name('admin.blog.store');
    Route::get('/blog/{id}/edit', [AdminController::class, 'edit'])->name('admin.blog.edit');
    Route::put('/blog/{id}', [AdminController::class, 'update'])->name('admin.blog.update');
    Route::delete('/blog/{id}', [AdminController::class, 'destroy'])->name('admin.blog.destroy');
});
