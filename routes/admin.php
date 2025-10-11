<?php

use App\Http\Controllers\admin\adminController;
use App\Http\Controllers\admin\PositionController;
use Illuminate\Support\Facades\Route;

Route::prefix('panel')->name('admin.')->group(function () {
    Route::get('admin', [adminController::class , 'index'])->name('index');

    Route::prefix('position')->name('positions.')->group(function () {
        Route::get('/', [PositionController::class , 'index'])->name('index');
        Route::get('/create', [PositionController::class , 'create'])->name('create');
        Route::post('/store', [PositionController::class , 'store'])->name('store');
        Route::get('/edit/{position}', [PositionController::class , 'edit'])->name('edit');
        Route::put('/update/{position}', [PositionController::class , 'update'])->name('update');
        Route::get('/delete/{position}', [PositionController::class , 'destroy'])->name('destroy');
    });
});
