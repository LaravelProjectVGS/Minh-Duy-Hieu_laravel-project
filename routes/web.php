<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PagesController;
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

Route::get('/', [PagesController::class, 'createpage']);
Route::post('/docreatepage', [PagesController::class, 'docreatepage']);

// Route::get('/login', [PagesController::class, 'login']);

Route::get('/register', [PagesController::class, 'register']);

Route::get('/vgsTour/{id}', [PagesController::class, 'vgsTour']);

Route::get('/vgsTravel', [PagesController::class, 'vgsTravel']);

Route::get('/tour/add', function(){
   return view('page.addnewPage');
});

Route::get('/tour/edit/{id}', [PagesController::class, 'showEditPage']);
Route::post('/tour/edit/{id}', [PagesController::class, 'doEditPage']);

Route::get('/tour/delete/{id}', [PagesController::class, 'deletePage']);

Route::get('/tour/upload', [PagesController::class, 'uploadImg']);
Route::post('/tour/upload', [PagesController::class, 'imageUploadPost']);

Route::get('/tour/edit/{id}/editimg', [PagesController::class, 'editImg']);
Route::post('/tour/edit/{id}/editimg', [PagesController::class, 'imageEditPost']);

Route::get('/tour/search', [PagesController::class, 'searchTour']);

Route::get('/test', function () {
   return view('page.test');
});

## /routes/web.php
Route::any('/ckfinder/connector', '\CKSource\CKFinderBridge\Controller\CKFinderController@requestAction')
    ->name('ckfinder_connector');

Route::any('/ckfinder/browser', '\CKSource\CKFinderBridge\Controller\CKFinderController@browserAction')
    ->name('ckfinder_browser');

//Route::any('/ckfinder/examples/{example?}', '\CKSource\CKFinderBridge\Controller\CKFinderController@examplesAction')
//    ->name('ckfinder_examples');
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
Route::get('/show/{id}', [BlogVgsController::class, 'show']);
Route::get('/blogVgs/create', [BlogVgsController::class, 'create']);
Route::post('/blogVgs', [BlogVgsController::class, 'store']);

Route::get('/blogVgs/{id}/edit', [BlogVgsController::class, 'edit']);

Route::put('/blogVgs/{id}', [BlogVgsController::class, 'update']);

Route::delete('/blogVgs/{id}', [BlogVgsController::class, 'destroy']);

Route::get('/blogVgs/search', [BlogVgsController::class, 'search']);


Auth::routes();
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
