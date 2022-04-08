<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ControllerDemo extends Controller
{

    public function vgsTravel_Duy()
    {
        return view('');
    }

    // public function blog(){
    //     return view('components.blog_components.body_blog');
    // }

    public function layout()
    {
        return view('blogVgs_components.itemBlog');
    }

    public function createBlog()
    {
        return view('vgs_tour.createBlog');
    }
}
