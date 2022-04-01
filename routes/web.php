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


Route::get('/', function () {
    return view('index');
});

Route::get('/login', [ControllerDemo::class, 'login']);

Route::get('/register', [ControllerDemo::class, 'register']);

Route::get('/vgsTour', [ControllerDemo::class, 'vgsTour']);

Route::get('test', function(){
   return view('components.contentt');
});