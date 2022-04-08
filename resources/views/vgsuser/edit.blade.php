@extends('layout')

@section('edituser')
<div id="myModal" class="modal">
    <form action="{{ route('vgsuser.update',$id) }}" method="post" id="pop-up-form-add" enctype="multipart/form-data" role="form"> 
        {{ method_field('put') }}
        @csrf
        <div class="modal-content">
            <div class="modal-header">
                <span class="close">&times;</span>
                <h2>Thêm người dùng</h2>
            </div>
            <div class="modal-body">
                <div class="form-group">
                    <label for="">Tên người dùng</label>
                    <input type="text" name="user_name" value="{{ $useredit->user_name}}" class="form-control">
                </div>

                <div class="form-group">
                    <label for="">Ảnh người dùng</label>
                    <input type="file" name="img_name" class="form-control">
                    <img src="{{ asset('./userImg/'.$useredit->img_name) }}" width="150px" height="100px">
                </div>
                <div class="form-group">
                    <label for="">Text:</label>
                    <textarea rows="5" name="text"class="form-control">{{ $useredit->text}}</textarea>
                </div>
                <button type="submit" class="btn btn-default">Sửa</button>
            </div>
        </div>
    </form>
</div>
@endsection