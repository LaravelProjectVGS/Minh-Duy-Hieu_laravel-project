<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\File;


class FileController extends Controller
{
    public function index()
    {
        $files = File::all();
        return view(('fileview.fileview'), ['files' => $files]);
    }


    public function create()
    {
        return view('fileview.addfile');
    }


    public function store(Request $request)
    {
        $files = ([
            'name' => $request->name,
            'file' => $request->file,
        ]);
        File::insert($files);
        if ($request->status == "Scheduled") {
        }
        return redirect('fileview');
    }   

    public function edit($id){

        $file = File::find($id);
        return view('fileview.updatefile', compact('file', 'id'));
    }


    public function update(Request $request, $id){
        $request->validate([
            'name' => 'required',
            'file' => 'required'
        ]);

        $file = File::find($id);
        $file->name = $request->name;
        $file->file = $request->file;

        $file->save();

        return redirect('fileview');
    }


    public function destroy($id)
    {
        $file = File::find($id)->delete();

        return redirect(('fileview'));
    }
}
