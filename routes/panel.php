<?php

use App\Http\Controllers\panel\PanelController;
use Illuminate\Support\Facades\Route;

Route::prefix('panel')->name('panel.')->group(function () {
    Route::get('dashboard', [PanelController::class, 'index'])->name('panel');
});
