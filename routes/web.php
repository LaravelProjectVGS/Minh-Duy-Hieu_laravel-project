<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ControllerDemo;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\BlogVgsController;
use App\Http\Controllers\TodoController;

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

// Route::get('/blog', [BlogController::class, 'index']);

Route::get('/todo/create', [TodoController::class, 'create']);

Route::post('/todo', [TodoController::class, 'store']);

Route::get('/todo/{id}/edit', [TodoController::class, 'edit']);

Route::put('/todo/{id}', [TodoController::class, 'update']);

Route::delete('/todo/{id}', [TodoController::class, 'destroy']);

// Route::get('/vgsTravel_Duy', [ControllerDemo::class, 'vgsTravel_Duy']);

Route::get('/layout', [ControllerDemo::class, 'layout']);
Route::resource('/todo', TodoController::class);



Route::resource('/blogVgs', BlogVgsController::class);
Route::get('/vgsTravel_Duy', [BlogVgsController::class, 'getData']);
Route::get('/blogVgs/create', [BlogVgsController::class, 'create']);
Route::post('/blogVgs', [BlogVgsController::class, 'store']);

Route::get('/blogVgs/{id}/edit', [BlogVgsController::class, 'edit']);

Route::put('/blogVgs/{id}', [BlogVgsController::class, 'update']);

Route::delete('/blogVgs/{id}', [BlogVgsController::class, 'destroy']);




Auth::routes();
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
