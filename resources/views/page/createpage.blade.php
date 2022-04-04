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
                <th><span class="title-text page">Title</span></th>
                <th><span class="title-text created">Time</span></th>
                <th><span class="title-text created">Created</span></th>
                <th><span class="title-text created">Start</span></th>
                <th><span class="title-text status">Price</span></th>
                <th><span class="title-text author">Image</span></th>
                <th><span class="title-text author">Status</span></th>
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
           
            @foreach($tours as $tour)
                <tr class="pc-show">
                    <td><span class="page-item page-title">{{$tour->title}}</span></td>
                    <td><span class="page-item page-created">{{$tour->time}}</span></td>
                    <td><span class="page-item page-created">{{$tour->created}}</span></td>
                    <td><span class="page-item page-created">{{$tour->start}}</span></td>
                    <td><span class="page-item page-created">{{$tour->price}}</span></td>
                    <td><span class="page-item page-created">{{$tour->img}}</span></td>
                    @if($tour->status == 'Published')
                        <td><div class="container-status "><button class="page-item page-status"><span>{{$tour->status}}</span></button></div></td>
                    @elseif($tour->status == 'Private')
                        <td><div class="container-status "><button class="private page-item page-status"><span>{{$tour->status}}</span></button></div></td>
                    @endif
                    <td>
                        <div class="container-statu show dropdown">
                            <span class="page-item page-spread">
                                <img src="{{asset('images/more-horizontal.svg')}}" alt="">
                            </span>
                            <div class="manage-hover dropdown-content">
                                <div class="manage-title"><span class="">Manage</span></div>
                                <a href="{{url('/edit/'.$tour->id)}}" class="edit">
                                    <img src="{{asset('images/edit.svg')}}" alt="">
                                    <span>Edit file name</span>
                                </a>
                                <a href="{{url('/delete/'.$tour->id)}}" class="trash">
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