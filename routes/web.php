<?php

use App\Http\Controllers\Api\AuthController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TestController;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\ThemeController;

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
// test controller routes
Route::resource('tests', TestController::class);

// student controller routes
Route::resource('students', StudentController::class);

// theme controller routes
Route::get('/home', [ThemeController::class, 'home'])->name('home');
Route::get('/about', [ThemeController::class, 'about'])->name('about');
Route::get('/contact', [ThemeController::class, 'contact'])->name('contact');
