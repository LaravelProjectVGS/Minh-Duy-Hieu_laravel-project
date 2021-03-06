<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.0/css/all.min.css"
        integrity="sha512-10/jx2EXwxxWqCLX/hHth/vu2KY3jCF70dCQB8TSgNjbCVAC/8vai53GfMDrO2Emgwccf2pJqxct9ehpzG+MTw=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;500&family=Roboto:wght@400;700;900&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/blog.css') }}">

    <title>Document</title>
</head>

<body>
    @include('components.blog_components.header_blog')
    <div class="body wrapper">
        @include('components.blog_components.menu_blog')

        @yield('body-right')
    </div>

</body>
<script src="app.js"></script>

</html>
