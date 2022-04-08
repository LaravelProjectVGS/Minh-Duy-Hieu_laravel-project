@extends('layouts.layout')

@include('base')

@section('content')
    <div class="con">
        <div class="container">
            <div class="content">
                <div class="form-login">
                    <form id="form-1" action="{{url('/tour/edit/'.$tour->id)}}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <h2 class="txt createpage">Edit Tour</h2>
                        <label for="password" class="text-password">
                            <img class="icon icon-mail" src="{{asset('images/image.svg')}}" alt="">
                            Image
                        </label>
                        <a href="{{url('/tour/edit/'.$tour->id.'/editimg')}}" style="cursor: pointer;">
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
                        <div class="form-group">
                            <label for="status" class="text-password">
                                Title
                            </label>
                            <input name="title" 
                            id="title" 
                            class="input-email" 
                            type="text" 
                            placeholder="Title" 
                            
                            value="{{$tour->title}}">
                            <span class="form-message"></span>
                        </div>
                        <div class="form-group">
                            <label for="name" class="text-email">
                                <!-- <img class="icon icon-mail" src="{{asset('images/pen-tool.svg')}}" alt=""> -->
                                Description
                            </label>
                            <textarea rows="4" name="description" id="description" class="input-area" 
                           
                            placeholder="Description">{{$tour->description}}</textarea>
                            <span class="form-message"></span>
                        </div>
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
                        <div class="form-group">
                            <label for="name" class="text-email">
                                <!-- <img class="icon icon-mail" src="{{asset('images/pen-tool.svg')}}" alt=""> -->
                                Place
                            </label>
                            <textarea rows="4" name="place" id="place" class="input-area" 
                           
                            placeholder="Place">{{$tour->place}}</textarea>
                            <span class="form-message"></span>
                        </div>
                        <label for="time" class="text-email">
                            <!-- <img class="icon icon-mail" src="{{asset('images/pen-tool.svg')}}" alt=""> -->
                            Time
                        </label>
                        <input name="time" id="time" class="input-email" type="number" placeholder="Time" value="{{$tour->time}}">
                        <div class="form-group">
                            <label for="start" class="text-email">
                                <!-- <img class="icon icon-mail" src="{{asset('images/pen-tool.svg')}}" alt=""> -->
                                Start
                            </label>
                            <input name="start" id="start" class="input-email" type="date" placeholder="Start" value="{{$tour->start}}">
                            <span class="form-message"></span>
                        </div>
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
                        <div class="form-group">
                            <label for="status" class="text-password">
                                To do list
                            </label>
                            <textarea name="todolist" id="todolist" cols="30" 
                           
                            rows="10">{{$tour->todolist}}</textarea>
                            <span id="cke-message" class="form-message"></span>
                        </div>
                        <script type="text/javascript">
                        var editor = CKEDITOR.replace( 'todolist', {
                            
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

        function Validator(options) {
            var formElement = document.querySelector(options.form);

            if(formElement) {
                options.rules.forEach(function(rule) {
                    var inputElement = formElement.querySelector(rule.selector);
                    var errorElement = inputElement.parentElement.querySelector('.form-message')

                    console.log(errorElement);
                    if(inputElement) {
                        inputElement.onblur = function() {
                            var errorMessage = rule.test(inputElement.value);
                            if(errorMessage) {
                                errorElement.innerText = errorMessage;
                                inputElement.parentElement.classList.add('invalid');
                            }else {
                                errorElement.innerText = '';
                                inputElement.parentElement.classList.remove('invalid');
                            }
                        }
                    }
                })
            }
        }

        Validator.isRequired = function(selector) {
            return {
                selector: selector,
                test: function(value) {
                    return value.trim() ? undefined : 'Vui lòng nhập trường này.';
                }
            }
        }


        Validator({
            form: '#form-1',
            rules: [
                Validator.isRequired('#title'),
                Validator.isRequired('#description'),
                Validator.isRequired('#place'),
                Validator.isRequired('#start'),
                Validator.isRequired('#todolist'),
            ]
        });


        var ckemsg = document.getElementById('cke-message');
        editor.on( 'blur', 
        function()
        { 
            if(editor.getData().trim() == '') {
                
                ckemsg.innerText = 'Vui lòng nhập trường này.';
                document.querySelector('#cke_todolist').classList.add('red');
            }else {
                ckemsg.innerText = '';
                document.querySelector('#cke_todolist').classList.remove('red');
            }
        } );
    </script>
@endsection