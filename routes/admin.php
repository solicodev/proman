<?php

use App\Http\Controllers\admin\adminController;
use App\Http\Controllers\admin\DepartmentController;
use App\Http\Controllers\admin\PositionController;
use Illuminate\Support\Facades\Route;

Route::prefix('admin')->name('admin.')->group(function () {
    Route::get('/', [adminController::class , 'index'])->name('index');

    Route::prefix('position')->name('position.')->group(function () {
        Route::get('/', [PositionController::class , 'index'])->name('index');
//        Route::get('/create', [PositionController::class , 'create'])->name('create');
        Route::post('/store', [PositionController::class , 'store'])->name('store');
//        Route::get('/edit/{position}', [PositionController::class , 'edit'])->name('edit');
        Route::put('/update/{position}', [PositionController::class , 'update'])->name('update');
        Route::get('/delete/{position}', [PositionController::class , 'destroy'])->name('destroy');
    });

    Route::prefix('department')->name('department.')->group(function () {
        Route::get('/', [DepartmentController::class , 'index'])->name('index');
        Route::post('/store', [DepartmentController::class , 'store'])->name('store');
        Route::put('/update/{department}', [DepartmentController::class , 'update'])->name('update');
        Route::get('/delete/{department}', [DepartmentController::class , 'destroy'])->name('destroy');
    });
});
