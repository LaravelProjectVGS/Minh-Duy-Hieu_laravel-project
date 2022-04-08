<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="{{asset('css/login.css')}}">
</head>

<body>
    <div class="container" id="demo">
        <h2 class="text">TTT &nbsp; <span style="color: rgb(99 179 237); font-weight: 500;">CMS</span></h2>
        <div class="form-login">
            <form action="" method="">
                @csrf
                <label for="email" class="text-email">
                    <img class="icon icon-mail" src="{{asset('images/mail.svg')}}" alt="">
                    Email address
                </label>
                <input id="email" class="input-email" type="text" placeholder="Email">
                <label for="password" class="text-password">
                    <img class="icon icon-mail" src="{{asset('images/lock.svg')}}" alt="">
                    Password
                </label>
                <input id="password" class="input-email" type="password" placeholder="Password">
                <div class="signin">
                    <a class="forgot" href="#">Forgot password?</a>
                    <div class="btn"><input class="btn-signin" type="button" value="Sign in"></div>
                </div>
                <div class="register">
                    <a href="{{url('/register')}}"><input class="btn-register" type="button" value="Don’t have & account?"></a>
                </div>
            </form>
        </div>
    </div>
    <script src="./js/index.js"></script>
</body>

</html>