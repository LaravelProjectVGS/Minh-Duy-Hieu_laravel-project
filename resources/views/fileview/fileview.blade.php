@extends('layout')

@section('fileview')
    <div class="container-content">
        <div class="content">
            <div class="upload-file" id="image-holder">
                {{-- <form id="fileUpload" method="get" action="" enctype="multipart/form-data"> --}}
                <a href="{{ route('fileview.create') }}"><input type="submit" id="iteam" hidden>
                    <label class="click-to-upload" for="iteam"><span>click to
                            upload</span></label></a>

                {{-- </form> --}}
                <div>
                    <p class="btn btn-clear-img">X</p>
                </div>
                <div class="text-upload">
                    <span>Drag & drop multiple files to upload</span>
                </div>
                <div id="img-preview">

                </div>
            </div>

            <div class="details" id="tabs">
                <div class="menu">
                    <div class="search">
                        <i class="fa-solid fa-magnifying-glass"></i>
                        <form method="get">
                            <input id="search" type="text" placeholder="Search for file">
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
                                @foreach ($files as $file)
                                    <tr>
                                        <td class="img-file-uploaded"><img src="./photo.png"></td>
                                        <td class="text-file-uploaded">{{ $file->name }}</td>
                                        <td class="time-file-uploaed">{{ $file->file }}</td>
                                        <td class="more-file-uploaed">
                                            <div style="position: relative;"><i class="fa-solid fa-ellipsis"></i>
                                                <div class="manage-more">
                                                    <div class="manage-edit"><a href="">Manage</a></div>
                                                    <hr />
                                                    <ul>
                                                        <div style="padding-left: 10px">
                                                            <li>
                                                                <i class="fa-solid fa-pen-to-square"></i>
                                                                <a href="{{ route('fileview.edit', $file->id) }}">Edit
                                                                    file
                                                                    name</a>
                                                            </li>
                                                        </div>


                                                        <div style="padding-left: 10px">
                                                            <li style="display: flex">
                                                                <i class="fa-solid fa-trash-can"></i>
                                                                <form
                                                                    action="{{ asset('') }}fileview/{{ $file->id }}"
                                                                    method="POST"
                                                                    onsubmit="return confirm('Ban co muon xoa khong')">
                                                                    {{ csrf_field() }}
                                                                    {{ method_field('delete') }}
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
                    <div class="tab-item" id="files">
                        <table>
                            <tbody>
                                @foreach ($files as $file)
                                    <tr>
                                        <td class="img-file-uploaded"><img src="./photo.png"></td>
                                        <td class="text-file-uploaded">{{ $file->name }}</td>
                                        <td class="time-file-uploaed">{{ $file->file }}</td>
                                        <td class="more-file-uploaed"><i class="fa-solid fa-ellipsis"></i>
                                            <div class="manage-more">
                                                <div class="manage-edit"><a href="">Manage</a></div>
                                                <hr />
                                                <ul>
                                                    <li>
                                                        <i class="fa-solid fa-pen-to-square"></i>
                                                        <a href="#">Edit file name</a>
                                                    </li>
                                                    <li>
                                                        <i class="fa-solid fa-trash-can"></i>
                                                        <a href="#">Delete file</a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                    <div class="tab-item" id="audio">
                        <table>
                            <tbody>
                                @foreach ($files as $file)
                                    <tr>
                                        <td class="img-file-uploaded"><img src="./photo.png"></td>
                                        <td class="text-file-uploaded">{{ $file->name }}</td>
                                        <td class="time-file-uploaed">{{ $file->file }}</td>
                                        <td class="more-file-uploaed"><i class="fa-solid fa-ellipsis"></i>
                                            <div class="manage-more">
                                                <div class="manage-edit"><a href="">Manage</a></div>
                                                <hr />
                                                <ul>
                                                    <li>
                                                        <i class="fa-solid fa-pen-to-square"></i>
                                                        <a href="#">Edit file name</a>
                                                    </li>
                                                    <li>
                                                        <i class="fa-solid fa-trash-can"></i>
                                                        <a href="#">Delete file</a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                    <div class="tab-item" id="video">
                        <table>
                            <tbody>
                                @foreach ($files as $file)
                                    <tr>
                                        <td class="img-file-uploaded"><img src="./photo.png"></td>
                                        <td class="text-file-uploaded">{{ $file->name }}</td>
                                        <td class="time-file-uploaed">{{ $file->file }}</td>
                                        <td class="more-file-uploaed"><i class="fa-solid fa-ellipsis"></i>
                                            <div class="manage-more">
                                                <div class="manage-edit"><a href="">Manage</a></div>
                                                <hr />
                                                <ul>
                                                    <li>
                                                        <i class="fa-solid fa-pen-to-square"></i>
                                                        <a href="#">Edit file name</a>
                                                    </li>
                                                    <li>
                                                        <i class="fa-solid fa-trash-can"></i>
                                                        <a href="#">Delete file</a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>

                    </div>
                </div>


                <!-- <div id="files">
                                    <div class="files-uploaded">
                                        <div class="file-uploaded">
                                            <div class="img-file-uploaded">

                                                <img src="./photo.png">
                                            </div>
                                            <div class="text-file-uploaded">
                                                <span>
                                                    Oceanic_view.jpg
                                                </span>
                                            </div>
                                            <div class="time-file-uploaed">
                                                <span>
                                                    Uploaded 2 days ago
                                                </span>
                                            </div>
                                            <div class="more-file-uploaed">
                                                <img src="./more-horizontal.png">
                                                <div class="manage-more">
                                                    <div class="manage-edit"><a href="">Manage</a></div>
                                                    <hr />
                                                    <ul>
                                                        <li>
                                                            <i class="fa-solid fa-pen-to-square"></i>
                                                            <a href="#">Edit file name</a>
                                                        </li>
                                                        <li>
                                                            <i class="fa-solid fa-trash-can"></i>
                                                            <a href="#">Delete file</a>
                                                        </li>
                                                    </ul>
                                                </div>

                                            </div>
                                        </div>
                                    </div>
                                    <div class="files-uploaded">
                                        <div class="file-uploaded">
                                            <div class="img-file-uploaded">

                                                <img src="./photo.png">
                                            </div>
                                            <div class="text-file-uploaded">
                                                <span>
                                                    Oceanic_view.jpg
                                                </span>
                                            </div>
                                            <div class="time-file-uploaed">
                                                <span>
                                                    Uploaded 2 days ago
                                                </span>
                                            </div>
                                            <div class="more-file-uploaed">
                                                <img src="./more-horizontal.png">
                                                <div class="manage-more">
                                                    <div class="manage-edit"><a href="">Manage</a></div>
                                                    <hr />
                                                    <ul>
                                                        <li>
                                                            <i class="fa-solid fa-pen-to-square"></i>
                                                            <a href="#">Edit file name</a>
                                                        </li>
                                                        <li>
                                                            <i class="fa-solid fa-trash-can"></i>
                                                            <a href="#">Delete file</a>
                                                        </li>
                                                    </ul>
                                                </div>

                                            </div>
                                        </div>
                                    </div>
                                    <div class="files-uploaded">
                                        <div class="file-uploaded">
                                            <div class="img-file-uploaded">

                                                <img src="./photo.png">
                                            </div>
                                            <div class="text-file-uploaded">
                                                <span>
                                                    Oceanic_view.jpg
                                                </span>
                                            </div>
                                            <div class="time-file-uploaed">
                                                <span>
                                                    Uploaded 2 days ago
                                                </span>
                                            </div>
                                            <div class="more-file-uploaed">
                                                <img src="./more-horizontal.png">
                                                <div class="manage-more">
                                                    <div class="manage-edit"><a href="">Manage</a></div>
                                                    <hr />
                                                    <ul>
                                                        <li>
                                                            <i class="fa-solid fa-pen-to-square"></i>
                                                            <a href="#">Edit file name</a>
                                                        </li>
                                                        <li>
                                                            <i class="fa-solid fa-trash-can"></i>
                                                            <a href="#">Delete file</a>
                                                        </li>
                                                    </ul>
                                                </div>

                                            </div>
                                        </div>
                                    </div>
                                    <div class="files-uploaded">
                                        <div class="file-uploaded">
                                            <div class="img-file-uploaded">

                                                <img src="./photo.png">
                                            </div>
                                            <div class="text-file-uploaded">
                                                <span>
                                                    Oceanic_view.jpg
                                                </span>
                                            </div>
                                            <div class="time-file-uploaed">
                                                <span>
                                                    Uploaded 2 days ago
                                                </span>
                                            </div>
                                            <div class="more-file-uploaed">
                                                <img src="./more-horizontal.png">
                                                <div class="manage-more">
                                                    <div class="manage-edit"><a href="">Manage</a></div>
                                                    <hr />
                                                    <ul>
                                                        <li>
                                                            <i class="fa-solid fa-pen-to-square"></i>
                                                            <a href="#">Edit file name</a>
                                                        </li>
                                                        <li>
                                                            <i class="fa-solid fa-trash-can"></i>
                                                            <a href="#">Delete file</a>
                                                        </li>
                                                    </ul>
                                                </div>

                                            </div>
                                        </div>
                                    </div>
                                    <div class="file-uploaded">
                                        <div class="img-file-uploaded">
                                            <img src="./photo.png">
                                        </div>
                                        <div class="text-file-uploaded">
                                            <span>
                                                Oceanic_view.jpg
                                            </span>
                                        </div>
                                        <div class="time-file-uploaed">
                                            <span>
                                                Uploaded 2 days ago
                                            </span>
                                        </div>
                                        <div class="more-file-uploaed">
                                            <img src="./more-horizontal.png">
                                            <div class="manage-more">
                                                <div class="manage-edit"><a href="">Manage</a></div>
                                                <hr />
                                                <ul>
                                                    <li>
                                                        <i class="fa-solid fa-pen-to-square"></i>
                                                        <a href="#">Edit file name</a>
                                                    </li>
                                                    <li>
                                                        <i class="fa-solid fa-trash-can"></i>
                                                        <a href="#">Delete file</a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div> -->


                <!-- <div class="file-uploaded">
                                    <div class="img-file-uploaded">
                                        <img src="./photo.png">
                                    </div>
                                    <div class="text-file-uploaded">
                                        <span>
                                            Oceanic_view.jpg
                                        </span>
                                    </div>
                                    <div class="time-file-uploaed">
                                        <span>
                                            Uploaded 2 days ago
                                        </span>
                                    </div>
                                    <div class="more-file-uploaed">
                                        <img src="./more-horizontal.png">
                                        <div class="manage-more">
                                            <div class="manage-edit"><a href="">Manage</a></div>
                                            <hr />
                                            <ul>
                                                <li>
                                                    <i class="fa-solid fa-pen-to-square"></i>
                                                    <a href="#">Edit file name</a>
                                                </li>
                                                <li>
                                                    <i class="fa-solid fa-trash-can"></i>
                                                    <a href="#">Delete file</a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="file-uploaded">
                                    <div class="img-file-uploaded">
                                        <img src="./photo.png">
                                    </div>
                                    <div class="text-file-uploaded">
                                        <span>
                                            Oceanic_view.jpg
                                        </span>
                                    </div>
                                    <div class="time-file-uploaed">
                                        <span>
                                            Uploaded 2 days ago
                                        </span>
                                    </div>
                                    <div class="more-file-uploaed">
                                        <img src="./more-horizontal.png">
                                        <div class="manage-more">
                                            <div class="manage-edit"><a href="">Manage</a></div>
                                            <hr />
                                            <ul>
                                                <li>
                                                    <i class="fa-solid fa-pen-to-square"></i>
                                                    <a href="#">Edit file name</a>
                                                </li>
                                                <li>
                                                    <i class="fa-solid fa-trash-can"></i>
                                                    <a href="#">Delete file</a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="file-uploaded">
                                    <div class="img-file-uploaded">
                                        <img src="./photo.png">
                                    </div>
                                    <div class="text-file-uploaded">
                                        <span>
                                            Oceanic_view.jpg
                                        </span>
                                    </div>
                                    <div class="time-file-uploaed">
                                        <span>
                                            Uploaded 2 days ago
                                        </span>
                                    </div>
                                    <div class="more-file-uploaed">
                                        <img src="./more-horizontal.png">
                                        <div class="manage-more">
                                            <div class="manage-edit"><a href="">Manage</a></div>
                                            <hr />
                                            <ul>
                                                <li>
                                                    <i class="fa-solid fa-pen-to-square"></i>
                                                    <a href="#">Edit file name</a>
                                                </li>
                                                <li>
                                                    <i class="fa-solid fa-trash-can"></i>
                                                    <a href="#">Delete file</a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div> -->
            </div>

            <div class="phantrang">
                <ul>
                    <li class="active-phantrang">
                        <a href="#">1</a>
                    </li>
                    <li>
                        <a href="#">2</a>
                    </li>
                    <li>
                        <a href="#">3</a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
@endsection
