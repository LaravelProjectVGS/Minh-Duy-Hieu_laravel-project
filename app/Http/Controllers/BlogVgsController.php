<?php

namespace App\Http\Controllers;

use App\Models\BlogVgs;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\DB;
use Symfony\Component\HttpFoundation\Session\Session;
use App\Http\Requests\blogVgs\BlogVgsRequest2;

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
        $listBlog = BlogVgs::paginate(3);
        if ($keyword = request()->keyword) {
            $listBlog = BlogVgs::orderBy('id', 'DESC')->where('title', 'like', '%' . $keyword . '%')->orWhere('options', 'like', '%' . $keyword . '%')->orWhere('description', 'like', '%' . $keyword . '%')->paginate(3);
            // die(var_dump($listBlog));
        }


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
        $item = new BlogVgs;
        $request->validate([
            'title' => 'required',
            'profile_image' => 'required',
            'description' => 'required|min:5',
            'content' => 'required|min:5'
        ], [
            'title.required' => 'Name is required',
            'description.required' => 'Description is required',
            'profile_image.required' => 'Image not found',
            'content.required' => 'Content is required'
        ]);
        $item->title = $request->title;
        $item->options = $request->options;
        if ($request->hasFile('profile_image')) {
            $request->validate([
                'profile_image' => 'required|image|mimes:jpeg,png,jpg,gif,svg',
            ], [
                'profile_image.required' => 'Image not valid'
            ]);
            $file = $request->profile_image;
            $extension = $file->getClientOriginalExtension();
            $filename = time() . '.' . $extension;
            $file->move('uploads/blog_image/', $filename);
            $item->profile_image = $filename;
        }
        $item->head = $request->head;
        $item->description = $request->description;
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

        $kinhNghiemDuLichs = DB::select("select * from blog_vgs where options='kinh nghi???m du l???ch'");
        $traiNghiemAmThucs = DB::select("select * from blog_vgs where options='tr???i nghi???m ???m th???c'");
        $veMayBays = DB::select("select * from blog_vgs where options='v?? m??y bay' and head is null;");
        $tinTucVaSuKiens = DB::select("select * from blog_vgs where options='tin t???c v?? s??? ki???n'");
        $baiVietNoiBats = DB::select("select * from blog_vgs where options='b??i vi???t n???i b???t'");
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
        $item->description = $request->description;
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
        $kinhNghiemDuLichs = DB::select("select * from blog_vgs where options='kinh nghi???m du l???ch' and head is null;");
        $traiNghiemAmThucs = DB::select("select * from blog_vgs where options='tr???i nghi???m ???m th???c' and head is null;");
        $veMayBays = DB::select("select * from blog_vgs where options='v?? m??y bay' and head is null;");
        $tinTucVaSuKiens = DB::select("select * from blog_vgs where options='tin t???c v?? s??? ki???n' and head is null;");
        $baiVietNoiBats = DB::select("select * from blog_vgs where options='b??i vi???t n???i b???t' and head is null;");
        $isHeadKinhNghiemDuLichs = DB::select("select * from blog_vgs where options='kinh nghi???m du l???ch' and head = 'on';");
        $isHeadTraiNghiemAmThucs = DB::select("select * from blog_vgs where options='tr???i nghi???m ???m th???c' and head = 'on';");
        $isHeadVeMayBays = DB::select("select * from blog_vgs where options='v?? m??y bay' and head = 'on';");
        $isHeadTinTucVaSuKiens = DB::select("select * from blog_vgs where options='tin t???c v?? s??? ki???n' and head = 'on';");
        $isHeadBaiVietNoiBats = DB::select("select * from blog_vgs where options='b??i vi???t n???i b???t' and head = 'on';");
        return view('vgsTravel_Duy', compact('kinhNghiemDuLichs', 'traiNghiemAmThucs', 'veMayBays', 'tinTucVaSuKiens', 'baiVietNoiBats', 'isHeadKinhNghiemDuLichs', 'isHeadTraiNghiemAmThucs', 'isHeadVeMayBays', 'isHeadTinTucVaSuKiens', 'isHeadBaiVietNoiBats'));
    }

    public function search(Request $request)
    {
        // {
        //     $output = '';
        //     $items = BlogVgs::where('title', 'LIKE', '%' . $request->keyword . '%')->get();
        //     die(var_dump($request));
        //     foreach ($items as $item) {
        //         $output .= '
        //         <tr>
        //         <td scope="row" data-label="Title" class="td-top">
        //             <div class="title">
        //                 <h2>' . $item->title . '</h2>
        //                 <p>Posted days ago</p>
        //             </div>
        //         </td>
        //         <td data-label="Image">
        //             <img src="' . asset('uploads/blog_image/' . $item->profile_image) . '" width="70px"
        //                 height="70px" alt="" style="object-fit: cover">
        //         </td>
        //         <td data-label="isHead">
        //             <p>' . $item->head . '</p>
        //         </td>
        //         <td data-label="Description">
        //             <p style="-webkit-line-clamp: 5;
        //             -webkit-box-orient: vertical;
        //             overflow: hidden;
        //             display: -webkit-box;">' . $item->description . '</p>
        //         </td>
        //         <td data-label="Content">
        //             <p id="toHtml" style=" -webkit-line-clamp: 5;
        //             -webkit-box-orient: vertical;
        //             overflow: hidden;
        //             display: -webkit-box;">' . $item->content . '</p>
        //         </td>
        //         </tr>
        //         ';
        //     }
        //     return response()->json($output);
    }
}
