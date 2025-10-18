<?php

use App\Http\Controllers\admin\adminController;
use App\Http\Controllers\admin\DepartmentController;
use App\Http\Controllers\Admin\PermissionController;
use App\Http\Controllers\admin\PhotoController;
use App\Http\Controllers\admin\PositionController;
use App\Http\Controllers\admin\ProjectController;
use App\Http\Controllers\admin\UserController;
use Illuminate\Support\Facades\Route;

Route::prefix('admin')->name('admin.')->middleware(['auth','SuperAdminCheck'])->group(function () {
    Route::get('/', [adminController::class , 'index'])->name('index');

    Route::prefix('user')->name('user.')->group(function () {
        Route::get('/', [UserController::class , 'index'])->name('index');
        Route::get('/create', [UserController::class , 'create'])->name('create');
        Route::post('/store', [UserController::class , 'store'])->name('store');
        Route::get('/edit/{user}', [UserController::class , 'edit'])->name('edit');
        Route::put('/update/{user}', [UserController::class , 'update'])->name('update');
        Route::post('/status/{user}', [UserController::class , 'status'])->name('status');
        Route::put('/permission/{user}', [UserController::class , 'permission'])->name('permission');
        Route::get('/delete/{user}', [UserController::class , 'destroy'])->name('destroy');
    });

    Route::prefix('permission')->name('permission.')->group(function () {
        Route::get('/', [PermissionController::class , 'index'])->name('index');
        Route::get('/create', [PermissionController::class , 'create'])->name('create');
        Route::post('/store', [PermissionController::class , 'store'])->name('store');
        Route::get('/edit/{user}', [PermissionController::class , 'edit'])->name('edit');
        Route::put('/update/{user}', [PermissionController::class , 'update'])->name('update');
        Route::post('/status/{user}', [PermissionController::class , 'status'])->name('status');
        Route::get('/delete/{user}', [PermissionController::class , 'destroy'])->name('destroy');
    });

    Route::prefix('photo')->name('photo.')->group(function () {
        Route::get('/', [PhotoController::class , 'index'])->name('index');
        Route::get('/create', [PhotoController::class , 'create'])->name('create');
        Route::post('/store', [PhotoController::class , 'store'])->name('store');
        Route::get('/edit/{photo}', [PhotoController::class , 'edit'])->name('edit');
        Route::put('/update/{photo}', [PhotoController::class , 'update'])->name('update');
        Route::get('/delete/{photo}', [PhotoController::class , 'destroy'])->name('destroy');
    });

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

    Route::prefix('project')->name('project.')->group(function () {
        Route::get('/', [ProjectController::class , 'index'])->name('index');
        Route::get('/create', [ProjectController::class , 'create'])->name('create');
        Route::post('/store', [ProjectController::class , 'store'])->name('store');
        Route::get('/edit/{project}', [ProjectController::class , 'edit'])->name('edit');
        Route::put('/update/{project}', [ProjectController::class , 'update'])->name('update');
        Route::get('/delete/{project}', [ProjectController::class , 'destroy'])->name('destroy');
    });
});
