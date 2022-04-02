@extends('layouts.layout')

@include('base')

@section('content')

<div class="content">
    @if(session('success'))
    <span id="success" class="alert-success">{{session('success')}}</span>
    @endif
    <table class="table pc-show">
        <thead class="pc-show">
            <tr class="">
                <th><span class="title-text page">Page title</span></th>
                <th><span class="title-text created">Created</span></th>
                <th><span class="title-text status">Status</span></th>
                <th><span class="title-text author">Author</span></th>
                <th class="addnew">
                    <button class="btn-add">
                        <img src="{{asset('images/file-plus2.svg')}}" class="btn-file-plus" alt="">
                        <a href="{{url('/add')}}" class="btn b">Add new</a>
                    </button>
                </th>
            </tr>
            <tr class="">
                <td colspan="5" style="height: 1px; color: #E2E8F0;"><hr style="background-color: #E2E8F0; height: 1px; border: 0;"></td>
            </tr>
        </thead>
        <tbody>
           
            @foreach($pages as $page)
                <tr class="pc-show">
                    <td><span class="page-item page-title">{{$page->title}}</span></td>
                    <td><span class="page-item page-created">{{$page->created}}</span></td>
                    @if($page->status == 'Published')
                        <td><div class="container-status "><button class="page-item page-status"><span>{{$page->status}}</span></button></div></td>
                    @elseif($page->status == 'Private')
                        <td><div class="container-status "><button class="private page-item page-status"><span>{{$page->status}}</span></button></div></td>
                    @endif
                    <td>
                        <span class="page-item page-author">{{$page->author}}
                            <div class="container-status pd"><button class="page-item page-access"><span>Admin</span></button></div>
                        </span>
                    </td>
                    <td>
                        <div class="container-statu show dropdown">
                            <span class="page-item page-spread">
                                <img src="{{asset('images/more-horizontal.svg')}}" alt="">
                            </span>
                            <div class="manage-hover dropdown-content">
                                <div class="manage-title"><span class="">Manage</span></div>
                                <a href="{{url('/edit/'.$page->id)}}" class="edit">
                                    <img src="{{asset('images/edit.svg')}}" alt="">
                                    <span>Edit file name</span>
                                </a>
                                <a href="{{url('/delete/'.$page->id)}}" class="trash">
                                    <img src="{{asset('images/trash-3.svg')}}" alt="">
                                    <span>Delete file</span>
                                </a>
                            </div>
                        </div>
                    </td>
                </tr>
            @endforeach
           
        </tbody>
    </table>

</div>

<script>
    var success = document.getElementById('success');
    setTimeout(() => {
        success.style.display = 'none';
    }, 2000);
</script>

@endsection