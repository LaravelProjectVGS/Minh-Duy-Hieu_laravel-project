<?php

namespace App\Http\Controllers;

use App\Models\BlogVgs;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\DB;
use Symfony\Component\HttpFoundation\Session\Session;

class BlogVgsController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $listBlog = BlogVgs::get();
        return view(('home'), ['items' => $listBlog]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('blogVgs_components.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // $item = ([
        //     'title' => $request->title,
        //     'options' => $request->options,
        //     if ($request->hasFile('profile_image')) {
        //         $file = $request->profile_image;
        //         $extension = $file->getClientOriginalExtension();
        //         $filename = time() . '.' . $extension;
        //         $file->move('uploads/blog_image/', $filename);
        //         $item->profile_image = $filename;
        //     }

        //     'head' => $request->head,
        //     'content' => $request->content,
        // ]);
        // BlogVgs::insert($item);
        $item = new BlogVgs;
        $item->title = $request->title;
        $item->options = $request->options;
        if ($request->hasFile('profile_image')) {
            $file = $request->profile_image;
            $extension = $file->getClientOriginalExtension();
            $filename = time() . '.' . $extension;
            $file->move('uploads/blog_image/', $filename);
            $item->profile_image = $filename;
        }
        $item->head = $request->head;
        $item->content = $request->content;
        $item->save();
        return redirect('blogVgs');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\BlogVgs  $blogVgs
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {

        $kinhNghiemDuLichs = DB::select("select * from blog_vgs where options='kinh nghiệm du lịch'");
        $traiNghiemAmThucs = DB::select("select * from blog_vgs where options='trải nghiệm ẩm thực'");
        $veMayBays = DB::select("select * from blog_vgs where options='vé máy bay' and head is null;");
        $tinTucVaSuKiens = DB::select("select * from blog_vgs where options='tin tức và sự kiện'");
        $baiVietNoiBats = DB::select("select * from blog_vgs where options='bài viết nổi bật'");
        $newItems = DB::select("SELECT * FROM blog_vgs ORDER BY id DESC LIMIT 6;");
        $item = BlogVgs::find($id);
        return view('blogVgs_components.itemBlog', compact('item', 'newItems', 'kinhNghiemDuLichs', 'traiNghiemAmThucs', 'veMayBays', 'tinTucVaSuKiens', 'baiVietNoiBats'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\BlogVgs  $blogVgs
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $item = BlogVgs::find($id);
        return view('blogVgs_components.edit', compact('item', 'id'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\BlogVgs  $blogVgs
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $item = BlogVgs::find($id);
        $item->title = $request->title;
        $item->options = $request->options;
        if ($request->hasFile('profile_image')) {
            $destination = 'uploads/blog_image/' . $item->profile_image;
            if (File::exists($destination)) {
                File::delete(($destination));
            }
            $file = $request->profile_image;
            $extension = $file->getClientOriginalExtension();
            $filename = time() . '.' . $extension;
            $file->move('uploads/blog_image/', $filename);
            $item->profile_image = $filename;
        }
        $item->head = $request->head;
        $item->content = $request->content;
        $item->update();
        return redirect('blogVgs');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\BlogVgs  $blogVgs
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $item = BlogVgs::find($id)->delete();

        return redirect(('blogVgs'));
    }

    public function getData()
    {
        $kinhNghiemDuLichs = DB::select("select * from blog_vgs where options='kinh nghiệm du lịch' and head is null;");
        $traiNghiemAmThucs = DB::select("select * from blog_vgs where options='trải nghiệm ẩm thực' and head is null;");
        $veMayBays = DB::select("select * from blog_vgs where options='vé máy bay' and head is null;");
        $tinTucVaSuKiens = DB::select("select * from blog_vgs where options='tin tức và sự kiện' and head is null;");
        $baiVietNoiBats = DB::select("select * from blog_vgs where options='bài viết nổi bật' and head is null;");
        $isHeadKinhNghiemDuLichs = DB::select("select * from blog_vgs where options='kinh nghiệm du lịch' and head = 'on';");
        $isHeadTraiNghiemAmThucs = DB::select("select * from blog_vgs where options='trải nghiệm ẩm thực' and head = 'on';");
        $isHeadVeMayBays = DB::select("select * from blog_vgs where options='vé máy bay' and head = 'on';");
        $isHeadTinTucVaSuKiens = DB::select("select * from blog_vgs where options='tin tức và sự kiện' and head = 'on';");
        $isHeadBaiVietNoiBats = DB::select("select * from blog_vgs where options='bài viết nổi bật' and head = 'on';");
        return view('vgsTravel_Duy', compact('kinhNghiemDuLichs', 'traiNghiemAmThucs', 'veMayBays', 'tinTucVaSuKiens', 'baiVietNoiBats', 'isHeadKinhNghiemDuLichs', 'isHeadTraiNghiemAmThucs', 'isHeadVeMayBays', 'isHeadTinTucVaSuKiens', 'isHeadBaiVietNoiBats'));
    }

    public function itemBlog($id)
    {
    }
}
