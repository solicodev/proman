<?php

use App\Http\Controllers\panel\PanelController;
use Illuminate\Support\Facades\Route;

Route::prefix('dashboard')->name('dashboard.')->group(function () {
    Route::get('/', [PanelController::class, 'index'])->name('index');
});
Route::prefix('project')->name('project.')->group(function () {
    Route::get('/', [PhotoController::class , 'index'])->name('index');
//    Route::get('/create', [PhotoController::class , 'create'])->name('create');
//    Route::post('/store', [PhotoController::class , 'store'])->name('store');
//    Route::get('/edit/{photo}', [PhotoController::class , 'edit'])->name('edit');
//    Route::put('/update/{photo}', [PhotoController::class , 'update'])->name('update');
//    Route::get('/delete/{photo}', [PhotoController::class , 'destroy'])->name('destroy');
});
