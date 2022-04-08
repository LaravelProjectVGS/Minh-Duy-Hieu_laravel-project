<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PagesController;

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


Route::get('/', [PagesController::class, 'createpage']);
Route::post('/docreatepage', [PagesController::class, 'docreatepage']);

Route::get('/login', [PagesController::class, 'login']);

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

<<<<<<< HEAD
Route::get('test', function(){
   return view('components.content');
});

Route::get('fileview', function () {
    return view('fileview.fileview');
});
=======
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
>>>>>>> minh
