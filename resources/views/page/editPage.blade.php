@extends('layouts.layout')

@include('base')

@section('content')
    <div class="con">
        <div class="container">
            <div class="content">
                <h2 class="txt createpage">Edit Page</h2>
                <div class="form-login">
                    <form action="{{url('/edit/'.$page->id)}}" method="POST">
                        @csrf
                        <label for="name" class="text-email">
                            <img class="icon icon-mail" src="{{asset('images/pen-tool.svg')}}" alt="">
                            Title
                        </label>
                        <input name="title" id="name" class="input-email" type="text" placeholder="Title" value="{{$page->title}}">
                        <label for="email" class="text-password">
                            Status
                        </label>
                        <select class="input-email" id="status" name ="status">
                            <option value="Published">Published</option>
                            <option value="Private">Private</option>
                        </select>
                        <label for="password" class="text-password">
                            <img class="icon icon-mail" src="{{asset('images/users.svg')}}" alt="">
                            Author
                        </label>
                        <input name="author" id="password" class="input-email" type="text" placeholder="Author" value="{{$page->author}}">
                        @if($errors)
                        @foreach($errors->all() as $error)
                            <span class="alert-err">{{$error}}</span>
                        @endforeach
                        @endif
                        <div class="signin">
                            <div class="btn"><input class="btn-signin" type="submit" value="Edit" ></div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection