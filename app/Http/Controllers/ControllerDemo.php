<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ControllerDemo extends Controller
{
    //
    public function login() {
        return view('page.login');
    }

    public function register() {
        return view('page.register');
    }

    public function vgsTour() {
        return view('page.vgsTour');
    }

    public function vgsTravel() {
        return view('page.vgsTravel_Duy');
    }
}
