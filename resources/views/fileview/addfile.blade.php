@extends('layout')
@section('addfile')
<div id="myModal" class="modal">
    <form action="{{ asset('') }}fileview" method="post" id="pop-up-form-add" enctype="multipart/form-data" role="form"> 
        {{ csrf_field()}}
        @csrf
        <div class="modal-content">
            <div class="modal-header">
                <span class="close">&times;</span>
                <h2>Thêm file</h2>
            </div>
            <div class="modal-body">
                <div class="form-group">
                    <label for="">Tên file</label>
                    <input type="text" name="name" class="form-control">
                </div>
                <div class="form-group">
                    <label for="">File:</label>
                    <input type="text" name="file" class="form-control">
                </div>
                <button type="submit" class="btn btn-default">Thêm</button>
            </div>
        </div>
    </form>
</div>
@endsection