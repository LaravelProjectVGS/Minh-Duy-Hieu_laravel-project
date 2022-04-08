@section('base')
    <div class="header">
        <a href="{{url('/')}}" class="containerr">
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
        </a>
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
    <div class="c">
        <div class="nav-vertical">
            <ul class="nav-menu">
                <li class="nav-item">
                    <a href="#" class="nav-link manager">Manage</a>
                </li>
                <li class="nav-item">
                    <a href="#" class="nav-link dot"><img src="{{asset('images/home.svg')}}" alt=""> View site</a>
                </li>
                <li class="nav-item">
                    <a href="{{url('google.com')}}" class="nav-link dot"><img src="{{asset('images/file-plus.svg')}}" alt="">Create page</a>
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
@endsection