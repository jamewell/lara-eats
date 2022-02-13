<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
Route::get('/', [HomeController::class, "index"]);
Route::get('/redirects', [HomeController::class, "redirects"]);
Route::get('/menu', [HomeController::class, "menu"]);

Route::get('/users', [AdminController::class, "user"]);
Route::get('/foodmenu', [AdminController::class, "foodmenu"]);
Route::get('/updateMenuitem/{id}', [AdminController::class, "updateMenuitem"]);
Route::post('/updatefood/{id}', [AdminController::class, "updatefood"]);
Route::get('/deleteUser/{id}', [AdminController::class, "deleteUser"]);
Route::get('/deleteMenuitem/{id}', [AdminController::class, "deleteMenuitem"]);

Route::post('/uploadfood', [AdminController::class, "upload"]);

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');
