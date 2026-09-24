<?php

use App\Http\Controllers\PostController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});



Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    Route::get('/', [PostController::class, 'index']);
    Route::get('/dashboard', [PostController::class, 'index'])->middleware(['auth', 'verified'])->name('dashboard');
    Route::get('add-post', [\App\Http\Controllers\PostController::class, 'create'])->name('add-post');
    Route::post('store-post', [\App\Http\Controllers\PostController::class, 'store'])->name('store-post');
    Route::get('edit-post/{id}', [\App\Http\Controllers\PostController::class, 'edit'])->name('edit-post');
    Route::put('update-post/{id}', [\App\Http\Controllers\PostController::class, 'update'])->name('update-post');
    Route::delete('delete-post/{id}', [\App\Http\Controllers\PostController::class, 'delete'])->name('delete-post');

});


require __DIR__.'/auth.php';
