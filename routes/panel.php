<?php

use App\Http\Controllers\panel\PanelController;
use Illuminate\Support\Facades\Route;

Route::prefix('dashboard')->name('dashboard.')->middleware('auth')->group(function () {
    Route::get('/', [PanelController::class, 'index'])->name('index');
});
