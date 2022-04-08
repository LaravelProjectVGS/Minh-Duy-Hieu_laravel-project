@extends('layouts.layout')

@include('base')

@section('content')
<div class="con">
    <div class="container">
        <div class="content">
            <div class="form-login">
                <form action="{{url('/docreatepage')}}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <h2 class="txt createpage">Create Tour</h2>
                    <label for="password" class="text-password">
                        <img class="icon icon-mail" src="{{asset('images/image.svg')}}" alt="">
                        Image
                    </label>
                    <input required name="img" id="img" oninvalid="setCustomValidity('Ảnh không được để trống.')" onchange="try{setCustomValidity('')}catch(e){}" type="hidden" class="input-email" value="{{Session::get('image')}}">
                    <a href="{{url('/tour/upload')}}" style="cursor: pointer;">
                        <div class="signin">
                            <div class="btn"><input class="btn-signin" type="button" value="Choose image"></div>
                        </div>
                    </a>
                    @if ($message = Session::get('success'))
                    <div class="alert alert-success alert-block">
                        <strong>{{ $message }}</strong>
                    </div>
                    <img style="width: 100%; height: 400px; object-fit: cover;" src="{{asset('images/'.Session::get('image'))}}">
                    @endif
                    <label for="status" class="text-password">
                        Title
                    </label>
                    <input name="title" id="title" class="input-email" type="text" placeholder="Title" required oninvalid="setCustomValidity('Tiêu đề không được để trống.')" onchange="try{setCustomValidity('')}catch(e){}" value="{{old('title')}}">
                    <label for="name" class="text-email">
                        <!-- <img class="icon icon-mail" src="{{asset('images/pen-tool.svg')}}" alt=""> -->
                        Description
                    </label>
                    <textarea rows="4" name="description" id="description" class="input-area" required oninvalid="setCustomValidity('Mô tả không được để trống.')" onchange="try{setCustomValidity('')}catch(e){}" placeholder="Description">{{old('description')}}</textarea>
                    <label for="tour" class="text-password">
                        Tour
                    </label>
                    <select class="input-email" id="tour" name="tour">
                        <option value="Tour golf Châu Âu">Tour golf Châu Âu</option>
                        <option value="Tour golf Châu Úc">Tour golf Châu Úc</option>
                        <option value="Tour golf Châu Phi">Tour golf Châu Phi</option>
                        <option value="Tour golf Châu Á">Tour golf Châu Á</option>
                        <option value="Tour golf Châu Mỹ">Tour golf Châu Mỹ</option>
                        <option value="EVGA Tour">EVGA Tour</option>
                    </select>
                    <label for="name" class="text-email">
                        <!-- <img class="icon icon-mail" src="{{asset('images/pen-tool.svg')}}" alt=""> -->
                        Place
                    </label>
                    <textarea rows="4" name="place" id="place" class="input-area" required oninvalid="setCustomValidity('Địa điểm không được để trống.')" onchange="try{setCustomValidity('')}catch(e){}" placeholder="Place">{{old('place')}}</textarea>
                    <label for="time" class="text-email">
                        <!-- <img class="icon icon-mail" src="{{asset('images/pen-tool.svg')}}" alt=""> -->
                        Time
                    </label>
                    <input name="time" id="time" class="input-email" type="number" placeholder="Time" value="{{old('time')|1}}">

                    <label for="start" class="text-email">
                        <!-- <img class="icon icon-mail" src="{{asset('images/pen-tool.svg')}}" alt=""> -->
                        Start
                    </label>
                    <input required name="start" id="name" class="input-email" type="date" placeholder="Start" value="{{old('date')}}">
                    <label for="price" class="text-email">
                        <!-- <img class="icon icon-mail" src="{{asset('images/pen-tool.svg')}}" alt=""> -->
                        Price
                    </label>
                    <input name="price" id="name" class="input-email" type="number" placeholder="Price" value="{{old('price')|0}}">

                    <label for="status" class="text-password">
                        Status
                    </label>
                    <select required class="input-email" id="status" name="status">
                        <option value="Published">Đang nhận khách</option>
                        <option value="Private">No</option>
                    </select>

                    <label for="status" class="text-password">
                        To do list
                    </label>
                    <textarea name="todolist" id="todolist" cols="30" rows="10"></textarea>
                    <script type="text/javascript">
                        var editor = CKEDITOR.replace('todolist', {

                            // filebrowserBrowseUrl     : "{{ route('ckfinder_browser') }}",
                            // filebrowserImageBrowseUrl: "{{ route('ckfinder_browser') }}?type=Images&token=123",
                            // filebrowserFlashBrowseUrl: "{{ route('ckfinder_browser') }}?type=Flash&token=123", 
                            // filebrowserUploadUrl     : "{{ route('ckfinder_connector') }}?command=QuickUpload&type=Files", 
                            // filebrowserImageUploadUrl: "{{ route('ckfinder_connector') }}?command=QuickUpload&type=Images",
                            // filebrowserFlashUploadUrl: "{{ route('ckfinder_connector') }}?command=QuickUpload&type=Flash",
                            language: 'en',
                            extraPlugins: 'notification'
                        });
                    </script>

                    @if($errors)
                    @foreach($errors->all() as $error)
                    <span class="alert-err">{{$error}}</span>
                    @endforeach
                    @endif
                    <div class="signin">
                        <div class="btn"><input class="btn-signin" type="submit" value="Add"></div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<script>
    var title = document.getElementById('title');
    var description = document.getElementById('description');
    var place = document.getElementById('place');
    var todolist = document.getElementById('todolist');
    var img = document.getElementById('img');
    // trimStart()
    title.addEventListener('change', function() {
        this.value = this.value.trimStart();
    })
    description.addEventListener('change', function() {
        this.value = this.value.trimStart();
    })
    place.addEventListener('change', function() {
        this.value = this.value.trimStart();
    })
    todolist.addEventListener('change', function() {
        this.value = this.value.trimStart();
    })
    img.addEventListener('change', function() {
        this.value = this.value.trimStart();
    })

    $("form").submit(function(e) {

        var messageLength = editor.getData().replaceAll('&nbsp;', '').trim().length;
        console.log(messageLength);
        // alert( 'Please enter a message' );
        if (!messageLength) {
            editor.showNotification('This field is required.', 'warning');
            // setTimeout(() => notifications.forEach(notification => notification.close()), 2000);
            e.preventDefault();
            // evt.cancel();
        }

    });
</script>
@endsection