<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ItemBlog;

class BlogController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $listBlog = ItemBlog::get();
        return view(('components.blog_components.body_blog'), ['items' => $listBlog]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('components.blog_components.create_blog');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $item = ([
            'title' => $request->title,
            'status' => $request->status,
            'stats' => $request->stats
        ]);
        ItemBlog::insert($item);
        if ($request->status == "Scheduled") {
        }
        return redirect('blog');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $item = ItemBlog::find($id);
        return view('components.blog_components.edit_blog', compact('item', 'id'));
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
        $item = ItemBlog::find($id);
        $item->title = $request->title;
        $item->status = $request->status;
        $item->stats = $request->stats;
        $item->save();
        return redirect('blog');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $item = ItemBlog::find($id)->delete();

        return redirect(('blog'));
    }
}
