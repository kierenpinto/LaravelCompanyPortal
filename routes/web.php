<?php

use App\Http\Controllers\GroupController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProfileController;
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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    Route::get('/home', [HomeController::class, 'index'])->name('home.index');
    Route::get('/php_info', [HomeController::class, 'php_info'])->name('home.index');
    Route::get('/groups', [GroupController::class, 'index'])->name('group.all');
    Route::get('/groups/{group}', [GroupController::class, 'edit'])->name('group.edit');
    Route::patch('/groups/{group}', [GroupController::class, 'update'])->name('group.update');
    Route::delete('/groups/{group}', [GroupController::class, 'destroy'])->name('group.destroy');
});

require __DIR__.'/auth.php';
