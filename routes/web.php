<?php

use App\Http\Controllers\panel\PhotoController;
use App\Http\Controllers\ProfileController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
})->name('home');

//Route::get('/dashboard', function () {
//    return view('dashboard');
//})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});


Route::post('/change-theme', function (Request $request) {
    $request->session()->put('theme_mode', $request->theme_mode);
    return redirect()->back();
})->name('change-theme');

Route::post('/upload/', [PhotoController::class,'upload'])->name('photos.upload');

require __DIR__.'/auth.php';
require __DIR__.'/admin.php';
require __DIR__.'/panel.php';
