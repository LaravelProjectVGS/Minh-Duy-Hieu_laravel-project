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

Route::get('/vgsTour', [PagesController::class, 'vgsTour']);

Route::get('/vgsTravel', [PagesController::class, 'vgsTravel']);

Route::get('/add', function(){
   return view('page.addnewPage');
});

Route::get('/edit/{id}', [PagesController::class, 'showEditPage']);
Route::post('/edit/{id}', [PagesController::class, 'doEditPage']);

Route::get('/delete/{id}', [PagesController::class, 'deletePage']);

Route::get('/upload', [PagesController::class, 'uploadImg']);
Route::post('/upload', [PagesController::class, 'imageUploadPost']);

Route::get('/edit/{id}/editimg', [PagesController::class, 'editImg']);
Route::post('/edit/{id}/editimg', [PagesController::class, 'imageEditPost']);