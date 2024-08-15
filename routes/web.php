<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\MainController as AdminMain;
use App\Http\Controllers\Front\MainController as FrontMain;
use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\StatementController;

use App\Http\Middleware\AdminPanelMiddleware;

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
    ->middleware(AdminPanelMiddleware::class)
    ->prefix('admin')
    ->group(function () {


        Route::prefix('main')
            ->name('main.')
            ->group(function () {
                Route::get('/', [AdminMain::class, 'index'])->name('index');
            });


        Route::prefix('categories')
            ->name('categories.')
            ->group(function () {
                Route::get('/', [CategoryController::class, 'index'])->name('index');

                Route::get('/create', [CategoryController::class, 'create'])->name('create');
                Route::post('/store', [CategoryController::class, 'store'])->name('store');

                Route::get('/edit/{category:id}', [CategoryController::class, 'edit'])->name('edit');
                Route::put('/update/{category:id}', [CategoryController::class, 'update'])->name('update');

                Route::delete('/delete/{category:id}', [CategoryController::class, 'destroy'])->name('delete');
            });

        Route::prefix('statements')
            ->name('statements.')
            ->group(function () {
                Route::get('/', [StatementController::class, 'index'])->name('index');

                Route::get('/create', [StatementController::class, 'create'])->name('create');
                Route::post('/store', [StatementController::class, 'store'])->name('store');

                Route::get('/edit/{statement:id}', [StatementController::class, 'edit'])->name('edit');
                Route::put('/update/{statement:id}', [StatementController::class, 'update'])->name('update');

                Route::delete('/delete/{statement:id}', [StatementController::class, 'destroy'])->name('delete');
            });

    });

// END ADMIN PANEL


// FRONT
Route::name('front.')
    ->group(function () {
        Route::get('/', [FrontMain::class, 'index'])->name('index');
    });

// END FRONT


require __DIR__ . '/auth.php';
