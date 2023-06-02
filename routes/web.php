<?php

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

// Route::get('/', function () {
//     return view('welcome');
// });
Route::get('/', [\App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/home', function () {
  return (new \App\Http\Controllers\HomeController())->index();
  // return \App\Http\Controllers\HomeController::class->index();
    // return view('index');
});

Route::get('/about', function () {
    return view('about');
})->name('about');

Route::view('/contact', 'contact')->name('contact'); // Shortcut view syntax
