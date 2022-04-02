<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ControllerDemo extends Controller
{

    public function vgsTravel_Duy()
    {
        return view('vgsTravel_Duy');
    }

    // public function blog(){
    //     return view('components.blog_components.body_blog');
    // }

    public function layout()
    {
        return view('components.content');
    }
}
