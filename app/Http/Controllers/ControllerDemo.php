<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ControllerDemo extends Controller
{
    //
    public function login() {
        return view('login');
    }

    public function register() {
        return view('register');
    }

    public function vgsTour() {
        return view('vgsTour');
    }

    public function vgsTravel_Duy(){
        return view('vgsTravel_Duy');
    }
}
