<?php

namespace App\Http\Controllers;

use App\Models\Pages;
use Illuminate\Http\Request;
use App\Models\Test;
use Carbon\Carbon;
use App\Models\Tours;


class PagesController extends Controller
{
    public function createpage(Request $request) {
        $listTour = Tours::paginate(2);
        return view(('page.createpage'), ['tours'=>$listTour]);
    }

    
    public function docreatepage(Request $request) {
        $request->validate([
            'title' => 'required',
            'time' => 'numeric|min:1|numeric',
            'start' => 'required',
            'price' => 'numeric|required',
            'img' => 'required',
            'description' => 'required',
            'status' => 'required',
            'place' => 'required',
            'todolist' => 'required',
            'tour' => 'required',
        ]);
        
        $tour = ([
            'title'  => $request->title,
            'time'  => $request->time,
            'start'  => $request->start,
            'created' => Carbon::now('Asia/Ho_Chi_Minh'),
            'price' => $request->price,
            'status' => $request->status,
            'description' => $request->description,
            'img' => $request->img,
            'place' => $request->place,
            'todolist' => $request->todolist,
            'tour' => $request->tour,
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

    public function vgsTour(Request $request) {
        $tour = Tours::where('id', $request->id)->first();
        $desTimeD = json_decode($tour->desTime); 
        $titleTimeD = json_decode($tour->titleTime);
        $imgTimeD = json_decode($tour->imgTime);

        return view(('page.vgsTour'), ['tour'=>$tour, 
                                        'dD'=>$desTimeD, 
                                        'tD'=>$titleTimeD, 
                                        'iD'=>$imgTimeD,
                                        ]);
    }

    public function vgsTravel() {
        $tourList = Tours::get();
        $tourHot = Tours::orderBy('created', 'desc')->offset(0)->limit(4)->get(); 
        // echo ($tourHot);
        return view('page.vgsTravel_Duy', ['tours'=>$tourList, 'tourHot'=>$tourHot]);
    }

    public function showEditPage(Request $request) {
        $tour = Tours::where('id', '=', $request->id)->first();
        return view(('page.editPage'), ['tour'=>$tour]);
    }
    public function doEditPage(Request $request) {

       
        $request->validate([
            'title' => 'required',
            'time' => 'numeric',
            'start' => 'required',
            'price' => 'numeric',
            'status' => 'required',
            'description' => 'required',
            'place' => 'required',
            'todolist' => 'required',
            'tour' => 'required',
        ]);

        
        $tour = Tours::where('id', '=', $request->id)->first();
        $tour->title = $request->title;
        $tour->time = $request->time;
        $tour->start = $request->start;
        $tour->description = $request->description;
        $tour->created = Carbon::now('Asia/Ho_Chi_Minh');;
        $tour->price = $request->price;
        $tour->status = $request->status;
        if(is_null($request->img)) {
            $tour->img = $tour->img;
        }else {
            $tour->img = $request->img;
        }
        $tour->place = $request->place;
        $tour->todolist = $request->todolist;
        $tour->tour = $request->tour;

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
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg',
        ]);
  
        $imageName = time().'.'.$request->image->extension();  
   
        $request->image->move(public_path('images'), $imageName);
   
        return redirect('/tour/add')
            ->with('success','You have successfully upload image.')
            ->with('image',$imageName);
    }

    public function editImg() {
        return view('page.editImg');
    }

    public function imageEditPost(Request $request) {
        $request->validate([
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg',
        ]);
  
        $imageName = time().'.'.$request->image->extension();  
   
        $request->image->move(public_path('images'), $imageName);
   
        return redirect('tour/edit/'.$request->id)
            ->with('success','You have successfully edit image.')
            ->with('image',$imageName);
    }

    public function searchTour(Request $request) {
        
        $listTour = Tours::where('title', 'like', '%'.$request->search.'%')->paginate(2);
       
        return view(('page.createpage'), ['tours'=>$listTour, 'keySearch'=>$request->search]);
    }

    public function test() {
        
    }
}
