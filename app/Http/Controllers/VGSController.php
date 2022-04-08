<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\VGS;

class VGSController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
        {
            $vgs = VGS::paginate(2);    
        return view(('vgsuser.uservgs'),compact('vgs'));
    }

    public function vgstravel(){
        $vgs = VGS::all();
        return view(('vgstravel'),compact('vgs'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('vgsuser.adduser');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $vgs = new VGS;

        $vgs->user_name = $request->input('user_name');
        // $vgs->img_name = $request->input('img_name');
        $vgs->text = $request->input('text');

        if ($request->hasFile('img_name')) {
            $file = $request->file('img_name');
            $extention = $file->getClientOriginalName();
            $filename = time().'.'.$extention;
            $file->move('userImg', $filename);
            $vgs->img_name = $filename;
        }
        $vgs->save();
        return redirect('vgsuser');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $useredit = VGS::find($id);
        return view('vgsuser.edit', compact('useredit','id'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $vgs = VGS::find($id);
        $vgs->user_name = $request->input('user_name');
        // $vgs->img_name = $request->input('img_name');
        $vgs->text = $request->input('text');

        if ($request->hasFile('img_name')) {
            $destination = 'userImg'.$vgs->img_name;

            if(VGS::exists($destination)){

                VGS::destroy($destination);
                // VGS::destroy()
            }

            $file = $request->file('img_name');
            $extention = $file->getClientOriginalName();
            $filename = time().'.'.$extention;
            $file->move('userImg', $filename);
            $vgs->img_name = $filename;
        }

        $vgs->update();


        return redirect('vgsuser');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $vgs = VGS::find($id);

        $destination = 'userImg'.$vgs->img_name;
        if(VGS::exists($destination)){

             VGS::destroy($destination);
        }

        $vgs->delete();
        return redirect(('vgsuser'));
    }


    public function search(Request $request){
        $user = VGS::where('user_name','like', "%".$request->key."%")->get();
        return view('vgsuser.searchuser', compact('user'));
    }
}
