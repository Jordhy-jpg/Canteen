<?php

use App\Http\Controllers\CategoryController;
use App\Models\Category;
use Illuminate\Support\Facades\Route;

Route::get('/', [CategoryController::class, 'index'])->name('home');
Route::get('/category/{category}', [CategoryController::class, 'show'])->name('category.show');
Route::get('/contact', function () {
    $categories = Category::all();
    return view('contact', compact('categories'));
})->name('contact');
