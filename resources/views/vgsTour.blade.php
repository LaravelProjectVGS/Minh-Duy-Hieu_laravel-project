<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>VGS Tour</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
    </script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css"
        integrity="sha512-9usAa10IRO0HhonpyAIVpjrylPvoDwiPUiKdWk5t3PyolY1cOd4DSE0Ga+ri4AuTroPR5aQvXU9xC6qOPnzFeg=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css" />
    <link rel="stylesheet" href="{{asset('css/vgsTour.css')}}">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
</head>

<body>
    <header class="p-0">
        <div class="container-xxl">
            <div class="truoc">
                <div class="logo">
                    <img src="https://vgstravel.com/frontend/landing/images/Logo_VGSTravel1%201.png" alt="">
                </div>
                <div class="menu">
                    <nav class="navbar navbar-expand-lg navbar-dark bg-white p-0"
                        style="display: flex; justify-content: center;">
                        <div class="posi">
                            <div class="" id="main_nav">
                                <ul class="navbar-nav">
                                    <li class="nav-item dropdown">
                                        <a class="nav-link dropdown-toggle pb-0" href="#" id="navbarDropdownMenuLink"
                                            role="button" data-bs-toggle="" aria-expanded="false" style="margin-top: 21px;
                                            height: 57px;">
                                            Tour Golf Quốc Tế
                                        </a>
                                        <ul class="dropdown-menu active-border" aria-labelledby="navbarDropdownMenuLink">
                                            <li><a class="dropdown-item" href="#">Tour golf Châu Âu</a></li>
                                            <li><a class="dropdown-item" href="#">Tour golf Châu Úc</a></li>
                                            <li><a class="dropdown-item" href="#">Tour golf Châu Phi</a></li>
                                            <li><a class="dropdown-item" href="#">Tour golf Châu Mỹ</a></li>
                                            <li><a class="dropdown-item" href="#">Tour golf Châu Á</a></li>
                                            <li><a class="dropdown-item" href="#">EVGA Tour</a></li>
                                        </ul>
                                    </li>
                                    <li class="nav-item dropdown">
                                        <a class="nav-link pb-0" href="#" id="navbarDropdownMenuLink" role="button"
                                            data-bs-toggle="dropdown" aria-expanded="false" style="margin-top: 21px;
                                            height: 57px;">
                                            Tour Golf Trong Nước
                                        </a>
                                    </li>
                                    <li class="nav-item dropdown">
                                        <a class="nav-link dropdown-toggle pb-0" href="#" id="navbarDropdownMenuLink"
                                            role="button" data-bs-toggle="dropdown" aria-expanded="false" style="margin-top: 21px;
                                            height: 57px;">
                                            Điểm đến golf
                                        </a>
                                        <ul class="dropdown-menu active-border" aria-labelledby="navbarDropdownMenuLink">
                                            <li><a class="dropdown-item" href="#">Châu Âu</a></li>
                                            <li><a class="dropdown-item" href="#">Châu Úc</a></li>
                                            <li><a class="dropdown-item" href="#">Châu Phi</a></li>
                                            <li><a class="dropdown-item" href="#">Châu Mỹ</a></li>
                                            <li><a class="dropdown-item" href="#">Châu Á</a></li>
                                        </ul>
                                    </li>
                                    <li class="nav-item dropdown">
                                        <a class="nav-link dropdown-toggle pb-0" href="#" id="navbarDropdownMenuLink"
                                            role="button" data-bs-toggle="dropdown" aria-expanded="false" style="margin-top: 21px;
                                            height: 57px;">
                                            Dịch Vụ & Tiện Ích
                                        </a>
                                        <ul class="dropdown-menu active-border" aria-labelledby="navbarDropdownMenuLink">
                                            <li><a class="dropdown-item" href="#">Vé máy bay</a></li>
                                            <li><a class="dropdown-item" href="#">Xe & du thuyền</a></li>
                                        </ul>
                                    </li>
                                    <li class="nav-item dropdown">
                                        <a class="nav-link dropdown-toggle pb-0" href="#" id="navbarDropdownMenuLink"
                                            role="button" data-bs-toggle="dropdown" aria-expanded="false" style="margin-top: 21px;
                                            height: 57px;">
                                            Kinh Nghiệm & Trải Nghiệm
                                        </a>
                                        <ul class="dropdown-menu active-border" aria-labelledby="navbarDropdownMenuLink">
                                            <li><a class="dropdown-item" href="#">Kinh Nghiệm Du Lịch</a></li>
                                            <li><a class="dropdown-item" href="#">Tin Tức & Sự Kiện</a></li>
                                            <li><a class="dropdown-item" href="#">Xin kinh nghiệm visa</a></li>
                                            <li><a class="dropdown-item" href="#">Trải nghiệm ẩm thực</a></li>
                                        </ul>
                                    </li>
                                    <li class="nav-item dropdown">
                                        <a class="nav-link dropdown-toggle pb-0" href="#" id="navbarDropdownMenuLink"
                                            role="button" data-bs-toggle="dropdown" aria-expanded="false" style="margin-top: 21px;
                                            height: 57px;">
                                            Về Chúng Tôi
                                        </a>
                                        <ul class="dropdown-menu active-border" aria-labelledby="navbarDropdownMenuLink">
                                            <li><a class="dropdown-item" href="#">Liên hệ và hợp tác</a></li>
                                            <li><a class="dropdown-item" href="#">Về chúng tôi</a></li>
                                        </ul>
                                    </li>
                                    <li>

                                    </li>
                                </ul>

                            </div>
                        </div>

                    </nav>
                </div>
                <li class="dropdown" style="list-style: none; padding-right: 50px;">
                    <a class="" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        <img class="viet-nam"
                            src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAARMAAAC3CAMAAAAGjUrGAAAAilBMVEXaJR3//wDZEh7qmRXYAB7ZHR3ZGh3//QDbJhz99AP87gXZEB7++QHbKhzoiBXmfRb0yA3ldhfzww7iYxnwtRDurBH54QjhXhnjbhjdPBvxuQ/eRhvcNRzpkxT42grpjhX20gzjaRjgVRrspBTfTRr76QflehfuqhH43Qn21Av1zAzwtw/rnRPhYBkDKDW4AAAED0lEQVR4nO3d6VbqMBQFYBJOwlAUEZmEgkwq6H3/17tAKXRIoAyu0pP9/RVd7bE7bdMTWioBAAAAAAAAAAAAAAAAAAAAAAAAwNFT3hvweOiV8t6ER6MGYqDy3ogHI8uiLPPeiAdDXfGN8MSokRBihPBESX9TEx/hiaLxpiZjhCeqKraqeW/GI5GTXU0mCM8RrXY1WSE8R0F0EJ4I+byvyTPCE6KPfU0+EJ6QEiFcte3J5qEmTYQnQOtDTdYIT4DEEWqyo5uRmjR13pvzEOglUpMXHChbUkRhkN3QrVhNWgjPdnI6VhNMVW94lVhNKl7eG5Q/3RdxfYQnER2EZ4MqiZpUnK+JnoqkqevhofdUTd5dP1CokapJzfGaqHaqJEK03Z5F8d4MNXlz+xKFaoaauB0eNTOURIiZy+ExRsfx8Bij43Z4LNHhGR4lM6GOpSYdyvYHClQ61ZqXs/DrlprU/Uy/P28VqCj6x7Kz9/VTqDsjmiZvd++vMi3YUCxLqz8uyapavOls8v+0JD4VaCw5oIVtCL1dfVGw3ISUYXLkPl69Ih4kAfr8k5J8FvQgCchR9+4V6Y4KfjukaH7nknwVcnCNo156evF6jV6hcxPSen1+XzNa60Jdup5Az+f3NpMJi4Mk4A2Xd6jIcljwwTVOkXlG7RI/DAbXOOrfdldY6TPKTUhWxzeUZPxUvDu+DBSVry7JL7vchGhmnpM+pzZjmJuQ9pLdJlm8SC4XJWbUPF+DhCbjgyTgDS67K+wOWF2UmCnrEwyTDtvBNY7aWYfaWtGmoa+X6uuzcajfT2eODu8TToTOPiP56UpRYgsxTnNmmYaXuSRCOHAi3kosxDjNkWUamc86W46ceVLd5Ke40WmeWohxmhPLNC58YOpEp7mhm/yUhgM1MSzEOM2BZRoX9xo4EJ4Lo+NCeFTPejzYftDjPoNi6SYXtQUtLLMq7DvNLd3kr54uKcsENvdOc0t09tPQlgls5uHxTHOxx8Yjz9jW1OEdHjK0QkYbjxR9pT9QZx0ew0KMRju+x/QvfbLmuEzjwEsdBR8qeZmqVaqt6YtzeFLR8U2xoIlD4VHDxL5aGo+8YaJ2Q77h8eJ9oe/WZ3zJDuw53/BQrKutdSoRFJu0XbINTyw632caj2T124XweL+RNJx9Nq4o8vFfruGhw0VqtsajSFtTl2l41CDcw6yNR1oenhgyfSGADFv8nrP/0w8d2ExfCLCPzvKixiNvsGQcnt3X+gvxdmHjUdjWxPKFALuv9b+mGzpYl8vyhQC0ud4Yq2v2TOqVYPk2jW10ytc27G3X5TIMjyw3blj/SosGwzOP9vUt/2i1+f27bcvDuHWXGJYEAAAAAAAAAAAAAAAAAAAAAAAAAAAAAACAmf/IgiyXNAAkFQAAAABJRU5ErkJggg=="
                            alt="">
                    </a>
                    <ul class="dropdown-menu languages" aria-labelledby="navbarDropdown">
                        <li><a class="dropdown-item" href="#">
                                <img class=""
                                    src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAARMAAAC3CAMAAAAGjUrGAAAAilBMVEXaJR3//wDZEh7qmRXYAB7ZHR3ZGh3//QDbJhz99AP87gXZEB7++QHbKhzoiBXmfRb0yA3ldhfzww7iYxnwtRDurBH54QjhXhnjbhjdPBvxuQ/eRhvcNRzpkxT42grpjhX20gzjaRjgVRrspBTfTRr76QflehfuqhH43Qn21Av1zAzwtw/rnRPhYBkDKDW4AAAED0lEQVR4nO3d6VbqMBQFYBJOwlAUEZmEgkwq6H3/17tAKXRIoAyu0pP9/RVd7bE7bdMTWioBAAAAAAAAAAAAAAAAAAAAAAAAwNFT3hvweOiV8t6ER6MGYqDy3ogHI8uiLPPeiAdDXfGN8MSokRBihPBESX9TEx/hiaLxpiZjhCeqKraqeW/GI5GTXU0mCM8RrXY1WSE8R0F0EJ4I+byvyTPCE6KPfU0+EJ6QEiFcte3J5qEmTYQnQOtDTdYIT4DEEWqyo5uRmjR13pvzEOglUpMXHChbUkRhkN3QrVhNWgjPdnI6VhNMVW94lVhNKl7eG5Q/3RdxfYQnER2EZ4MqiZpUnK+JnoqkqevhofdUTd5dP1CokapJzfGaqHaqJEK03Z5F8d4MNXlz+xKFaoaauB0eNTOURIiZy+ExRsfx8Bij43Z4LNHhGR4lM6GOpSYdyvYHClQ61ZqXs/DrlprU/Uy/P28VqCj6x7Kz9/VTqDsjmiZvd++vMi3YUCxLqz8uyapavOls8v+0JD4VaCw5oIVtCL1dfVGw3ISUYXLkPl69Ih4kAfr8k5J8FvQgCchR9+4V6Y4KfjukaH7nknwVcnCNo156evF6jV6hcxPSen1+XzNa60Jdup5Az+f3NpMJi4Mk4A2Xd6jIcljwwTVOkXlG7RI/DAbXOOrfdldY6TPKTUhWxzeUZPxUvDu+DBSVry7JL7vchGhmnpM+pzZjmJuQ9pLdJlm8SC4XJWbUPF+DhCbjgyTgDS67K+wOWF2UmCnrEwyTDtvBNY7aWYfaWtGmoa+X6uuzcajfT2eODu8TToTOPiP56UpRYgsxTnNmmYaXuSRCOHAi3kosxDjNkWUamc86W46ceVLd5Ke40WmeWohxmhPLNC58YOpEp7mhm/yUhgM1MSzEOM2BZRoX9xo4EJ4Lo+NCeFTPejzYftDjPoNi6SYXtQUtLLMq7DvNLd3kr54uKcsENvdOc0t09tPQlgls5uHxTHOxx8Yjz9jW1OEdHjK0QkYbjxR9pT9QZx0ew0KMRju+x/QvfbLmuEzjwEsdBR8qeZmqVaqt6YtzeFLR8U2xoIlD4VHDxL5aGo+8YaJ2Q77h8eJ9oe/WZ3zJDuw53/BQrKutdSoRFJu0XbINTyw632caj2T124XweL+RNJx9Nq4o8vFfruGhw0VqtsajSFtTl2l41CDcw6yNR1oenhgyfSGADFv8nrP/0w8d2ExfCLCPzvKixiNvsGQcnt3X+gvxdmHjUdjWxPKFALuv9b+mGzpYl8vyhQC0ud4Yq2v2TOqVYPk2jW10ytc27G3X5TIMjyw3blj/SosGwzOP9vUt/2i1+f27bcvDuHWXGJYEAAAAAAAAAAAAAAAAAAAAAAAAAAAAAACAmf/IgiyXNAAkFQAAAABJRU5ErkJggg=="
                                    alt="">
                                <p>Tiếng Việt</p>
                            </a></li>
                        <li><a class="dropdown-item" href="#">
                                <img class=""
                                    src="data:image/png;base64,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"
                                    alt="">
                                <p>Enghlish</p>
                            </a></li>
                        <li><a class="dropdown-item" href="#">
                                <img class=""
                                    src="data:image/png;base64,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"
                                    alt="">
                                <p>Spanish</p>
                            </a></li>
                        <li><a class="dropdown-item" href="#">
                                <img class=""
                                    src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQXroB85ucKzXmDouz51947yTwCf2pzAntgmw&usqp=CAU"
                                    alt="">
                                <p>French</p>
                            </a></li>
                        <li><a class="dropdown-item" href="#">
                                <img class=""
                                    src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAARMAAAC3CAMAAAAGjUrGAAAAolBMVEX///+8AC28AC66ACO7ACm5AB+7ACi5ABy7ACb//f65ACG5AB64ABffmqW5ABu2AAi2AAD88fT+9/ny0djlnq62AA/rsb/23+TmrrjqtsH0ztfvv8vBJUDrusT45OnkprHglaPQWHDHKUzahJPMWmrSX3XBHDzVeIfIPljJSF69GDTMUGbDLEfGOFDIQFjVcYLei5zIM1HSa3z1197BADfmorKWYp7nAAAE7ElEQVR4nO3daXOqShAG4LCKiCgoLrigSVxQ1OQY//9fu6LXExOOUXSWavI+qcpnpmuY6e4BfHoCAAAAAAAAAAAAAAAAAAAAAAAAgJTfDnvdVqvV7YVtT/bFyOa1G6Pxs+nUPjnW83jU+K2h8Vovr33bqWi6klL3fyldqzh2//WlNZR9gYKVh52J4pT+D0eWrpUcfRwNy7IvVJzwpR9ULsXjb1wqwXTW+x1R8Ttz0zCvBOTINKxV5Mu+YO78KHbsmwJypAXrqNgLbnkQl7QcETlExV13CnwHNSb1PHPkb1Tq41D2pXPijxbGHRFJGcpbIW+gRhxc22ou04N5Q/YA2Ov2S3dH5DBVFpHsITDmb+q3bb8/TJX6pFD3jzdxH4xIyl0WKN9vT1mERFEqSmEWlUZy737zndbvyR4MG2HuNO0yyylEUMK+pjKLiWJNB7IH9Li2ym6WHIJikV9ThiuD4SzZU7VkK3tQj/GXFaYRSYNirGm3DzYB65DsORPKdXLEdi05MaqyB3a/hnF/1fcTPSC7I/sxq1ztO21FtfR5cTiFZF/6zGguKY0Fnzsnpes0O2/vzLfhM1qf4kTp8rtzUg7BFtNwbXGNiZm0ZQ8xt4jvNNlPlDfZQ8yrrD7aa7xG16il+M0629IvSw2ITRTvlU9Wf85a02rPDu4578ur1JE9zFzGPHOTE3sue5h5eDxaBFl1St2lXU1ESNRgJHugt/OX/FfYlBXTKY8bfX7V3zldoVMJdh47Lr+dS6bhVp6J2HVSBpnOrP/Mt/z7ZH5Qye/bYnbiVEDlACwSFhM6Nc+Md5vgU2kie7A3GvNq12dpMY1F1ufcYTtnJjRq42EiJmNL6QsaJQ/PM4xsUGicCPYEhkTRurKHe5OumALwyKDRV+qI23YUpULjmCcSVe0cYkKjCqyKqopTJcQEMSlOTLCeZGHfyeqKK3fI5CfIY7NC1DsZYutiGs1Hb4X+SQb6bFkbcf3YCpV+7E7gWQaVvv1WXExqVA6M/T7OAb8rb0RVPPaYyBK7r3hExYTOcwXiOveE3kTwYkHPKa3pPKf01Ax4PzGconOCnhriucespYj0XnuXPcxchOw8Lo0e24kX80/bzBWRmvhkVOP/XsaL7EHm5Ovc399xCW3ER1Xu73lRmybpBy34rih6n9RGfNTh/N5oU/YA75HwfK9Jm1LpEnwRKhzfQ9eIfkKI43Oy7h8yjZOvvDWv8lijcoSRFTqc7p460TsnVeWzzBqUegTflSccmgaqsyS555x4a/ZNAy0hl9R/tU1YfsUvZU1pHJv/oGGxzfGtEo2nK340WLAMirmg8WDSFQOHXVDMoCV7OGz0pozWFNUqxixJhQqb3ce2C7CWnLRjFs8RV9YEWyaXeZP6o2m+Xi/SJ7oPmovH8nxNGREthX8QJg/8DoISFOXr3F95b/q9U8W2ZsTz+Yt6y/o9qYpVmxPuDVxTjlalvFGx3FW1eCvJOa+aBHm6b5aTjIq23WTto6LZt622um0kxfzhnQy/+0cNrn+W2Q6USYt09ygXf1iNbcewLsbFMhxjPmr/nogcbXezWHVc+3DWrh6KxPSfbmquq643O/Kdo7uUh9vBZv7hBLVaLUgdfnD0433T3f6mX5D8F38YDlq7ZrO5i7rhr7tdAAAAAAAAAAAAAAAAAAAAAAAAAC74D9VqX/QxeHN3AAAAAElFTkSuQmCC"
                                    alt="">
                                <p>Japanese</p>
                            </a></li>
                    </ul>
                </li>

            </div>
        </div>
        <!-- menu responsive -->
        <nav class="navbar navbar-light bg-white fixed-top sau" style="border-bottom: 2px solid #c3a30b;">
            <div class="container-fluid">
                <img class="viet-nam"
                    src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAARMAAAC3CAMAAAAGjUrGAAAAilBMVEXaJR3//wDZEh7qmRXYAB7ZHR3ZGh3//QDbJhz99AP87gXZEB7++QHbKhzoiBXmfRb0yA3ldhfzww7iYxnwtRDurBH54QjhXhnjbhjdPBvxuQ/eRhvcNRzpkxT42grpjhX20gzjaRjgVRrspBTfTRr76QflehfuqhH43Qn21Av1zAzwtw/rnRPhYBkDKDW4AAAED0lEQVR4nO3d6VbqMBQFYBJOwlAUEZmEgkwq6H3/17tAKXRIoAyu0pP9/RVd7bE7bdMTWioBAAAAAAAAAAAAAAAAAAAAAAAAwNFT3hvweOiV8t6ER6MGYqDy3ogHI8uiLPPeiAdDXfGN8MSokRBihPBESX9TEx/hiaLxpiZjhCeqKraqeW/GI5GTXU0mCM8RrXY1WSE8R0F0EJ4I+byvyTPCE6KPfU0+EJ6QEiFcte3J5qEmTYQnQOtDTdYIT4DEEWqyo5uRmjR13pvzEOglUpMXHChbUkRhkN3QrVhNWgjPdnI6VhNMVW94lVhNKl7eG5Q/3RdxfYQnER2EZ4MqiZpUnK+JnoqkqevhofdUTd5dP1CokapJzfGaqHaqJEK03Z5F8d4MNXlz+xKFaoaauB0eNTOURIiZy+ExRsfx8Bij43Z4LNHhGR4lM6GOpSYdyvYHClQ61ZqXs/DrlprU/Uy/P28VqCj6x7Kz9/VTqDsjmiZvd++vMi3YUCxLqz8uyapavOls8v+0JD4VaCw5oIVtCL1dfVGw3ISUYXLkPl69Ih4kAfr8k5J8FvQgCchR9+4V6Y4KfjukaH7nknwVcnCNo156evF6jV6hcxPSen1+XzNa60Jdup5Az+f3NpMJi4Mk4A2Xd6jIcljwwTVOkXlG7RI/DAbXOOrfdldY6TPKTUhWxzeUZPxUvDu+DBSVry7JL7vchGhmnpM+pzZjmJuQ9pLdJlm8SC4XJWbUPF+DhCbjgyTgDS67K+wOWF2UmCnrEwyTDtvBNY7aWYfaWtGmoa+X6uuzcajfT2eODu8TToTOPiP56UpRYgsxTnNmmYaXuSRCOHAi3kosxDjNkWUamc86W46ceVLd5Ke40WmeWohxmhPLNC58YOpEp7mhm/yUhgM1MSzEOM2BZRoX9xo4EJ4Lo+NCeFTPejzYftDjPoNi6SYXtQUtLLMq7DvNLd3kr54uKcsENvdOc0t09tPQlgls5uHxTHOxx8Yjz9jW1OEdHjK0QkYbjxR9pT9QZx0ew0KMRju+x/QvfbLmuEzjwEsdBR8qeZmqVaqt6YtzeFLR8U2xoIlD4VHDxL5aGo+8YaJ2Q77h8eJ9oe/WZ3zJDuw53/BQrKutdSoRFJu0XbINTyw632caj2T124XweL+RNJx9Nq4o8vFfruGhw0VqtsajSFtTl2l41CDcw6yNR1oenhgyfSGADFv8nrP/0w8d2ExfCLCPzvKixiNvsGQcnt3X+gvxdmHjUdjWxPKFALuv9b+mGzpYl8vyhQC0ud4Yq2v2TOqVYPk2jW10ytc27G3X5TIMjyw3blj/SosGwzOP9vUt/2i1+f27bcvDuHWXGJYEAAAAAAAAAAAAAAAAAAAAAAAAAAAAAACAmf/IgiyXNAAkFQAAAABJRU5ErkJggg=="
                    alt="" style="position: absolute; left: 50%;">
                <a class="navbar-brand" href="#">
                    <div class="logo">
                        <img src="https://vgstravel.com/frontend/landing/images/Logo_VGSTravel1%201.png" alt="">
                    </div>
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas"
                    data-bs-target="#offcanvasNavbar" aria-controls="offcanvasNavbar">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasNavbar"
                    aria-labelledby="offcanvasNavbarLabel">
                    <div class="offcanvas-header">
                        <h5 class="offcanvas-title" id="offcanvasNavbarLabel"></h5>
                        <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas"
                            aria-label="Close"></button>
                    </div>
                    <div class="offcanvas-body">
                        <ul class="navbar-nav justify-content-end flex-grow-3 pe-3">
                            <li class="nav-item dropdown">
                                <a class="nav-link liMenuRespon" href="#" id="offcanvasNavbarDropdown" role="button"
                                    data-bs-toggle="dropdown" aria-expanded="false">
                                    Tour Golf Quốc Tế
                                    <i class="fa-solid fa-angle-down"></i>
                                </a>
                                <ul class="dropdown-menu" aria-labelledby="offcanvasNavbarDropdown">
                                    <li><a class="dropdown-item" href="#">Tour golf Châu Âu</a></li>
                                    <li><a class="dropdown-item" href="#">Tour golf Châu Úc</a></li>
                                    <li><a class="dropdown-item" href="#">Tour golf Châu Phi</a></li>
                                    <li><a class="dropdown-item" href="#">Tour golf Châu Mỹ</a></li>
                                    <li><a class="dropdown-item" href="#">Tour golf Châu Á</a></li>
                                    <li><a class="dropdown-item" href="#">EVGA Tour</a></li>
                                </ul>
                            </li>
                            <li class="nav-item dropdown">
                                <a class="nav-link liMenuRespon" href="#" id="offcanvasNavbarDropdown" role="button"
                                    data-bs-toggle="dropdown" aria-expanded="false">
                                    Tour Golf Trong Nước
                                    <i class="fa-solid fa-angle-down" style="display: none;"></i>
                                </a>
                            </li>
                            <li class="nav-item dropdown">
                                <a class="nav-link liMenuRespon" href="#" id="offcanvasNavbarDropdown" role="button"
                                    data-bs-toggle="dropdown" aria-expanded="false">
                                    Điểm đến golf
                                    <i class="fa-solid fa-angle-down"></i>
                                </a>
                                <ul class="dropdown-menu" aria-labelledby="offcanvasNavbarDropdown">
                                    <li><a class="dropdown-item" href="#">Châu Âu</a></li>
                                    <li><a class="dropdown-item" href="#">Châu Úc</a></li>
                                    <li><a class="dropdown-item" href="#">Châu Phi</a></li>
                                    <li><a class="dropdown-item" href="#">Châu Mỹ</a></li>
                                    <li><a class="dropdown-item" href="#">Châu Á</a></li>
                                </ul>
                            </li>
                            <li class="nav-item dropdown">
                                <a class="nav-link liMenuRespon" href="#" id="offcanvasNavbarDropdown" role="button"
                                    data-bs-toggle="dropdown" aria-expanded="false">
                                    Dịch Vụ & Tiện Ích
                                    <i class="fa-solid fa-angle-down"></i>
                                </a>
                                <ul class="dropdown-menu" aria-labelledby="offcanvasNavbarDropdown">
                                    <li><a class="dropdown-item" href="#">Vé máy bay</a></li>
                                    <li><a class="dropdown-item" href="#">Xe & du thuyền</a></li>
                                </ul>
                            </li>
                            <li class="nav-item dropdown">
                                <a class="nav-link liMenuRespon" href="#" id="offcanvasNavbarDropdown" role="button"
                                    data-bs-toggle="dropdown" aria-expanded="false">
                                    Kinh Nghiệm & Trải Nghiệm
                                    <i class="fa-solid fa-angle-down"></i>
                                </a>
                                <ul class="dropdown-menu" aria-labelledby="offcanvasNavbarDropdown">
                                    <li><a class="dropdown-item" href="#">Kinh Nghiệm Du Lịch</a></li>
                                    <li><a class="dropdown-item" href="#">Tin Tức & Sự Kiện</a></li>
                                    <li><a class="dropdown-item" href="#">Xin kinh nghiệm visa</a></li>
                                    <li><a class="dropdown-item" href="#">Trải nghiệm ẩm thực</a></li>
                                </ul>
                            </li>
                            <li class="nav-item dropdown">
                                <a class="nav-link liMenuRespon" href="#" id="offcanvasNavbarDropdown" role="button"
                                    data-bs-toggle="dropdown" aria-expanded="false">
                                    Về Chúng Tôi
                                    <i class="fa-solid fa-angle-down"></i>
                                </a>
                                <ul class="dropdown-menu" aria-labelledby="offcanvasNavbarDropdown">
                                    <li><a class="dropdown-item" href="#">Liên hệ và hợp tác</a></li>
                                    <li><a class="dropdown-item" href="#">Về chúng tôi</a></li>
                                </ul>
                            </li>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </nav>
    </header>
    <div class="container-fluid slider">
        <div class="img-slider img1">
            <img src="https://www.vgstravel.com/img/tour/28-10-2021/origin/origin-841500-1635403874-27-01.jpg" alt="">
        </div>
        <div class="img-slider img2">
            <img src="https://www.vgstravel.com/img/tour/28-10-2021/origin/origin-56483-1635403874-27-02.jpg" alt="">
        </div>
        <div class="img-slider img3">
            <img src="https://www.vgstravel.com/img/tour/28-10-2021/origin/origin-411579-1635403874-27-carnoustie-golf-links-1.jpg" alt="">
        </div>
    </div>
    <div class="container-xxl">
        <div class="body">
            <div class="menu-tour">
                <nav>
                    <ul>
                        <li><a href="#">TRANG CHỦ</a></li>
                        <li><a href="#">TOUR GOLF CHÂU ÂU</a></li>
                        <li><a href="#">Tour golf UK - Scotland: từ "Xứ sở sương mù" tới "Quê hương của golf"</a></li>
                    </ul>
                </nav>
            </div>

            <div class="post">
                <h3 class="post-title">Tour golf UK - Scotland: từ "Xứ sở sương mù" tới "Quê hương của golf"</h3>
                <div class="post-des">
                    <div class="post-txt">
                        <p>Là một trong những địa điểm du lịch được yêu thích nhất châu Âu, nước Anh níu giữ du khách bởi vẻ đẹp lãng mạn và sự pha trộn hài hòa giữa nét cổ kính và vẻ hiện đại rất riêng. Dừng chân tại Anh, du khách có cơ hội được chiêm ngưỡng những công trình kiến trúc lịch sử độc đáo, ghé thăm những sân vận động bóng đá đẳng cấp thế giới, trải nghiệm mua sắm tại những khu phố và trung tâm mua sắm sầm uất với đa dạng các mặt hàng, và đặc biệt đây sẽ là điểm dừng chân lý tưởng cho các golfer thỏa mãn đam mê của mình. Các sân gôn ở nước Anh nổi bật bởi chất lượng đẳng cấp thế giới, thiết kế độc đáo với địa hình đa dạng. Hành trình du lịch golf Anh - Scotland còn đưa du khách đến với "hòn đảo sương mù" Scotland hay được biết đến là quê hương của golf. Sở hữu những sân golf đẳng cấp nổi tiếng lâu đời nhất thể giới nơi đây hứa hẹn sẽ đem lại những trải nghiệm đặc sắc, lý thú cho bất kỳ người chơi nào. </p>
                    </div>
                    <div class="post-img">
                        <img src="https://www.vgstravel.com/img/tour/23-10-2021/origin/origin-378685-1634984900-27-Hand-Luggage-Only-12.jpg" alt="">
                    </div>
                </div>
            </div>

            <div class="chuyendulich">
                <div class="item-dulich">
                    <span>Chuyến du lịch</span>
                </div>
            </div>

            <div id="detail" class="detail">
                <div id="detail-des" class="detail-des">
                    <div class="detail-title">
                        <span>Ngày chi tiết khởi hành</span>
                    </div>
                    <div class="detail-text-img">
                        <h4><span>Ngày 1: Khởi hành bay từ sân bay Nội Bài/ Tân Sơn Nhất - Edinburgh</span></h4>
                        <p><span>Đoàn làm thủ tục bay chuyến Hà Nội/ Thành phố Hồ Chí Minh - Edinburgh.</span></p>

                        <h4><span>Ngày 2: HN/SG - Edinburgh</span></h4>
                        <p><span>Hạ cánh tại sân bay Edinburgh. HDV đón đoàn tại sân bay, di chuyển đến khách sạn nhận phòng và nghỉ ngơi sau chuyến bay.</span></p>
                    
                        <p><span>Đoàn ăn tối tại nhà hàng .</span></p>

                        <h4><span>Ngày 3: Golf tại sân Kingsbarns Links</span></h4>
                        <p><span>Ăn sáng tại khách sạn. Đoàn di chuyển đến chơi golf sân Kingsbarns Links, nơi đăng cai giải Dunhill Cup.</span></p>

                        <p><span>
                            <img src="https://cms.vgstravel.com/images/post/images/Tour/kingbarns%20(4).jpg" alt="">
                        </span></p>
                        <p>Mua sắm và tham quan St Andrews.</p>
                        <h4><span>Ngày 4: Golf tại sân Carnoustie Links Course</span></h4>
                        <p><span>Chơi golf tại sân Carnoustie Links Course, nơi đăng cai tổ chức giải vô địch Anh mở rộng và giải nữ Anh mở rộng.</span></p>
                        <p><span>
                            <img src="https://cms.vgstravel.com/images/post/images/Tour/carnoustie.jpg" alt="">
                        </span></p>

                        <h4><span>Ngày 5: Golf tại sân PGA Centenary</span></h4>
                        <p><span>Xe đón đoàn di chuyển đến chơi golf tại sân PGA Centenary Golf Course do Jack Nicklaus thiết kế, địa điểm từng đăng cai Ryder Cup, Solheim Cup và Scottish Open.</span></p>
                        <p><span>
                            <img src="https://cms.vgstravel.com/images/post/images/Tour/PGA%20Centenary.png" alt="">
                        </span></p>

                        <h4><span>Ngày 6: Golf tại sân Fairmont St Andrews</span></h4>
                        <p><span>Đoàn chơi golf tại sân Fairmont St Andrews, nơi tổ chức Giải Scottish Golf Championship và là một trong những sân golf hàng đầu thế giới.</span></p>
                        <p><span>
                            <img src="https://cms.vgstravel.com/images/post/images/Tour/Fairmont%20golf%20course.png" alt="">
                        </span></p>

                        <h4><span>Ngày 6: Golf tại sân Fairmont St Andrews</span></h4>
                        <p><span>Đoàn chơi golf tại sân Fairmont St Andrews, nơi tổ chức Giải Scottish Golf Championship và là một trong những sân golf hàng đầu thế giới.</span></p>
                        <p><span>
                            <img src="https://cms.vgstravel.com/images/post/images/Tour/Fairmont%20golf%20course.png" alt="">
                        </span></p>
                        <p><span>Tham quan Bảo tàng Golf Anh ở St Andrews và khách sạn Old Course với view nhìn ra sân golf huyền thoại the Old Course St Andrews và bãi biển West Sands.</span></p>
                        
                        <h4><span>Ngày 7: Edinburgh - Southport</span></h4>
                        <p><span>Ăn sáng tại khách sạn. Đoàn làm thủ tục trả phòng. Xe đón đoàn đến Sourthport check in khách sạn</span></p>
                        <p><span>Tham quan sân vận động bóng đá nổi tiếng Manchester United.</span></p>
                        <p><span>
                            <img src="https://cms.vgstravel.com/images/post/images/Tour/FCLiverpoolStadiontour.jpg" alt="">
                        </span></p>
                        <p><span>Đoàn ăn tối tại nhà hàng đạt hạng 2 AA Rosettes & 'Top 10 nhà hàng thú vị nhất của The Times' với các món ăn Châu Âu và Quốc tế.</span></p>

                        <h4><span>Ngày 8: Southport - Warwickshire - Golf tại sân Royal Birkdale</span></h4>
                        <p><span>Chơi golf tại Royal Birkdale, nơi đã tổ chức 10 lần giải The Open, 2 lần giải Ryder Cup,6 giải Nữ Anh.</span></p>
                        <p><span>
                            <img src="https://cms.vgstravel.com/images/post/images/Tour/royal%20birkdale%20golf%20club.jpg" alt="">
                        </span></p>
                        <p><span>Mua sắm và tham quan tại Southport.</span></p>

                        <h4><span>Ngày 9: Golf tại sân The Belfry Brabazon Course</span></h4>
                        <p><span>Ăn sáng tại khách sạn. Đoàn làm thủ tục trả phòng.</span></p>
                        <p><span>Xe đón đoàn di chuyển đến chơi golf tại sân The Belfry. Với tổ hợp 3 sân golf vô địch Brabazon, PGA National và Derby, The Belfry từng 4 lần đăng cai giải golf Ryder Cup và là địa điểm thường xuyên của European Tour</span></p>
                        <p><span>Sau bữa trưa,đoàn chơi golf tại sân Ryder Cup Brabazon.</span></p>
                        <p><span>
                            <img src="https://cms.vgstravel.com/images/post/images/Tour/brabazon_image7.jpeg" alt="">
                        </span></p>

                        <h4><span>Ngày 10: Golf tại sân The Belfry PGA National Course</span></h4>
                        <p><span>Chơi golf tại sân The Belfry PGA National Course, từng đăng cai tổ chức các các giải thuộc sự kiện European Tour, được PGA công nhận là sân thi đấu đẳng cấp thế giới và là sân gôn PGA duy nhất ở Anh.</span></p>
                        <p><span>
                            <img src="https://cms.vgstravel.com/images/post/images/Tour/The%20belfry%20-%20PGA%20Nation%20course.png" alt="">
                        </span></p>

                        <h4><span>Ngày 11: Warwickshire - London</span></h4>
                        <p><span>Check out khách sạn. Xe đón đoàn đến Kensington, London.</span></p>
                        <p><span>Trải nghiệm xe buýt 2 tầng tham quan thành phố.</span></p>
                        <p><span>
                            <img src="https://cms.vgstravel.com/images/post/images/Anh/1.jpg" alt="">
                        </span></p>
                        <p><span>Check in khách sạn và nghỉ đêm tại London.</span></p>

                        <h4><span>Ngày 12: Tham quan London</span></h4>
                        <p><span>Đoàn tham quan và mua sắm tại thành phố London.</span></p>
                        <p><span>
                            <img src="https://cms.vgstravel.com/images/post/images/Tour/bigstock-Tower-Bridge-in-London-UK-19482710-4000x3000.jpg" alt="">
                        </span></p>
                        <p><span>Đoàn ăn tối và dự tiệc chia tay.</span></p>

                        <h4><span>Ngày 13: London - Việt Nam</span></h4>
                        <p><span>Trả phòng khách sạn. Đoàn di chuyển đến Sân bay London Heathrow làm thủ tục để đáp chuyến bay về Việt Nam. </span></p>
                        <p><span>Về đến Việt Nam. Kết thúc hành trình.</span></p>
                    
                    </div>
                </div>
                <div id="mucluc" class="detail-mucluc">
                    <div class="title-mucluc">
                        <span>Điểm tham quan chính</span>
                    </div>
                    <ul class="content-mucluc">
                        <li>London</li>
                        <li>Sân Royal Birkdale Golf Club</li>
                        <li>Sân golf The Belfry</li>
                        <li>Cầu tháp London</li>
                        <li>Tháp đồng hồ London</li>
                        <li>Manchester</li>
                        <li>Sân vận động Old Trafford</li>
                        <li>SCOTLAND</li>
                        <li>Sân Carnoustie Golf Resort</li>
                        <li>Sân Kingsbarns Golf Club</li>
                        <li>Sân St. Andrews Old Course</li>
                        <li>Sân Fairmont St Andrews</li>
                        <li>Sân PGA Centenary</li>
                    </ul>
                </div>
            </div>

            <div class="price">
                <div class="text-price">
                    <div ><span class="text-price-title">Quy định giá</span></div>
                    <p><span>VGS Travel thực hiện tour du lịch golf cao cấp, không có bất kỳ điểm mua sắm nào bắt buộc phải ghé qua trong lịch trình.</span></p>
                    <p><span>Nếu quý khách không khởi hành từ thành phố Hồ Chí Minh/ Hà Nội vui lòng liên hệ với chúng tôi để sắp xếp chuyến bay (có phụ thu nếu phát sinh chi phí). </span></p>
                </div>
                <div class="ticket">
                    <h3 class="title-ticket">Tour golf UK - Scotland: từ "Xứ sở sương mù" tới "Quê hương của golf"</h3>
                    <ul class="d-flex row">
                        <li class="col-md-6">
                        <span class="time">Thời gian:</span>
                        <span class="time-detail"> 13Ngày12 Đêm</span>
                        </li>
                        <li class="col-md-6">
                        <span class="status">Tình trạng: <span class="status-detail">Đang nhận khách</span></span>
                        </li>
                    </ul>
                    <ul class="d-flex row">
                        <li class="col-md-6">
                            <span class="pricing-detail">Liên hệ</span>
                        </li>
                        <li class="col-md-6">
                            <p>Ngày khởi hành:
                                <span>2022-05-31</span>
                            </p>
                            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#modal" data-bs-whatever="@mdo">
                                <span class="text css-mkf4c8 text-uppercase">Nhận tư vấn tour</span>
                            </button>

                            <span class="hot-line">HOTLINE : <span class="phone-number">0936.425.552</span></span>
                        </li>
                    </ul>
                    <div class="ngaykhoihanhkhac"><span>Ngày khởi hành khác</span></div>
                </div>
            </div>

            <div class="tab">
                <div class="tabs effect-2">
                    <!-- tab-title -->
                    <input type="radio" id="tab-1" name="tab-effect-2" checked="checked">
                    <span class="tab-title1">Giá tour bao gồm</span>
        
                    <input type="radio" id="tab-2" name="tab-effect-2">
                    <span class="tab-title2">Giá tour không bao gồm</span>
        
                    <input type="radio" id="tab-3" name="tab-effect-2">
                    <span class="tab-title3">Quy định đăng ký tour</span>
        
                    <input type="radio" id="tab-4" name="tab-effect-2">
                    <span class="tab-title4">Lưu ý</span>
                    
                    <!-- tab-content -->
                    <div class="tab-content">
                        <section id="tab-item-1">
                            <ul>
                                <li style="text-align:justify"><span style="color:#000000">Phí chơi golf các trận như trong lịch trình.</span></li>
                                <li style="text-align:justify"><span style="color:#000000">Tiền bồi dưỡng cho HDV &amp; tài xế.</span></li>
                                <li style="text-align:justify"><span style="color:#000000">Thuế sân bay quốc tế hai nước + phí xăng dầu máy bay + thuế an ninh.</span></li>
                                <li style="text-align:justify"><span style="color:#000000">Phương tiện vận chuyển theo chương trình.</span></li>
                                <li style="text-align:justify"><span style="color:#000000">Khách sạn tiêu chuẩn 3* trở lên.</span></li>
                                <li style="text-align:justify"><span style="color:#000000">Các bữa ăn theo chương trình.</span></li>
                                <li style="text-align:justify"><span style="color:#000000">Phí tham quan, phí môi trường tại các điểm tham quan theo chương trình.</span></li>
                                <li style="text-align:justify"><span style="color:#000000">Visa nhập cảnh các nước.</span></li>
                                <li style="text-align:justify"><span style="color:#000000">Trưởng đoàn tiếng Việt theo đoàn suốt hành trình.</span></li>
                                <li style="text-align:justify"><span style="color:#000000">Hướng dẫn viên tiếng Anh tại mỗi điểm đến.</span></li>
                                <li style="text-align:justify"><span style="color:#000000">Quà tặng du lịch từ VGS TRAVEL</span></li>
                                <li style="text-align:justify"><span style="color:#000000">Bảo hiểm du lịch với mức bồi thường cao nhất là 50.000 USD/vụ.</span></li>
                            </ul>
                        </section>
                        <section id="tab-item-2">
                            <ul>
                                <li style="text-align:justify"><span style="color:#000000">Vé máy bay quốc tế và nội địa theo hành trình &amp; hành lý ký gửi</span></li>
                                <li style="text-align:justify"><span style="color:#000000">Chi phí tham quan tự túc.</span></li>
                                <li style="text-align:justify"><span style="color:#000000">Hộ chiếu (thời hạn còn ít nhất 6 tháng).</span></li>
                                <li style="text-align:justify"><span style="color:#000000">Hành lý quá cước qui định, xe vận chuyển ngoài chương trình.</span></li>
                                <li style="text-align:justify"><span style="color:#000000">Điện thoại, giặt ủi, nước uống trong phòng khách sạn.</span></li>
                                <li style="text-align:justify"><span style="color:#000000">Visa tái nhập vào Việt Nam: 1.500.000 VNĐ/khách (dành cho khách mang hộ chiếu quốc tịch nước ngoài không được miễn visa khi nhập cảnh Việt Nam).</span></li>
                                <li style="text-align:justify"><span style="color:#000000">Phụ thu phòng đơn (trường hợp quý khách muốn ngủ riêng hoặc đăng ký lẻ nhưng không thể ghép phòng với khách khác trong đoàn)</span></li>
                            </ul>
                        </section>
                        <section id="tab-item-3">
                            <ul>
                                <li style="text-align:justify">
                                <div><span style="color:#000000">Đặt cọc 50.000.000 VNĐ/khách khi đăng ký tour và thanh toán hết số tiền tour còn lại trước 20 ngày so với ngày khởi hành.</span></div>
                                </li>
                                <li style="text-align:justify">
                                <div><span style="color:#000000"><span style="font-family:'Times New Roman'">Giâ tour áp dung cho đoàn từ 20 - 24 khách. Trong trường hợp quý khách đăng ký theo đoàn ít hơn hoặc nhiều hơn, giá tour sẽ thay đổi phụ thuộc theo số lượng khách trong đoàn.</span></span></div>
                                </li>
                            </ul>
                        </section>
                        <section id="tab-item-4">
                            <ul>
                                <li style="text-align:justify"><span style="color:#000000">VGS TRAVEL hoàn toàn không chịu trách nhiệm và không hoàn tiền các dịch vụ đã đặt.</span></li>
                                <li style="text-align:justify"><span style="color:#000000">Trong trường hợp Quý khách bị từ chối xuất nhập cảnh vì lý do cá nhân, trách nhiệm không thuộc về VGS Travel, không hoàn tiền tour.</span></li>
                                <li style="text-align:justify"><span style="color:#000000">Chương trình có thể thay đổi tùy thuộc lịch bay của hãng hàng không và tình hình khách sạn. Trong những trường hợp bất khả kháng như khủng bố, bạo động, thiên tai hoặc sự thay đổi lịch trình của các phương tiện vận tải công cộng (máy bay, tàu hỏa...) thì VGSTravel giữ quyền thay đổi lộ trình hoặc hủy tour vì sự thuận tiện và an toàn cho khách hàng và sẽ không chịu trách nhiệm bồi thường những thiệt hại phát sinh.</span></li>
                                <li style="text-align:justify"><span style="color:#000000">Các trận golf và điểm tham quan có thể thay đổi thứ tự cho phù hợp với tình hình thực tế nhưng vẫn đảm bảo đầy đủ như lịch trình đã thông báo cho quý khách. Không hoàn tiền các dịch vụ đã đặt (dù không sử dụng).</span></li>
                                <li style="text-align:justify"><span style="color:#000000">Do tính chất là đoàn ghép khách lẻ, Công ty sẽ có trách nhiệm nhận khách cho đủ đoàn (10 khách người lớn trở lên) thì đoàn sẽ khởi hành đúng lịch trình. Nếu số lượng đoàn dưới 10 khách, Công ty sẽ có trách nhiệm thông báo cho khách trước ngày khởi hành chậm nhất 15 ngày và sẽ thỏa thuận lại ngày khởi hành mới, hoặc hoàn trả lại toàn bộ số tiền khách đã đăng ký trước đó.</span></li>
                            </ul>
                        </section>
                    </div>
                </div>
            </div>

            <div class="tour-quan-tam">
                <div class="tour-item">
                    <div class="img"><img src="https://www.vgstravel.com/img/tour/17-11-2021/origin/origin-637060-1637131982-27-3fc9dabbb4dfde1d997f54ab7f9a714d.jpg" alt=""></div>  
                    <div class="tour-des">
                        <div class="title-tour-item">
                            <span>Tour Golf Xuyên Việt 7 Ngày 6 Đêm </span>
                        </div>
                        <div class="day-start">
                            <span>Ngày khởi hành: 2021-12-18</span>
                        </div>
                        <div class="vote">
                            <img src="https://www.travelworld.com/static/media/tw_icon_star.2bc634ea.svg" alt="">
                            <img src="https://www.travelworld.com/static/media/tw_icon_star.2bc634ea.svg" alt="">
                            <img src="https://www.travelworld.com/static/media/tw_icon_star.2bc634ea.svg" alt="">
                            <img src="https://www.travelworld.com/static/media/tw_icon_star.2bc634ea.svg" alt="">
                            <img src="https://www.travelworld.com/static/media/tw_icon_star.2bc634ea.svg" alt="">
                        </div>
                        <div class="amount"><span>Giá Tour: 13.500.000₫</span></div>
                    </div>
                </div>
                <div class="tour-item">
                    <div class="img"><img src="https://www.vgstravel.com/img/tour/23-10-2021/origin/origin-656380-1634984853-27-france-eiffel-tower-paris.jpg" alt=""></div>  
                    <div class="tour-des">
                        <div class="title-tour-item">
                            <span>Tour Golf Xuyên Việt 7 Ngày 6 Đêm </span>
                        </div>
                        <div class="day-start">
                            <span>Ngày khởi hành: 2021-12-18</span>
                        </div>
                        <div class="vote">
                            <img src="https://www.travelworld.com/static/media/tw_icon_star.2bc634ea.svg" alt="">
                            <img src="https://www.travelworld.com/static/media/tw_icon_star.2bc634ea.svg" alt="">
                            <img src="https://www.travelworld.com/static/media/tw_icon_star.2bc634ea.svg" alt="">
                            <img src="https://www.travelworld.com/static/media/tw_icon_star.2bc634ea.svg" alt="">
                            <img src="https://www.travelworld.com/static/media/tw_icon_star.2bc634ea.svg" alt="">
                        </div>
                        <div class="amount"><span>Giá Tour: 13.500.000₫</span></div>
                    </div>
                </div>
                <div class="tour-item">
                    <div class="img"><img src="https://www.vgstravel.com/img/tour/28-10-2021/origin/origin-149027-1635390238-27-sintra-cover.webp" alt=""></div>  
                    <div class="tour-des">
                        <div class="title-tour-item">
                            <span>Tour Golf Xuyên Việt 7 Ngày 6 Đêm </span>
                        </div>
                        <div class="day-start">
                            <span>Ngày khởi hành: 2021-12-18</span>
                        </div>
                        <div class="vote">
                            <img src="https://www.travelworld.com/static/media/tw_icon_star.2bc634ea.svg" alt="">
                            <img src="https://www.travelworld.com/static/media/tw_icon_star.2bc634ea.svg" alt="">
                            <img src="https://www.travelworld.com/static/media/tw_icon_star.2bc634ea.svg" alt="">
                            <img src="https://www.travelworld.com/static/media/tw_icon_star.2bc634ea.svg" alt="">
                            <img src="https://www.travelworld.com/static/media/tw_icon_star.2bc634ea.svg" alt="">
                        </div>
                        <div class="amount"><span>Giá Tour: 13.500.000₫</span></div>
                    </div>
                </div>
                <div class="tour-item">
                    <div class="img"><img src="https://www.vgstravel.com/img/tour/26-10-2021/origin/origin-120199-1635241110-27-chefchauen-1.png" alt=""></div>  
                    <div class="tour-des">
                        <div class="title-tour-item">
                            <span>Tour Golf Xuyên Việt 7 Ngày 6 Đêm </span>
                        </div>
                        <div class="day-start">
                            <span>Ngày khởi hành: 2021-12-18</span>
                        </div>
                        <div class="vote">
                            <img src="https://www.travelworld.com/static/media/tw_icon_star.2bc634ea.svg" alt="">
                            <img src="https://www.travelworld.com/static/media/tw_icon_star.2bc634ea.svg" alt="">
                            <img src="https://www.travelworld.com/static/media/tw_icon_star.2bc634ea.svg" alt="">
                            <img src="https://www.travelworld.com/static/media/tw_icon_star.2bc634ea.svg" alt="">
                            <img src="https://www.travelworld.com/static/media/tw_icon_star.2bc634ea.svg" alt="">
                        </div>
                        <div class="amount"><span>Giá Tour: 13.500.000₫</span></div>
                    </div>
                </div>
                <div class="tour-item">
                    <div class="img"><img src="https://www.vgstravel.com/img/tour/02-11-2021/origin/origin-867375-1635844772-27-p6fW04fo-g6fzEnAfk.jpg" alt=""></div>  
                    <div class="tour-des">
                        <div class="title-tour-item">
                            <span>Tour Golf Xuyên Việt 7 Ngày 6 Đêm </span>
                        </div>
                        <div class="day-start">
                            <span>Ngày khởi hành: 2021-12-18</span>
                        </div>
                        <div class="vote">
                            <img src="https://www.travelworld.com/static/media/tw_icon_star.2bc634ea.svg" alt="">
                            <img src="https://www.travelworld.com/static/media/tw_icon_star.2bc634ea.svg" alt="">
                            <img src="https://www.travelworld.com/static/media/tw_icon_star.2bc634ea.svg" alt="">
                            <img src="https://www.travelworld.com/static/media/tw_icon_star.2bc634ea.svg" alt="">
                            <img src="https://www.travelworld.com/static/media/tw_icon_star.2bc634ea.svg" alt="">
                        </div>
                        <div class="amount"><span>Giá Tour: 13.500.000₫</span></div>
                    </div>
                </div>
                <div class="tour-item">
                    <div class="img"><img src="https://www.vgstravel.com/img/tour/09-11-2021/origin/origin-135288-1636448994-27-05.jpg" alt=""></div>  
                    <div class="tour-des">
                        <div class="title-tour-item">
                            <span>Tour Golf Xuyên Việt 7 Ngày 6 Đêm </span>
                        </div>
                        <div class="day-start">
                            <span>Ngày khởi hành: 2021-12-18</span>
                        </div>
                        <div class="vote">
                            <img src="https://www.travelworld.com/static/media/tw_icon_star.2bc634ea.svg" alt="">
                            <img src="https://www.travelworld.com/static/media/tw_icon_star.2bc634ea.svg" alt="">
                            <img src="https://www.travelworld.com/static/media/tw_icon_star.2bc634ea.svg" alt="">
                            <img src="https://www.travelworld.com/static/media/tw_icon_star.2bc634ea.svg" alt="">
                            <img src="https://www.travelworld.com/static/media/tw_icon_star.2bc634ea.svg" alt="">
                        </div>
                        <div class="amount"><span>Giá Tour: 13.500.000₫</span></div>
                    </div>
                </div>
            </div>

            <div class="partner">
                <div class="container pt-5">
                    <h3 class="title">ĐỐI TÁC CỦA CHÚNG TÔI</h3>
                    <div class="row">
                        <div class="col-2 col-md-6 col-lg-2">
                            <img src="https://78c27a937a0ced0.kcdn.vn/images/partner/vna.png" alt="">
                        </div>
                        <div class="col-2 col-md-6 col-lg-2">
                            <img src="https://78c27a937a0ced0.kcdn.vn/images/partner/mb.png" alt="">
                        </div>
                        <div class="col-2 col-md-6 col-lg-2">
                            <img src="https://78c27a937a0ced0.kcdn.vn/images/partner/evga.jpg" alt="">
                        </div>
                        <div class="col-2 col-md-6 col-lg-2">
                            <img src="https://78c27a937a0ced0.kcdn.vn/images/partner/a4.png" alt="">
                        </div>
                        <div class="col-2 col-md-6 col-lg-2">
                            <img src="https://78c27a937a0ced0.kcdn.vn/images/partner/sheraton.png" alt="">
                        </div>
                        <div class="col-2 col-md-6 col-lg-2">
                            <img src="https://78c27a937a0ced0.kcdn.vn/images/partner/gotady.png" alt="">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-2 col-md-6 col-lg-2">
                            <img src="https://78c27a937a0ced0.kcdn.vn/images/partner/vinpearl.png" alt="">
                        </div>
                        <div class="col-2 col-md-6 col-lg-2">
                            <img src="https://78c27a937a0ced0.kcdn.vn/images/partner/golfnews.png" alt="">
                        </div>
                        <div class="col-2 col-md-6 col-lg-2">
                            <img src="https://78c27a937a0ced0.kcdn.vn/images/partner/pvi.png" alt="">
                        </div>
                        <div class="col-2 col-md-6 col-lg-2">
                            <img src="https://78c27a937a0ced0.kcdn.vn/images/partner/vgs-booking.png" alt="">
                        </div>
                        <div class="col-2 col-md-6 col-lg-2">
                            <img src="https://78c27a937a0ced0.kcdn.vn/images/partner/vgsgroup.png" alt="">
                        </div>
                        <div class="col-2 col-md-6 col-lg-2">
                            <img src="https://78c27a937a0ced0.kcdn.vn/images/partner/IAGTO.png" alt="">
                        </div>
                    </div>
                </div>

            </div>
        </div>
        <footer>
            <div class="container-fluid footer-top">
                <div class="d-flex" style="justify-content: space-between;
                flex-flow: wrap;">
                    <div class="p-3 footer-res">
                        <p class="p-yellow">Liên Hệ</p>
                        <p>Công Ty Cổ Phần Dịch Vụ Du Lịch Golf Việt Nam</p>
                        <p>Địa Chỉ: Số 20 Võ Chí Công, Quận Cầu Giấy, Tp. Hà Nội, Việt Nam</p>
                        <p>Số Điện Thoại : 0901803688</p>
                        <p>Email : contact@vgstravel.vn</p>
                    </div>
                    <div class="p-3 footer-res">
                        <p class="p-yellow">Kết Nối Với Chúng Tôi</p>
                        <p>Liên Hệ</p>
                        <p>Về Chúng Tôi</p>
                        <p>Chính Sách Và Quyền Riêng Tư</p>
                    </div>
                    <div class="p-3 footer-res">
                        <p class="p-yellow">QR Vhandicap Android</p>
                        <img src="https://vgstravel.com/frontend/image/qrcode%20(1).png" alt="">
                    </div>
                    <div class="p-3 footer-res">
                        <p class="p-yellow">QR Vhandicap IOS</p>
                        <img src="https://vgstravel.com/frontend/image/qrcode.png" alt="">
                    </div>
                </div>

            </div>
            <div class="container footer-bottom">
                <div class="text">© 2021 VGS Travel</div>
                <div class="image" style="padding-right:50px;">
                    <img src="https://img.icons8.com/color/48/000000/facebook.png" alt="">
                    <img src="https://img.icons8.com/fluency/48/000000/instagram-new.png" alt="">
                    <img src="https://img.icons8.com/color/48/000000/linkedin.png" alt="">
                </div>
            </div>
        </footer>
    </div>

    <!-- slick -->
    <script type="text/javascript" src="https://code.jquery.com/jquery-1.11.0.min.js"></script>
    <script type="text/javascript" src="https://code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
    <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
</body>
<script src="{{asset('js/app.js')}}"></script>

</html>