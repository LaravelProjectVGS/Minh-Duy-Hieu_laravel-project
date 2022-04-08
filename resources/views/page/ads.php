
@extends('layouts.layout')

@include('base')

@section('content')
    <div class="con">
        <div class="container">
            <div class="content">
                <div class="form-login">
                    <form action="{{url('/tour/edit/'.$tour->id)}}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <h2 class="txt createpage">Create Page</h2>
                        <label for="password" class="text-password">
                            <img class="icon icon-mail" src="{{asset('images/image.svg')}}" alt="">
                            Image
                        </label>
                        <a href="{{url('/upload')}}" style="cursor: pointer;">
                            <div class="signin">
                                <input name="img" type="hidden" value="{{Session::get('image')}}" >
                                <div class="btn"><input class="btn-signin" type="button" value="Choose image" ></div>
                            </div>
                        </a>
                        @if ($message = Session::get('success'))
                        <div class="alert alert-success alert-block">
                            <strong>{{ $message }}</strong>
                        </div>
                        <img style="width: 100%; height: 400px; object-fit: cover;" src="{{asset('images/').'/'.Session::get('image')}}">
                        @elseif($tour->img)
                        <img style="width: 100%; height: 400px; object-fit: cover;" src="{{asset('images/').'/'.$tour->img}}">
                        @endif
                        <label for="status" class="text-password">
                            Title
                        </label>
                        <input name="title" id="title" class="input-email" type="text" placeholder="Title" value="{{$tour->title}}">
                        <label for="name" class="text-email">
                            <!-- <img class="icon icon-mail" src="{{asset('images/pen-tool.svg')}}" alt=""> -->
                            Description
                        </label>
                        <textarea rows="4" name="description" id="description" class="input-area" placeholder="Description">{{$tour->description}}</textarea>
                        <label for="tour" class="text-password">
                            Tour
                        </label>
                        <select class="input-email" id="tour" name ="tour">
                            <option <?php if($tour->tour == 'Tour golf Châu Âu') {echo "selected";} ?> value="Tour golf Châu Âu">Tour golf Châu Âu</option>
                            <option <?php if($tour->tour == 'Tour golf Châu Úc') {echo "selected";} ?> value="Tour golf Châu Úc">Tour golf Châu Úc</option>
                            <option <?php if($tour->tour == 'Tour golf Châu Phi') {echo "selected";} ?> value="Tour golf Châu Phi">Tour golf Châu Phi</option>
                            <option <?php if($tour->tour == 'Tour golf Châu Á') {echo "selected";} ?> value="Tour golf Châu Á">Tour golf Châu Á</option>
                            <option <?php if($tour->tour == 'Tour golf Châu Mỹ') {echo "selected";} ?> value="Tour golf Châu Mỹ">Tour golf Châu Mỹ</option>
                            <option <?php if($tour->tour == 'EVGA Tour') {echo "selected";} ?> value="EVGA Tour">EVGA Tour</option>
                        </select>
                        <label for="name" class="text-email">
                            <!-- <img class="icon icon-mail" src="{{asset('images/pen-tool.svg')}}" alt=""> -->
                            Place
                        </label>
                        <textarea rows="4" name="place" id="place" class="input-area" placeholder="Place">{{$tour->place}}</textarea>
                        <label for="time" class="text-email">
                            <!-- <img class="icon icon-mail" src="{{asset('images/pen-tool.svg')}}" alt=""> -->
                            Time
                        </label>
                        <input name="time" id="time" class="input-email" type="number" placeholder="Time" value="{{$tour->time}}">
                        
                        <label for="start" class="text-email">
                            <!-- <img class="icon icon-mail" src="{{asset('images/pen-tool.svg')}}" alt=""> -->
                            Start
                        </label>
                        <input name="start" id="name" class="input-email" type="date" placeholder="Start" value="{{$tour->start}}">
                        <label for="price" class="text-email">
                            <!-- <img class="icon icon-mail" src="{{asset('images/pen-tool.svg')}}" alt=""> -->
                            Price
                        </label>
                        <input name="price" id="name" class="input-email" type="number" placeholder="Price" value="{{$tour->price}}">
                        
                        <label for="status" class="text-password">
                            Status
                        </label>
                        <select class="input-email" id="status" name ="status">
                            <option value="Published">Đang nhận khách</option>
                            <option value="Private">No</option>
                        </select>

                        <label for="status" class="text-password">
                            To do list
                        </label>
                        <textarea name="todolist" id="text" cols="30" rows="10">{{$tour->todolist}}</textarea>
                        <script type="text/javascript">
                        CKEDITOR.replace( 'todolist', {
                            
                            filebrowserBrowseUrl     : "{{ route('ckfinder_browser') }}",
                            filebrowserImageBrowseUrl: "{{ route('ckfinder_browser') }}?type=Images&token=123",
                            filebrowserFlashBrowseUrl: "{{ route('ckfinder_browser') }}?type=Flash&token=123", 
                            filebrowserUploadUrl     : "{{ route('ckfinder_connector') }}?command=QuickUpload&type=Files", 
                            filebrowserImageUploadUrl: "{{ route('ckfinder_connector') }}?command=QuickUpload&type=Images",
                            filebrowserFlashUploadUrl: "{{ route('ckfinder_connector') }}?command=QuickUpload&type=Flash",
                        } );
                        
                        </script>
                        @include('ckfinder::setup')
                    
                        @if($errors)
                        @foreach($errors->all() as $error)
                        <span class="alert-err">{{$error}}</span>
                        @endforeach
                        @endif
                        <div class="signin">
                            <div class="btn"><input class="btn-signin" type="submit" value="Save" ></div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <script>
        
    </script>
@endsection