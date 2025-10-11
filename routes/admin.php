<?php

use App\Http\Controllers\admin\adminController;
use Illuminate\Support\Facades\Route;

Route::prefix('admin')->name('admin.')->group(function () {
    Route::get('panel', [adminController::class , 'index'])->name('index');
});
