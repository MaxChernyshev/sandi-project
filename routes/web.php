<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\MainController as AdminMain;
use App\Http\Controllers\Front\MainController as FrontMain;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});


// ADMIN PANEL
Route::name('admin.')
    ->prefix('admin')
    ->group(function () {
        Route::get('/', [AdminMain::class, 'index'])->name('index');
    });

// END ADMIN PANEL


// FRONT
Route::name('front.')
    ->group(function () {
        Route::get('/', [FrontMain::class, 'index'])->name('index');
    });

// END FRONT


require __DIR__ . '/auth.php';
