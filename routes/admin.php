<?php

use App\Http\Controllers\admin\adminController;
use App\Http\Controllers\admin\BrandController;
use App\Http\Controllers\admin\Campaign\CampaignAgancyController;
use App\Http\Controllers\admin\Campaign\CampaignBrandController;
use App\Http\Controllers\admin\Campaign\CampaignController;
use App\Http\Controllers\admin\Campaign\InfluencerController;
use App\Http\Controllers\admin\CategoryController;
use App\Http\Controllers\admin\DepartmentController;
use App\Http\Controllers\admin\ImplementeUnitController;
use App\Http\Controllers\Admin\PermissionController;
use App\Http\Controllers\admin\PhotoController;
use App\Http\Controllers\admin\PositionController;
use App\Http\Controllers\admin\ProjectController;
use App\Http\Controllers\admin\TaskController;
use App\Http\Controllers\admin\TicketController;
use App\Http\Controllers\admin\UserController;
use Illuminate\Support\Facades\Route;

Route::prefix('admin')->name('admin.')->middleware(['auth','SuperAdminCheck'])->group(function () {
    Route::get('/', [adminController::class , 'index'])->name('index');

    Route::prefix('user')->name('user.')->group(function () {
        Route::get('/', [UserController::class , 'index'])->name('index');
        Route::get('/create', [UserController::class , 'create'])->name('create');
        Route::post('/store', [UserController::class , 'store'])->name('store');
        Route::post('/import', [UserController::class , 'import'])->name('import');
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

    Route::prefix('implementeUnit')->name('implementeUnit.')->group(function () {
        Route::get('/', [ImplementeUnitController::class , 'index'])->name('index');
        Route::post('/store', [ImplementeUnitController::class , 'store'])->name('store');
        Route::put('/update/{department}', [ImplementeUnitController::class , 'update'])->name('update');
        Route::get('/delete/{department}', [ImplementeUnitController::class , 'destroy'])->name('destroy');
    });

    Route::prefix('brand')->name('brand.')->group(function () {
        Route::get('/', [BrandController::class , 'index'])->name('index');
        Route::post('/store', [BrandController::class , 'store'])->name('store');
        Route::put('/update/{brand}', [BrandController::class , 'update'])->name('update');
        Route::get('/delete/{brand}', [BrandController::class , 'destroy'])->name('destroy');
    });

    Route::prefix('category')->name('category.')->group(function () {
        Route::get('/', [CategoryController::class , 'index'])->name('index');
        Route::post('/store', [CategoryController::class , 'store'])->name('store');
        Route::put('/update/{category}', [CategoryController::class , 'update'])->name('update');
        Route::get('/delete/{category}', [CategoryController::class , 'destroy'])->name('destroy');
    });

    Route::prefix('project')->name('project.')->group(function () {
        Route::get('/', [ProjectController::class , 'index'])->name('index');
        Route::get('tasks/{project}', [ProjectController::class , 'task'])->name('tasks');
        Route::get('/create', [ProjectController::class , 'create'])->name('create');
        Route::post('/store', [ProjectController::class , 'store'])->name('store');
        Route::get('/edit/{project}', [ProjectController::class , 'edit'])->name('edit');
        Route::put('/update/{project}', [ProjectController::class , 'update'])->name('update');
        Route::post('/status/{project}', [ProjectController::class , 'status'])->name('status');
        Route::get('/delete/{project}', [ProjectController::class , 'destroy'])->name('destroy');
    });

    Route::prefix('task')->name('task.')->group(function () {
        Route::get('/', [TaskController::class , 'index'])->name('index');
        Route::get('/create', [TaskController::class , 'create'])->name('create');
        Route::post('/store', [TaskController::class , 'store'])->name('store');
        Route::get('/edit/{task}', [TaskController::class , 'edit'])->name('edit');
        Route::put('/update/{task}', [TaskController::class , 'update'])->name('update');
        Route::post('/status/{task}', [TaskController::class , 'status'])->name('status');
        Route::get('/delete/{task}', [TaskController::class , 'destroy'])->name('destroy');
    });

    Route::prefix('ticket')->name('ticket.')->group(function () {
        Route::get('/', [TicketController::class , 'index'])->name('index');

        Route::get('/show/{ticket}', [TicketController::class , 'show'])->name('show');
        Route::get('/create', [TicketController::class , 'create'])->name('create');
        Route::post('/store', [TicketController::class , 'store'])->name('store');
        Route::post('/reply/{ticket}', [TicketController::class , 'reply'])->name('reply');
        Route::get('/edit/{ticket}', [TicketController::class , 'edit'])->name('edit');
        Route::put('/update/{ticket}', [TicketController::class , 'update'])->name('update');
        Route::post('/status/{ticket}', [TicketController::class , 'status'])->name('status');
        Route::get('/delete/{ticket}', [TicketController::class , 'destroy'])->name('destroy');
    });



//    Campaign Routes
    Route::prefix('campaign')->name('campaign.')->group(function () {
        Route::get('/', [CampaignController::class , 'index'])->name('index');
        Route::get('/show/{campaign}', [CampaignController::class , 'show'])->name('show');
        Route::post('/import', [CampaignController::class , 'import'])->name('import');
        Route::get('/create', [CampaignController::class , 'create'])->name('create');
        Route::post('/store', [CampaignController::class , 'store'])->name('store');
        Route::get('/edit/{campaign}', [CampaignController::class , 'edit'])->name('edit');
        Route::put('/update/{campaign}', [CampaignController::class , 'update'])->name('update');
        Route::post('/status/{campaign}', [CampaignController::class , 'status'])->name('status');
        Route::get('/delete/{campaign}', [CampaignController::class , 'destroy'])->name('destroy');

        Route::prefix('agancy')->name('agancy.')->group(function () {
            Route::get('/', [CampaignAgancyController::class , 'index'])->name('index');
            Route::post('/store', [CampaignAgancyController::class , 'store'])->name('store');
            Route::put('/update/{campaignAgancy}', [CampaignAgancyController::class , 'update'])->name('update');
            Route::get('/delete/{campaignAgancy}', [CampaignAgancyController::class , 'destroy'])->name('destroy');
        });
        Route::prefix('brand')->name('brand.')->group(function () {
            Route::get('/', [CampaignBrandController::class , 'index'])->name('index');
            Route::post('/store', [CampaignBrandController::class , 'store'])->name('store');
            Route::put('/update/{campaignBrand}', [CampaignBrandController::class , 'update'])->name('update');
            Route::get('/delete/{campaignBrand}', [CampaignBrandController::class , 'destroy'])->name('destroy');
        });
        Route::prefix('influencer')->name('influencer.')->group(function () {
            Route::get('/', [InfluencerController::class , 'index'])->name('index');
            Route::post('/store', [InfluencerController::class , 'store'])->name('store');
            Route::post('/import', [InfluencerController::class , 'import'])->name('import');
            Route::put('/update/{influencer}', [InfluencerController::class , 'update'])->name('update');
            Route::get('/delete/{influencer}', [InfluencerController::class , 'destroy'])->name('destroy');
        });

    });
});
