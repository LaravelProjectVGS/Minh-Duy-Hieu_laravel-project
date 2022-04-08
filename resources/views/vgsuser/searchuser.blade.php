@extends('layout')
@section('searchuser')
<div class="container-content">
    <div class="content">
        <div class="upload-file" id="image-holder">
            {{-- <form id="fileUpload" method="get" action="{{ url('addfile')}}" enctype="multipart/form-data"> --}}
            <a href="{{ route('vgsuser.create') }}"><input type="submit" id="iteam" hidden>
                <label class="click-to-upload" for="iteam"><span>Thêm người dùng</span></label></a>

            {{-- </form> --}}


            <div>
                <p class="btn btn-clear-img">X</p>
            </div>
            <div class="text-upload">
                {{-- <span>Drag & drop multiple files to upload</span> --}}
            </div>
            {{-- <div id="img-preview">

            </div> --}}
        </div>

        <div class="details" id="tabs">
            <div class="menu">
                <div class="search">
                    <form method="get" action="{{ url('searchuser')}}">
                        <input id="search-user" type="submit" hidden>
                        <label for="search-user" style="cursor: pointer"><i class="fa-solid fa-magnifying-glass"></i></label>
                        
                        <input name="key" type="text" placeholder="Nhập tên Golfer">
                        <!-- <span>
                                                        Search for file
                                                    </span> -->
                    </form>
                </div>
                <div class="change">
                    <ul style="display: flex;" class="tab">
                        <li class="filter">
                            <a href="#"><span style="color: #90CDF4 !important;">
                                    Filter
                                </span></a>
                        </li>
                        <li class="active-menu">
                            <a href="#images">
                                Images
                            </a>
                        </li>
                        <li>
                            <a href="#files">
                                Files
                            </a>
                        </li>
                        <li>
                            <a href="#audio">
                                Audio
                            </a>
                        </li>
                        <li>
                            <a href="#video">
                                Video
                            </a>
                        </li>
                    </ul>
                </div>
            </div>

            <div class="tab-content">
                <div class="tab-item" id="images">
                    <table>
                        <tbody>
                            {{-- <p>Tim thay san pham</p> --}}
                            @foreach ($user as $v)
                                <tr>
                                    <td class="img-file-uploaded"><img src="{{ 'userImg/' . $v->img_name }}"
                                            width="150px" height="100px"></td>
                                    <td class="text-file-uploaded">{{ $v->user_name }}</td>
                                    <td class="time-file-uploaed" style="max-width: 500px; overflow-x:scroll;">
                                        {{ $v->text }}</td>
                                    <td class="more-file-uploaed">

                                        <div style="position: relative"><i class="fa-solid fa-ellipsis"></i>
                                            <div class="manage-more">
                                                <div class="manage-edit"><a href="">Manage</a></div>
                                                <hr />
                                                <ul>
                                                    <div style="padding-left: 10px">
                                                        <li>
                                                            <i class="fa-solid fa-pen-to-square"></i>
                                                            <a href="{{ route('vgsuser.edit', $v->id) }}">Edit file
                                                                name</a>
                                                        </li>
                                                    </div>
                                                    <div style="padding-left: 10px">
                                                        <li style="display: flex">


                                                            <i class="fa-solid fa-trash-can"></i>
                                                            <form action="{{ url('delete_user/'.$v->id)}}" method="POST"
                                                                onsubmit="return confirm('Ban co muon xoa khong')">
                                                                @csrf
                                                                @method('DELETE')
                                                                <button style="background: antiquewhite">Delete
                                                                    file</button>
                                                            </form>

                                                        </li>
                                                    </div>

                                                </ul>
                                            </div>
                                        </div>

                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>  
            
        </div>
    </div>
<div>
@endsection
