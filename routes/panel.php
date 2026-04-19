<?php

use App\Http\Controllers\panel\PanelController;
use App\Http\Controllers\panel\PhotoController;
use App\Http\Controllers\panel\ProjectController;
use App\Http\Controllers\panel\ProjectManagerAdminController;
use App\Http\Controllers\panel\TaskChecklistController;
use App\Http\Controllers\panel\TaskController;
use App\Http\Controllers\panel\TicketController;
use App\Http\Controllers\panel\UserController;
use Illuminate\Support\Facades\Route;

Route::prefix('dashboard')->name('dashboard.')->middleware('auth')->group(function () {
    Route::get('/', [PanelController::class, 'index'])->name('index');


    Route::prefix('project')->name('project.')->group(function () {
        Route::get('/', [ProjectController::class, 'index'])->name('index');
        Route::get('/report', [ProjectController::class, 'report'])->name('report');
        Route::post('/filter', [ProjectController::class, 'filter'])->name('report.filter');
        Route::post('/approveVerify/{project}', [ProjectController::class, 'approveVerify'])->name('approveVerify');
        Route::post('/status/{project}', [ProjectController::class, 'status'])->name('status');

        Route::get('/redirect/{project}', [ProjectController::class, 'redirect'])->name('redirect');
        Route::get('/show/{project}', [ProjectController::class, 'show'])->name('show');
        Route::get('/tasks/{project}', [ProjectController::class, 'task'])->name('task');
        Route::get('/files/{project}', [ProjectController::class, 'file'])->name('file');
        Route::get('/members/{project}', [ProjectController::class, 'member'])->name('member');
        Route::get('/activity/{project}', [ProjectController::class, 'activity'])->name('activity');
        Route::get('/dependencies/{project}', [ProjectController::class, 'dependency'])->name('dependency');
        Route::get('/comments/{project}', [ProjectController::class, 'comment'])->name('comment');
        Route::get('/timeline/{project}', [TaskController::class, 'taskTimeLine'])->name('taskTimeLine');
        Route::get('/access/{project}', [ProjectController::class, 'access'])->name('access');

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

        Route::get('/create', [TaskController::class, 'taskCreate'])->name('oneTask.create'); // تسک تکی بدون پروژه
        Route::get('/create/{project}', [TaskController::class, 'create'])->name('create');

        Route::post('/store', [TaskController::class, 'store'])->name('store');
        Route::post('/tasks/{task}/subtasks', [TaskController::class, 'storeSubtask'])->name('subtasks.store');
        Route::post('/tasks/{project}/dependency', [TaskController::class, 'dependency'])->name('dependency');
        Route::get('/tasks/{project}/related-tasks', [TaskController::class, 'relatedTasks'])->name('related-tasks');
        Route::get('/edit/{task}', [TaskController::class, 'edit'])->name('edit');
        Route::put('/update/{task}', [TaskController::class, 'update'])->name('update');
        Route::get('/delete/{task}', [TaskController::class, 'destroy'])->name('destroy');

        //        checklist
        Route::post('/tasks/{task}/checklist', [TaskChecklistController::class, 'store'])->name('checklist');
        Route::get('/dashboard/task/{id}/checklists', [TaskController::class, 'getChecklists'])->name('checklists');

        Route::post('/tasks/{task}/add-checklist', [TaskChecklistController::class, 'addstore'])->name('add.checklist');
        Route::put('/tasks/checklist/{taskChecklist}', [TaskChecklistController::class, 'update'])->name('checklist.update');
        Route::delete('/tasks/checklist/{taskChecklist}', [TaskChecklistController::class, 'destroy'])->name('checklist.delete');
        Route::post('/tasks/checklist/check/{taskChecklist}', [TaskChecklistController::class, 'check'])->name('checklist.check');

        Route::post('/tasks/{task}/comments', [TaskController::class, 'addComment'])->name('comment.add');
        Route::put('/tasks/{task}/status', [TaskController::class, 'updateStatus'])->name('update.status');
    });


    Route::prefix('ticket')->name('ticket.')->group(function () {
        Route::get('/', [TicketController::class, 'index'])->name('index');
        Route::get('/create', [TicketController::class, 'create'])->name('create');
        Route::post('/store', [TicketController::class, 'store'])->name('store');
        Route::get('/show/{ticket}', [TicketController::class, 'show'])->name('show');
        Route::get('/edit/{ticket}', [TicketController::class, 'edit'])->name('edit');
        Route::put('/update/{ticket}', [TicketController::class, 'update'])->name('update');
        Route::post('/reply/{ticket}', [TicketController::class, 'reply'])->name('reply');
        Route::post('/status/{ticket}', [TicketController::class, 'status'])->name('close');
    });

    Route::post('/upload' , [PhotoController::class,'upload'])->name('upload');
    Route::get('/access' , [PanelController::class,'access'])->name('access');
    Route::put('/access/update/{user}' , [PanelController::class,'accessUpdate'])->name('access.update');

    Route::get('/admin/list', [ProjectManagerAdminController::class, 'index'])->name('list.admin');
    Route::get('/admin', [ProjectManagerAdminController::class, 'create'])->name('add.admin');
    Route::post('/add/admin', [ProjectManagerAdminController::class, 'store'])->name('admin.store');
    Route::get('/admin/destroy/{projectManagerAdmin}', [ProjectManagerAdminController::class, 'destroy'])->name('admin.delete');

    Route::get('/profile/{user}' , [UserController::class,'profile'])->name('profile');
    Route::get('/profile/update/{user}' , [UserController::class,'profileUpdate'])->name('profile.update');
});

