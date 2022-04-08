@extends('layout')

@section('adduser')
    <script>
        $().ready(function() {
        $("#pop-up-form-add").validate({
            rules: {
                "user_name": {
                    required: true,
                },
                "img_name": {
                    required: true,
                },
                "text": {
                    required: true,
                },
            },
            messages: {
                "user_name": {
                    required: "Bạn chưa nhập tên",
                },
                "img_name": {
                    required: "Bạn chưa thêm file",

                },
                "text": {
                    
                    required: "Bắt buộc nhập trường này",

                }
            }
        });
    });
    </script>
<div id="myModal" class="modal">
    <form action="{{ asset('') }}vgsuser" method="post" id="pop-up-form-add" enctype="multipart/form-data" role="form"> 
        {{ csrf_field()}}
        @csrf
        <div class="modal-content">
            <div class="modal-header">
                <span class="close">&times;</span>
                <h2>Thêm người dùng</h2>
            </div>
            <div class="modal-body">
                <div class="form-group">
                    <label for="">Tên người dùng</label>
                    <input type="text" name="user_name" class="form-control">
                </div>

                <div class="form-group">
                    <label for="">Ảnh người dùng</label>
                    <input type="file" name="img_name" class="form-control">
                </div>
                <div class="form-group">
                    <label for="">Text:</label>
                    <textarea rows="5" name="text" class="form-control"></textarea>
                </div>
                <button type="submit" class="btn btn-default">Thêm</button>
            </div>
        </div>
    </form>
</div>
@endsection