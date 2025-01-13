<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Front\MainController as FrontMain;
use App\Http\Controllers\Front\StatementController as FrontStatement;
use App\Http\Controllers\Front\InstructionController as FrontInstruction;
use App\Http\Controllers\Front\CategoryController as FrontCategory;
use App\Http\Controllers\Front\ProductController;



Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});


// FRONT
Route::name('front.')
    ->group(function () {
        Route::get('/', [FrontMain::class, 'index'])->name('index');
        Route::get('/contacts', [FrontMain::class, 'contact'])->name('contacts');

        Route::prefix('statement')
            ->name('statement.')
            ->group(function () {
                Route::get('/{statement:id}', [FrontStatement::class, 'show'])->name('show');
            });



        Route::prefix('instructions')
            ->name('instructions.')
            ->group(function () {
                Route::get('/', [FrontInstruction::class, 'index'])->name('index');
                Route::get('/{instruction:id}', [FrontInstruction::class, 'show'])->name('show');
            });

        Route::prefix('category')
            ->name('category.')
            ->group(function () {
                Route::get('/', [FrontCategory::class, 'index'])->name('index');
                Route::get('/{category:id}', [FrontCategory::class, 'show'])->name('show');
            });
        Route::prefix('products')
            ->name('products.')
            ->group(function () {
                Route::get('/hot-menu', [ProductController::class, 'hotMenu'])->name('hot-menu');
                Route::get('/frozen-menu', [ProductController::class, 'frozenMenu'])->name('frozen-menu');
                Route::get('/product/{product:name}', [ProductController::class, 'show'])->name('product');
            });

    });

// END FRONT


require __DIR__ . '/auth.php';
