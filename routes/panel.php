<?php

use App\Http\Controllers\panel\PanelController;
use App\Http\Controllers\panel\ProjectController;
use App\Http\Controllers\panel\TaskChecklistController;
use App\Http\Controllers\panel\TaskController;
use Illuminate\Support\Facades\Route;

Route::prefix('dashboard')->name('dashboard.')->middleware('auth')->group(function () {
    Route::get('/', [PanelController::class, 'index'])->name('index');


    Route::prefix('project')->name('project.')->group(function () {
        Route::get('/', [ProjectController::class, 'index'])->name('index');

        Route::get('/redirect/{project}', [ProjectController::class, 'redirect'])->name('redirect');
        Route::get('/project/{project}', [ProjectController::class, 'show'])->name('show');
        Route::get('/tasks/{project}', [ProjectController::class, 'task'])->name('task');
        Route::get('/files/{project}', [ProjectController::class, 'file'])->name('file');
        Route::get('/members/{project}', [ProjectController::class, 'member'])->name('member');
        Route::get('/dependencies/{project}', [ProjectController::class, 'dependency'])->name('dependency');

        Route::get('/create', [ProjectController::class, 'create'])->name('create');
        Route::post('/store', [ProjectController::class, 'store'])->name('store');
        Route::get('/edit/{project}', [ProjectController::class, 'edit'])->name('edit');
        Route::put('/update/{project}', [ProjectController::class, 'update'])->name('update');
        Route::put('/option/{project}', [ProjectController::class, 'option'])->name('options');
        Route::get('/delete/{project}', [ProjectController::class, 'destroy'])->name('destroy');
    });


    Route::prefix('task')->name('task.')->group(function () {
        Route::get('/', [TaskController::class, 'index'])->name('index');
        Route::get('/project/{task}', [TaskController::class, 'show'])->name('show');
        Route::get('/create/{project}', [TaskController::class, 'create'])->name('create');
        Route::post('/store', [TaskController::class, 'store'])->name('store');
        Route::post('/tasks/{task}/subtasks', [TaskController::class, 'storeSubtask'])->name('subtasks.store');
        Route::get('/edit/{task}', [TaskController::class, 'edit'])->name('edit');
        Route::put('/update/{task}', [TaskController::class, 'update'])->name('update');
        Route::get('/delete/{task}', [TaskController::class, 'destroy'])->name('destroy');
        //        check
        Route::post('/tasks/{task}/checklist', [TaskChecklistController::class, 'store'])->name('checklist');
        Route::post('/tasks/{task}/add-checklist', [TaskChecklistController::class, 'addstore'])->name('add.checklist');
        Route::put('/tasks/checklist/{taskChecklist}', [TaskChecklistController::class, 'update'])->name('checklist.update');
        Route::get('/tasks/checklist/{taskChecklist}', [TaskChecklistController::class, 'destroy'])->name('checklist.delete');
        Route::post('/tasks/checklist/check/{taskChecklist}', [TaskChecklistController::class, 'check'])->name('checklist.check');
    });

});

