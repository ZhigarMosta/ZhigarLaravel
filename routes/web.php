<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\CarController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\RequestController;
use App\Http\Middleware\Admin;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::middleware('auth')->group(function () {
    Route::get('/', [RequestController::class, 'index'])->name('requests.index');
    Route::post('/request/store', [RequestController::class, 'store'])->name('requests.store');
    Route::get('/request/create', [RequestController::class, 'createPage'])->name('requests.create');

    Route::get('/car/index', [CarController::class, 'index'])->name('cars.index');
    Route::post('/car/store', [CarController::class, 'store'])->name('cars.store');
    Route::get('/car/create', [CarController::class, 'createPage'])->name('cars.create');

    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});
Route::middleware((Admin::class))->group(function () {
    Route::get('/admin', [AdminController::class, 'index'])->name('admin.index');
    Route::patch('/admin/updata/{request}', [AdminController::class, 'updata'])->name('admin.updata');
    Route::get('/admin/updata/{request}', [AdminController::class, 'show'])->name('admin.show');
});
require __DIR__.'/auth.php';
