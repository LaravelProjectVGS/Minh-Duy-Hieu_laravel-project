<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ControllerDemo;

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


Route::get('/', [ControllerDemo::class, 'createpage']);
Route::post('/docreatepage', [ControllerDemo::class, 'docreatepage']);

Route::get('/login', [ControllerDemo::class, 'login']);

Route::get('/register', [ControllerDemo::class, 'register']);

Route::get('/vgsTour', [ControllerDemo::class, 'vgsTour']);

Route::get('/vgsTravel', [ControllerDemo::class, 'vgsTravel']);

Route::get('/add', function(){
   return view('page.addnewPage');
});

Route::get('/edit/{id}', [ControllerDemo::class, 'showEditPage']);
Route::post('/edit/{id}', [ControllerDemo::class, 'doEditPage']);

Route::get('/delete/{id}', [ControllerDemo::class, 'deletePage']);
