<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Page;
use App\Models\Test;
use Carbon\Carbon;

class ControllerDemo extends Controller
{
    //
    public function createpage() {
        $listPage = Page::get();
        
        return view(('page.createpage'), ['pages'=>$listPage]);
    }

    public function docreatepage(Request $request) {
        $request->validate([
            'title' => 'required|max:15',
            'status' => 'required',
            'author' => 'required',
        ]);

        $page = ([
            'title'  => $request->title,
            'status' => $request->status,
            'author' => $request->author,
        ]);

        Page::insert($page);
        return redirect('/')->withSuccess('Create Page Success.');
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
        return view('page.vgsTravel_Duy');
    }

    public function showEditPage(Request $request) {
        $page = Page::where('id', '=', $request->id)->first();
        return view(('page.editPage'), ['page'=>$page]);
    }
    public function doEditPage(Request $request) {
        $request->validate([
            'title' => 'required|max:15',
            'status' => 'required',
            'author' => 'required',
        ]);

        $page = Page::where('id', '=', $request->id)->first();
        $page->title = $request->title;
        $page->created = Carbon::now('Asia/Ho_Chi_Minh');
        $page->status = $request->status;
        $page->author = $request->author;

        $page->save();

        return redirect('/')->withSuccess('Edit Page Success.');
    }

    public function deletePage(Request $request) {
        $page = Page::where('id', '=', $request->id)->first();

        $page->delete();
        return redirect('/')->withSuccess('Delete Page Success.');
    }
}
