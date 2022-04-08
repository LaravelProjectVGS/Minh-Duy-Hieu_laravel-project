<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ControllerDemo;
use App\Http\Controllers\FileController;
use App\Http\Controllers\VGSController;

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
Route::get('/fileview/addfile', [FileController::class, 'create']);

Route::post('/fileview', [FileController::class, 'store']);

Route::get('fileview/{id}/edit', [FileController::class, 'edit']);

Route::resource('/fileview', FileController::class);

Route::get('/login', [ControllerDemo::class, 'login']);

Route::get('/register', [ControllerDemo::class, 'register']);

Route::get('/vgsTour', [ControllerDemo::class, 'vgsTour']);

Route::get('/', function(){
   return view('components.content');
});


Route::resource('/vgsuser', VGSController::class);

Route::get('/vgsuser', [VGSController::class, 'index']);

Route::get('/vgstravel', [VGSController::class, 'vgstravel']);

Route::post('/vgsuser', [VGSController::class, 'store']);

Route::get('searchuser', [VGSController::class, 'search']);

Route::get('vgsuser/{id}/edit', [VGSController::class, 'edit']);

Route::delete('/delete_user/{id}',[VGSController::class, 'destroy']);
