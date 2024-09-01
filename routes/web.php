<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\MainController as AdminMain;
use App\Http\Controllers\Front\MainController as FrontMain;
use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\StatementController as AdminStatement;
use App\Http\Controllers\Front\StatementController as FrontStatement;
use App\Http\Controllers\Admin\InstructionController as AdminInstruction;
use App\Http\Controllers\Front\InstructionController as FrontInstruction;
use App\Http\Controllers\Admin\IngridientController;

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
                Route::get('/', [AdminStatement::class, 'index'])->name('index');

                Route::get('/create', [AdminStatement::class, 'create'])->name('create');
                Route::post('/store', [AdminStatement::class, 'store'])->name('store');

                Route::get('/edit/{statement:id}', [AdminStatement::class, 'edit'])->name('edit');
                Route::put('/update/{statement:id}', [AdminStatement::class, 'update'])->name('update');

                Route::delete('/delete/{statement:id}', [AdminStatement::class, 'destroy'])->name('delete');
            });

        Route::prefix('instructions')
            ->name('instructions.')
            ->group(function () {
                Route::get('/', [AdminInstruction::class, 'index'])->name('index');

                Route::get('/create', [AdminInstruction::class, 'create'])->name('create');
                Route::post('/store', [AdminInstruction::class, 'store'])->name('store');

                Route::get('/edit/{instruction:id}', [AdminInstruction::class, 'edit'])->name('edit');
                Route::put('/update/{instruction:id}', [AdminInstruction::class, 'update'])->name('update');

                Route::delete('/delete/{instruction:id}', [AdminInstruction::class, 'destroy'])->name('delete');
            });

        Route::prefix('ingridients')
            ->name('ingridients.')
            ->group(function () {
                Route::get('/', [IngridientController::class, 'index'])->name('index');

                Route::get('/create', [IngridientController::class, 'create'])->name('create');
                Route::post('/store', [IngridientController::class, 'store'])->name('store');

                Route::get('/edit/{ingridient:id}', [IngridientController::class, 'edit'])->name('edit');
                Route::put('/update/{ingridient:id}', [IngridientController::class, 'update'])->name('update');

                Route::delete('/delete/{ingridient:id}', [IngridientController::class, 'destroy'])->name('delete');
            });

    });

// END ADMIN PANEL


// FRONT
Route::name('front.')
    ->group(function () {
        Route::get('/', [FrontMain::class, 'index'])->name('index');

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
    });

// END FRONT


require __DIR__ . '/auth.php';
