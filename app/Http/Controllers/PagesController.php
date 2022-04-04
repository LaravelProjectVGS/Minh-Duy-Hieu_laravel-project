<?php

namespace App\Http\Controllers;

use App\Models\Pages;
use Illuminate\Http\Request;
use App\Models\Test;
use Carbon\Carbon;
use App\Models\Tours;

class PagesController extends Controller
{
    public function createpage() {
        $listTour = Tours::get();
        
        
        return view(('page.createpage'), ['tours'=>$listTour]);
    }

    public function docreatepage(Request $request) {
        $request->validate([
            'title' => 'required',
            'time' => 'required',
            'start' => 'required',
            'price' => 'numeric',
            'img' => 'required',
            'status' => 'required',
        ]);

        $tour = ([
            'title'  => $request->title,
            'time'  => $request->time,
            'start'  => $request->start,
            'created' => Carbon::now(),
            'price' => $request->price,
            'status' => $request->status,
            'img' => $request->img,
        ]);

        Tours::insert($tour);
        return redirect('/')->withSuccess('Create Tour Success.');
    }

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
        $tourList = Tours::get();
        return view('page.vgsTravel_Duy', ['tours'=>$tourList]);
    }

    public function showEditPage(Request $request) {
        $tour = Tours::where('id', '=', $request->id)->first();
        return view(('page.editPage'), ['tour'=>$tour]);
    }
    public function doEditPage(Request $request) {
        $request->validate([
            'title' => 'required',
            'time' => 'required',
            'start' => 'required',
            'price' => 'numeric',
            'img' => 'required',
            'status' => 'required',
        ]);

        $tour = Tours::where('id', '=', $request->id)->first();
        $tour->title = $request->title;
        $tour->time = $request->time;
        $tour->start = $request->start;
        $tour->created = Carbon::now('Asia/Ho_Chi_Minh');;
        $tour->price = $request->price;
        $tour->status = $request->status;
        $tour->img = $request->img;

        $tour->save();

        return redirect('/')->withSuccess('Edit Tour Success.');
    }

    public function deletePage(Request $request) {
        $tour = Tours::where('id', '=', $request->id)->first();

        $tour->delete();
        return redirect('/')->withSuccess('Delete Tour Success.');
    }

    public function uploadImg() {
        return view('page.uploadImg');
    }

    public function imageUploadPost(Request $request)
    {
        $request->validate([
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);
  
        $imageName = time().'.'.$request->image->extension();  
   
        $request->image->move(public_path('images'), $imageName);
   
        return redirect('/add')
            ->with('success','You have successfully upload image.')
            ->with('image',$imageName);
    }

    public function editImg() {
        return view('page.editImg');
    }

    public function imageEditPost(Request $request) {
        $request->validate([
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);
  
        $imageName = time().'.'.$request->image->extension();  
   
        $request->image->move(public_path('images'), $imageName);
   
        return redirect('edit/'.$request->id)
            ->with('success','You have successfully upload image.')
            ->with('image',$imageName);
    }
}
