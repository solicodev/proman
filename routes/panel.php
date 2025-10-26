<?php

use App\Http\Controllers\panel\PanelController;
use App\Http\Controllers\panel\ProjectController;
use App\Http\Controllers\panel\TaskController;
use Illuminate\Support\Facades\Route;

Route::prefix('dashboard')->name('dashboard.')->middleware('auth')->group(function () {
    Route::get('/', [PanelController::class, 'index'])->name('index');


    Route::prefix('project')->name('project.')->group(function () {
        Route::get('/', [ProjectController::class, 'index'])->name('index');
        Route::get('/redirect/{project}', [ProjectController::class, 'redirect'])->name('redirect');
        Route::get('/project/{project}', [ProjectController::class, 'show'])->name('show');
        Route::get('/create', [ProjectController::class, 'create'])->name('create');
        Route::post('/store', [ProjectController::class, 'store'])->name('store');
        Route::get('/edit/{project}', [ProjectController::class, 'edit'])->name('edit');
        Route::put('/update/{project}', [ProjectController::class, 'update'])->name('update');
        Route::get('/delete/{project}', [ProjectController::class, 'destroy'])->name('destroy');
    });


    Route::prefix('task')->name('task.')->group(function () {
        Route::get('/', [TaskController::class, 'index'])->name('index');
        Route::get('/project/{task}', [TaskController::class, 'show'])->name('show');
        Route::get('/create', [TaskController::class, 'create'])->name('create');
        Route::post('/store', [TaskController::class, 'store'])->name('store');
        Route::get('/edit/{task}', [TaskController::class, 'edit'])->name('edit');
        Route::put('/update/{task}', [TaskController::class, 'update'])->name('update');
        Route::get('/delete/{task}', [TaskController::class, 'destroy'])->name('destroy');
    });
});

