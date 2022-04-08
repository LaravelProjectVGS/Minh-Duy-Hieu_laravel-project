@extends('layout')
@section('updatefile')
<div id="myModal" class="modal">
    <form action="{{ route('fileview.update',$id) }}" method="post" id="pop-up-form-add" enctype="multipart/form-data" role="form"> 
        {{-- {{ csrf_field()}} --}}
        {{ method_field('put') }}
        @csrf
        <div class="modal-content">
            <div class="modal-header">
                <span class="close">&times;</span>
                <h2>Thêm file</h2>
            </div>
            <div class="modal-body">
                <div class="form-group">
                    <label for="">Tên file</label>
                    <input type="text" name="name" value="{{ $file->name}}" class="form-control">
                </div>
                <div class="form-group">
                    <label for="">File:</label>
                    <input type="text" name="file" value="{{ $file->file}}" class="form-control">
                </div>
                <button type="submit" class="btn btn-default">Sửa</button>
            </div>
        </div>
    </form>
</div>
@endsection