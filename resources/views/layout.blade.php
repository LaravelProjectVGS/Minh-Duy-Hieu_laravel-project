<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create_view</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.0/css/all.min.css">

</head>
<body>
    <div class="header">
        <div class="containerr">
            <div class="h-logo">
                <div class="logo">
                    <img src="./images/Group.svg" alt="" class="group">
                </div>
                <div class="text">TTT <span style="color: rgb(99 179 237); font-weight: 500;">CMS</span></div>
            </div>
            <div class="h-pro">
                <div class="pro-plan"><span class="pro-plan-text">Pro plan</span></div>
                <div class="mask"></div>
            </div>
        </div>
        <div class="menu-reponsive" id="menu">
            <label for="html" class="mn"><i class="fa-solid fa-bars"></i></label>
            <input type="checkbox" id="html" hidden name="fav_language" class="check">
            <label for="html" class="menu-label"><i class="fa-solid fa-xmark" id="close"></i></label><br>
            <div class="nav-vertical-re" id="nav-show">
                <ul class="nav-menu">
                    <li class="nav-item q">
                        <a href="#" class="nav-link manager">Manage</a>
                    </li>
                    <li class="nav-item">
                        <a href="#" class="nav-link dot"><img src="{{asset('images/home.svg')}}" alt=""> View site</a>
                    </li>
                    <li class="nav-item">
                        <a href="#" class="nav-link dot"><img src="{{asset('images/file-plus.svg')}}" alt="">Create page</a>
                    </li>
                    <li class="nav-item">
                        <a href="#" class="nav-link dot"><img src="{{asset('images/pen-tool.svg')}}" alt="">Blog articles</a>
                    </li>
                    <li class="nav-item">
                        <a href="#" class="nav-link dot"><img src="{{asset('images/image.svg')}}" alt="">Files</a>
                    </li>
                    <li class="nav-item">
                        <a href="#" class="nav-link dot"><img src="{{asset('images/users.svg')}}" alt="">Users</a>
                    </li>
                    <li class="nav-item">
                        <a href="#" class="nav-link dot"><img src="{{asset('images/zap.svg')}}" alt="">Subscriptions</a>
                    </li>
                    <li class="nav-item">
                        <a href="#" class="nav-link dot"><img src="{{asset('images/trash-2.svg')}}" alt="">Archived pages</a>
                    </li>
                    <li class="nav-item">
                        <a href="#" class="nav-link pro">Pro features</a>
                    </li>
                    <li class="nav-item">
                        <a href="#" class="nav-link dot"><img src="{{asset('images/book-open.svg')}}" alt="">Themes</a>
                    </li>
                    <li class="nav-item">
                        <a href="#" class="nav-link dot"><img src="{{asset('images/box.svg')}}" alt="">Plugins</a>
                    </li>
                    <li class="nav-item">
                        <a href="#" class="nav-link dot"><img src="{{asset('images/coffee.svg')}}" alt="">Upgrade plans</a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
    <div class="body">
        @include('components.slide')
        @yield('content')
        
        </div>
    </div>
    <script src="./js/index.js"></script>
</body>
</html>