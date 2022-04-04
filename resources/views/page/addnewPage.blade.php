@extends('layouts.layout')

@include('base')

@section('content')
    <div class="con">
        <div class="container">
            <div class="content">
                <div class="form-login">
                    <form action="{{url('/docreatepage')}}" method="POST">
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
                        <img style="width: 100%; height: 400px; object-fit: cover;" src="images/{{ Session::get('image') }}">
                        @endif
                        <label for="name" class="text-email">
                            <!-- <img class="icon icon-mail" src="{{asset('images/pen-tool.svg')}}" alt=""> -->
                            Title
                        </label>
                        <input name="title" id="name" class="input-email" type="text" placeholder="Title" value="{{old('title')}}">
                        <label for="time" class="text-email">
                            <!-- <img class="icon icon-mail" src="{{asset('images/pen-tool.svg')}}" alt=""> -->
                            Time
                        </label>
                        <input name="time" id="name" class="input-email" type="text" placeholder="Time" value="{{old('time')}}">
                        <label for="start" class="text-email">
                            <!-- <img class="icon icon-mail" src="{{asset('images/pen-tool.svg')}}" alt=""> -->
                            Start
                        </label>
                        <input name="start" id="name" class="input-email" type="date" placeholder="Start" value="{{old('date')}}">
                        <label for="price" class="text-email">
                            <!-- <img class="icon icon-mail" src="{{asset('images/pen-tool.svg')}}" alt=""> -->
                            Price
                        </label>
                        <input name="price" id="name" class="input-email" type="text" placeholder="Price" value="{{old('price')}}">
                        
                        <label for="status" class="text-password">
                            Status
                        </label>
                        <select class="input-email" id="status" name ="status">
                            <option value="Published">Đang nhận khách</option>
                            <option value="Private">No</option>
                        </select>
                    
                        @if($errors)
                        @foreach($errors->all() as $error)
                        <span class="alert-err">{{$error}}</span>
                        @endforeach
                        @endif
                        <div class="signin">
                            <div class="btn"><input class="btn-signin" type="submit" value="Add" ></div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection