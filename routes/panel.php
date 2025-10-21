<?php

use App\Http\Controllers\panel\PanelController;
use App\Http\Controllers\panel\ProjectController;
use Illuminate\Support\Facades\Route;

Route::prefix('dashboard')->name('dashboard.')->group(function () {
    Route::get('/', [PanelController::class, 'index'])->name('index');


    Route::prefix('project')->name('project.')->group(function () {
        Route::get('/', [ProjectController::class, 'index'])->name('index');
        Route::get('/create', [ProjectController::class, 'create'])->name('create');
        Route::post('/store', [ProjectController::class, 'store'])->name('store');
        Route::get('/edit/{project}', [ProjectController::class, 'edit'])->name('edit');
        Route::put('/update/{project}', [ProjectController::class, 'update'])->name('update');
        Route::get('/delete/{project}', [ProjectController::class, 'destroy'])->name('destroy');
    });
});

