<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
    </script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css"
        integrity="sha512-9usAa10IRO0HhonpyAIVpjrylPvoDwiPUiKdWk5t3PyolY1cOd4DSE0Ga+ri4AuTroPR5aQvXU9xC6qOPnzFeg=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css" />
    <link rel="stylesheet" href="{{ asset('css/vgsTravel_Duy.css') }}">
</head>

<body>
    <header class="p-0">
        <div class="truoc" style="display: flex; justify-content: center; align-items: center;">
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
                <a class="" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown"
                    aria-expanded="false">
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
    <div class="body">
        <!-- truoc -->
        <div class="slide-header slide-truoc" style="">
            <div class="max-height">
                <img src="https://vgstravel.com/img/slide/13-10-2021/origin/origin-131909-1634118109-27-1.jpg"
                    class="d-block img1" alt="...">
            </div>

            <div class="slide-text" style="position: relative;">
                <div class="inner-carousel">
                    <span class="text title">THOẢI MÁI VI VU DU LỊCH QUỐC TẾ</span>
                    <span class="text noi-dung">Lịch trình ấn tượng chỉ có tại VGS Travel !</span>
                    <div class="button">
                        <a class="" href="https://www.facebook.com/vgstravelvn" tabindex="0">
                            <div class="css-1izq7si">Chi Tiết</div>
                        </a>
                    </div>
                </div>
                <img style="object-fit:cover;object-position: 0 58%;"
                    src="https://vgstravel.com/img/slide/20-11-2021/origin/origin-175198-1637401655-36-Golfplatz-min-cover-mobile.jpg"
                    class="d-block w-100" alt="...">
            </div>

            <div>
                <img src="https://vgstravel.com/img/slide/16-12-2021/origin/origin-18773-1639642819-27-56e1d7f4829548cb1184.jpg"
                    class="d-block img3" alt="...">
            </div>
        </div>

        <!-- sau -->

        <div class="slide-header slide-sau" style="display: none;">

            <div class="" style="position: relative;">
                <div class="inner-carousel">
                    <span class="text title">THOẢI MÁI VI VU DU LỊCH QUỐC TẾ</span>
                    <span class="text noi-dung">Lịch trình ấn tượng chỉ có tại VGS Travel !</span>
                    <div class="button">
                        <a class="" href="https://www.facebook.com/vgstravelvn" tabindex="0">
                            <div class="css-1izq7si">Chi Tiết</div>
                        </a>
                    </div>
                </div>
                <img style="object-fit:cover;object-position: 0 58%;"
                    src="https://vgstravel.com/img/slide/20-11-2021/origin/origin-175198-1637401655-36-Golfplatz-min-cover-mobile.jpg"
                    class="d-block w-100" alt="...">
            </div>

            <div>
                <img src="https://vgstravel.com/img/slide/20-11-2021/origin/origin-400268-1637395749-36-b7afa5b5ffe334bd6df2.jpg"
                    class="d-block img3" alt="...">
            </div>
        </div>

        <!-- slide truoc -->
        <!-- <div id="carouselExampleInterval" class="carousel slide" data-bs-ride="carousel" style="display;">
            <div class="carousel-inner" style="padding-top: 70px;">
                <div class="carousel-item active" data-bs-interval="10000">
                    <img src="https://vgstravel.com/img/slide/13-10-2021/origin/origin-131909-1634118109-27-1.jpg"
                        class="d-block" alt="...">
                </div>
                <div class="carousel-item" data-bs-interval="2000">
                    <div class="inner-carousel">
                        <span class="text title">THOẢI MÁI VI VU DU LỊCH QUỐC TẾ</span>
                        <span class="text noi-dung">Lịch trình ấn tượng chỉ có tại VGS Travel !</span>
                        <div class="button">
                            <a class="" href="https://www.facebook.com/vgstravelvn" tabindex="0">
                                <div class="css-1izq7si">Chi Tiết</div>
                            </a>
                        </div>
                    </div>
                    <img style="object-fit:cover"  src="https://vgstravel.com/img/slide/20-11-2021/origin/origin-175198-1637401655-36-Golfplatz-min-cover-mobile.jpg"
                        class="d-block w-100" alt="...">
                </div>
                <div class="carousel-item">
                    <img src="https://vgstravel.com/img/slide/16-12-2021/origin/origin-18773-1639642819-27-56e1d7f4829548cb1184.jpg"
                        class="d-block" alt="...">
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleInterval"
                data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleInterval"
                data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div> -->
        <!-- slide sau -->
        <!-- <div id="carouselExampleInterval" class="carousel slide" data-bs-ride="carousel" style="display: ;">
            <div class="carousel-inner" style="padding-top: 70px;">
                
                <div class="carousel-item active" data-bs-interval="10000">
                    <div class="inner-carousel">
                    </div>
                    <img style="object-fit:cover"  src="https://vgstravel.com/img/slide/20-11-2021/origin/origin-400268-1637395749-36-b7afa5b5ffe334bd6df2.jpg"
                        class="d-block w-100" alt="...">
                </div>
                <div class="carousel-item" data-bs-interval="2000">
                    <div class="inner-carousel">
                        <span class="text title">THOẢI MÁI VI VU DU LỊCH QUỐC TẾ</span>
                        <span class="text noi-dung">Lịch trình ấn tượng chỉ có tại VGS Travel !</span>
                        <div class="button">
                            <a class="" href="https://www.facebook.com/vgstravelvn" tabindex="0">
                                <div class="css-1izq7si">Chi Tiết</div>
                            </a>
                        </div>
                    </div>
                    <img style="object-fit:cover"  src="https://vgstravel.com/img/slide/20-11-2021/origin/origin-175198-1637401655-36-Golfplatz-min-cover-mobile.jpg"
                        class="d-block w-100" alt="...">
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleInterval"
                data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleInterval"
                data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div> -->

        <div class="title-highlight">
            <h2>TOUR NỔI BẬT</h2>
            <p style="text-align: center;">Vi vu du lịch golf quốc tế với lịch trình và trải nghiệm độc đáo chỉ có tại
                VGS Travel</p>
        </div>
        <div class="container full-width" id="container">
            <!-- <div class="khoang-trang"></div> -->
            <div class="slide-res">
                <div class="col-12 col-sm-6 col-md-3">
                    <div class="card-item card-item-1" style="margin: 86px 0;">
                        <img src="https://vgstravel.com/img/tour/23-10-2021/thumbnail/thumbnail-343874-1634984901-27-Hand-Luggage-Only-12.jpg"
                            alt="">
                        <div class="hot">
                            <p>Đang nhận khách</p>
                        </div>
                        <div class="card-item-title">
                            <h3>Tour golf UK - Scotland: từ "Xứ sở sương mù" tới "Quê...</h3>
                        </div>
                        <div class="card-item-hide">
                            <p>Thời gian: 13 ngày 12 đêm</p>
                            <p>Ngày khởi hành: 2022-04-04</p>
                            <p>Giá Tour: Liên hệ</p>
                            <button>Chi Tiết</button>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-sm-6 col-md-3">
                    <div class="card-item card-item-2" style="margin: 86px 0;">
                        <img src="https://vgstravel.com/img/tour/02-11-2021/thumbnail/thumbnail-187600-1635844772-27-p6fW04fo-g6fzEnAfk.jpg"
                            alt="">
                        <div class="hot">
                            <p>Đang nhận khách</p>
                        </div>
                        <div class="card-item-title">
                            <h3>Tour golf Thổ Nhĩ Kỳ: Khám phá cầu nối 2...</h3>
                        </div>
                        <div class="card-item-hide">
                            <p>Thời gian: 10 ngày 9 đêm</p>
                            <p>Ngày khởi hành: 2022-04-10</p>
                            <p>Giá Tour: Liên hệ</p>
                            <button>Chi Tiết</button>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-sm-6 col-md-3">
                    <div class="card-item card-item-3" style="margin: 86px 0;">
                        <img src="https://vgstravel.com/img/tour/17-11-2021/thumbnail/thumbnail-341035-1637131982-27-3fc9dabbb4dfde1d997f54ab7f9a714d.jpg"
                            alt="">
                        <div class="hot">
                            <p>Đang nhận khách</p>
                        </div>
                        <div class="card-item-title">
                            <h3>Tour golf Lào: khám phá "đất nước triệu voi...</h3>
                        </div>
                        <div class="card-item-hide">
                            <p>Thời gian: 3 ngày 2 đêm</p>
                            <p>Ngày khởi hành: 2022-03-18</p>
                            <p>Giá Tour: Liên hệ</p>
                            <button>Chi Tiết</button>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-sm-6 col-md-3">
                    <div class="card-item card-item-4" style="margin: 86px 0;">
                        <img src="https://vgstravel.com/img/tour/17-11-2021/thumbnail/thumbnail-564274-1637140842-27-pha-that-luong-3.jpg"
                            alt="">
                        <div class="hot">
                            <p>Đang nhận khách</p>
                        </div>
                        <div class="card-item-title">
                            <h3>Tour golf Lào: Vientiane - Dansavanh...</h3>
                        </div>
                        <div class="card-item-hide">
                            <p>Thời gian: 4 ngày 3 đêm</p>
                            <p>Ngày khởi hành: 2022-03-18</p>
                            <p>Giá Tour: Liên hệ</p>
                            <button>Chi Tiết</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- search -->

        <div class="search">
            <h3>BẠN MUỐN ĐI ĐÂU</h3>
            <div class="search-form">
                <div class="search-box">
                    <input type="text" class="search-input" placeholder="Nhập địa điểm bạn muốn đi">
                    <button class="search-button"><i class="fa-solid fa-magnifying-glass"></i></button>
                </div>
            </div>
        </div>

        <!-- tour -->
        <div class="tour">
            <div class="container">
                <div class="row">
                    <div class="col-12 col-sm-6 col-md-3" style="display: flex;
                    justify-content: center;">
                        <div class="card-item card-item-1">
                            <img src="https://vgstravel.com/img/tour/23-10-2021/thumbnail/thumbnail-343874-1634984901-27-Hand-Luggage-Only-12.jpg"
                                alt="">
                            <div class="hot">
                                <p>Đang nhận khách</p>
                            </div>
                            <div class="card-item-title">
                                <h3>Tour golf UK - Scotland: từ "Xứ sở sương mù" tới "Quê...</h3>
                            </div>
                            <div class="card-item-hide">
                                <p>Thời gian: 13 ngày 12 đêm</p>
                                <p>Ngày khởi hành: 2022-04-04</p>
                                <p>Giá Tour: Liên hệ</p>
                                <button>Chi Tiết</button>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-sm-6 col-md-3" style="display: flex;
                    justify-content: center;">
                        <div class="card-item card-item-1">
                            <img src="https://vgstravel.com/img/tour/23-10-2021/thumbnail/thumbnail-477790-1634984853-27-france-eiffel-tower-paris.jpg"
                                alt="">
                            <div class="card-item-title">
                                <h3>Tour golf mùa hè Châu Âu: Pháp - Thụy Sĩ - ..</h3>
                            </div>
                            <div class="card-item-hide">
                                <p>Thời gian: 14 ngày 13 đêm</p>
                                <p>Ngày khởi hành: 2022-04-01</p>
                                <p>Giá Tour: Liên hệ</p>
                                <button>Chi Tiết</button>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-sm-6 col-md-3" style="display: flex;
                    justify-content: center;">
                        <div class="card-item card-item-1">
                            <img src="	https://vgstravel.com/img/tour/28-10-2021/thumbnail/thumbnail-807982-1635390239-27-sintra-cover.webp"
                                alt="">
                            <div class="card-item-title">
                                <h3>Tour golf Nam Âu: Bồ Đào Nha - Tây Ban Nha</h3>
                            </div>
                            <div class="card-item-hide">
                                <p>Thời gian: 14 ngày 13 đêm</p>
                                <p>Ngày khởi hành: 2022-04-15</p>
                                <p>Giá Tour: Liên hệ</p>
                                <button>Chi Tiết</button>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-sm-6 col-md-3" style="display: flex;
                    justify-content: center;">
                        <div class="card-item card-item-1">
                            <img src="https://vgstravel.com/img/tour/26-10-2021/thumbnail/thumbnail-223283-1635241111-27-chefchauen-1.png"
                                alt="">
                            <div class="card-item-title">
                                <h3>Tour golf "nghìn lẻ một đêm": Tây Ban Nha - ...</h3>
                            </div>
                            <div class="card-item-hide">
                                <p>Thời gian: 15 ngày 14 đêm</p>
                                <p>Ngày khởi hành: </p>
                                <p>Giá Tour: Liên hệ</p>
                                <button>Chi Tiết</button>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-12 col-sm-6 col-md-3" style="display: flex;
                    justify-content: center;">
                        <div class="card-item card-item-2">
                            <img src="https://vgstravel.com/img/tour/02-11-2021/thumbnail/thumbnail-187600-1635844772-27-p6fW04fo-g6fzEnAfk.jpg"
                                alt="">
                            <div class="hot">
                                <p>Đang nhận khách</p>
                            </div>
                            <div class="card-item-title">
                                <h3>Tour golf Thổ Nhĩ Kỳ: Khám phá cầu nối 2...</h3>
                            </div>
                            <div class="card-item-hide">
                                <p>Thời gian: 10 ngày 9 đêm</p>
                                <p>Ngày khởi hành: 2022-04-10</p>
                                <p>Giá Tour: Liên hệ</p>
                                <button>Chi Tiết</button>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-sm-6 col-md-3" style="display: flex;
                    justify-content: center;">
                        <div class="card-item card-item-2">
                            <img src="https://vgstravel.com/img/tour/09-11-2021/thumbnail/thumbnail-198956-1636448995-27-05.jpg"
                                alt="">
                            <div class="card-item-title">
                                <h3>Tour golf Bắc Âu: Đan Mạch - Na Uy - Thụy Điển - Phần...</h3>
                            </div>
                            <div class="card-item-hide">
                                <p>Thời gian: 11 ngày 10 đêm</p>
                                <p>Ngày khởi hành: 2022-09-20</p>
                                <p>Giá Tour: Liên hệ</p>
                                <button>Chi Tiết</button>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-sm-6 col-md-3" style="display: flex;
                    justify-content: center;">
                        <div class="card-item card-item-2">
                            <img src="https://vgstravel.com/img/tour/09-11-2021/thumbnail/thumbnail-267917-1636447343-27-58468660_377171389559000_6535112179510277921_n.jpg
                            " alt="">
                            <div class="card-item-title">
                                <h3>Tour golf Đông Âu: Pháp - Đức - Séc - Bratislava - Áo -...</h3>
                            </div>
                            <div class="card-item-hide">
                                <p>Thời gian: 13 ngày 12 đêm</p>
                                <p>Ngày khởi hành: 2022-05-06</p>
                                <p>Giá Tour: Liên hệ</p>
                                <button>Chi Tiết</button>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-sm-6 col-md-3" style="display: flex;
                    justify-content: center;">
                        <div class="card-item card-item-2">
                            <img src="https://vgstravel.com/img/tour/17-11-2021/thumbnail/thumbnail-341035-1637131982-27-3fc9dabbb4dfde1d997f54ab7f9a714d.jpg
                            " alt="">
                            <div class="hot">
                                <p>Đang nhận khách</p>
                            </div>
                            <div class="card-item-title">
                                <h3>Tour golf Lào: khám phá "đất nước triệu voi" (3N2Đ)</h3>
                            </div>
                            <div class="card-item-hide">
                                <p>Thời gian: 3 ngày 2 đêm</p>
                                <p>Ngày khởi hành: 2022-03-18</p>
                                <p>Giá Tour: Liên hệ</p>
                                <button>Chi Tiết</button>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-12 col-sm-6 col-md-3" style="display: flex;
                    justify-content: center;">
                        <div class="card-item card-item-4">
                            <img src="https://vgstravel.com/img/tour/17-11-2021/thumbnail/thumbnail-564274-1637140842-27-pha-that-luong-3.jpg"
                                alt="">
                            <div class="hot">
                                <p>Đang nhận khách</p>
                            </div>
                            <div class="card-item-title">
                                <h3>Tour golf Lào: Vientiane - Dansavanh...</h3>
                            </div>
                            <div class="card-item-hide">
                                <p>Thời gian: 4 ngày 3 đêm</p>
                                <p>Ngày khởi hành: 2022-03-18</p>
                                <p>Giá Tour: Liên hệ</p>
                                <button>Chi Tiết</button>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-sm-6 col-md-3" style="display: flex;
                    justify-content: center;">
                        <div class="card-item card-item-4">
                            <img src="https://vgstravel.com/img/tour/23-11-2021/thumbnail/thumbnail-2580-1637657564-27-1e60f4d6b99d8b938ea639fd511869f6027abfc4-2000x3000.jpg"
                                alt="">
                            <div class="card-item-title">
                                <h3>Tour golf Nhật: Osaka - Kyoto - Hakone - Tokyo</h3>
                            </div>
                            <div class="card-item-hide">
                                <p>Thời gian: 10 ngày 9 đêm</p>
                                <p>Ngày khởi hành: 2022-04-15</p>
                                <p>Giá Tour: Liên hệ</p>
                                <button>Chi Tiết</button>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-sm-6 col-md-3" style="display: flex;
                    justify-content: center;">
                        <div class="card-item card-item-4">
                            <img src="https://vgstravel.com/img/tour/03-12-2021/thumbnail/thumbnail-818234-1638526876-27-a6a780ec0470c9218c293d6fd7973f1d.jpg"
                                alt="">
                            <div class="card-item-title">
                                <h3>Tour golf Úc: Sysney - Melbourne</h3>
                            </div>
                            <div class="card-item-hide">
                                <p>Thời gian: 10 ngày 9 đêm</p>
                                <p>Ngày khởi hành: 2022-05-20</p>
                                <p>Giá Tour: Liên hệ</p>
                                <button>Chi Tiết</button>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-sm-6 col-md-3" style="display: flex;
                    justify-content: center;">
                        <div class="card-item card-item-4">
                            <img src="https://vgstravel.com/img/tour/04-12-2021/thumbnail/thumbnail-80930-1638609604-27-fileVD8PJ1DM.jpg"
                                alt="">
                            <div class="card-item-title">
                                <h3>Tour golf New Zealand: khám phá xứ sở Kiwi</h3>
                            </div>
                            <div class="card-item-hide">
                                <p>Thời gian: 10 ngày 9 đêm</p>
                                <p>Ngày khởi hành: 2022-04-15</p>
                                <p>Giá Tour: Liên hệ</p>
                                <button>Chi Tiết</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- review -->
        <div class="review">
            <h3>KHÁCH HÀNG NÓI GÌ VỀ CHÚNG TÔI</h3>
            <div class="container">
                <div class="row">
                    <div class="slide-review">
                        <div class="col-12 col-sm-6 col-md-3">
                            <div class="card">
                                <img src="https://vgstravel.com/images/review/103_1634543781_icon_27.jpg"
                                    class="card-img-top" alt="...">
                                <div class="card-body">
                                    <div class="info">
                                        <h5>Golfer Nguyễn Công Đức</h5>
                                        <p>Tour Thổ nhĩ kỳ</p>
                                        <div style="display:flex; margin-bottom: 10px;">
                                            <i class="fa-solid fa-star"></i>
                                            <i class="fa-solid fa-star"></i>
                                            <i class="fa-solid fa-star"></i>
                                            <i class="fa-solid fa-star"></i>
                                            <i class="fa-solid fa-star"></i>
                                        </div>
                                    </div>

                                    <p id="show-text" class="card-text">Trong hành trình du lịch golf 10 ngày tại
                                        Thổ
                                        Nhĩ
                                        Kỳ, VGS Travel đã
                                        cho tôi trải nghiệm những sân golf mà tôi đánh giá cực kỳ chất lượng và thử
                                        thách.
                                        Tại Antalya, tôi đã chơi trên các sân thi đấu Turkish Airlines hay PGA... Toàn
                                        bộ
                                        lịch trình chúng tôi được lưu trú tại các resort, khách sạn tiêu chuẩn 5* nên
                                        rất
                                        tiện nghi. Tôi rất mong chờ và sẽ tiếp tục trải nghiệm các tour golf của VGS
                                        Travel
                                        trong thời gian sắp tới.</p>
                                    <p class="view">Xem thêm</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-sm-6 col-md-3">
                            <div class="card">
                                <img src="https://vgstravel.com/images/review/484_1635501108_icon_27.jpg"
                                    class="card-img-top" alt="...">
                                <div class="card-body">
                                    <div class="info">
                                        <h5>Golfer Phạm Văn Lập</h5>
                                        <p>Tour Bắc Âu</p>
                                        <div style="display:flex; margin-bottom: 10px;">
                                            <i class="fa-solid fa-star"></i>
                                            <i class="fa-solid fa-star"></i>
                                            <i class="fa-solid fa-star"></i>
                                            <i class="fa-solid fa-star"></i>
                                            <i class="fa-solid fa-star"></i>
                                        </div>
                                    </div>
                                    <p id="show-text" class="card-text">Tôi chưa bao giờ nghĩ đi tour lại thoải
                                        mái và
                                        chất
                                        lượng đến thế.
                                        Trong chuyến đi Bắc Âu do VGS Travel kết cùng EVGA (Hiệp hội golf người Việt Nam
                                        tại
                                        Châu Âu), tôi không những được chơi ở những sân golf đẳng cấp - nơi các golfer
                                        hàng
                                        đầu từng thi đấu, mà tôi còn được ghé thăm những địa danh nổi tiếng thế giới,
                                        thưởng
                                        thức nhiều món ăn độc đáo tại mỗi quốc gia,... Bây giờ, nghĩ đến tour golf quốc
                                        tế
                                        là tôi nghĩ ngay đến VGS Travel.</p>
                                    <p class="view">Xem thêm</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-sm-6 col-md-3">
                            <div class="card">
                                <img src="https://vgstravel.com/images/review/3_1635837128_icon_27.jpg"
                                    class="card-img-top" alt="...">
                                <div class="card-body">
                                    <div class="info">
                                        <h5>Golfer Ngô Thế Hào</h5>
                                        <p>Chủ tịch EVGA</p>
                                        <div style="display:flex; margin-bottom: 10px;">
                                            <i class="fa-solid fa-star"></i>
                                            <i class="fa-solid fa-star"></i>
                                            <i class="fa-solid fa-star"></i>
                                            <i class="fa-solid fa-star"></i>
                                            <i class="fa-solid fa-star"></i>
                                        </div>
                                    </div>
                                    <p id="show-text" class="card-text">Lần đầu EVGA (Hiệp hội golf người Việt tại
                                        Châu
                                        Âu)
                                        kết hợp cùng
                                        VGS Travel là công ty lữ hành chuyên nghiệp về golf để tổ chức đưa các golfers
                                        từ
                                        Việt Nam sang Châu Âu tham dự các giải golf của người Việt trong hệ thống EVGA
                                        Tour.
                                        Tôi hết sức bất ngờ khi công tác tổ chức của VGS Travel rất chuyên nghiệp. Vào
                                        mùa
                                        hè ở Châu Âu, các golfer Việt Nam đã được trải nghiệm những sân golf vô cùng đẹp
                                        với
                                        thời tiết không thể nào tốt hơn. Với cương vị là Chủ tịch EVGA, tôi và Hiệp hội
                                        luôn
                                        chào đón các golfer Việt Nam qua tham dự và thi đấu cùng chúng tôi. Hy vọng sự
                                        kết
                                        hợp giữa EVGA và VGS Travel sẽ đem lại sự gắn bó đoàn kết của những người yêu
                                        golf
                                        giữa Việt Nam và Châu Âu.</p>
                                    <p class="view">Xem thêm</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-sm-6 col-md-3">
                            <div class="card">
                                <img src="https://vgstravel.com/images/review/99_1635913882_icon_27.jpg"
                                    class="card-img-top" alt="...">
                                <div class="card-body">
                                    <div class="info">
                                        <h5>Golfer Võ Tuấn Anh</h5>
                                        <p>Tour Châu Âu</p>
                                        <div style="display:flex; margin-bottom: 10px;">
                                            <i class="fa-solid fa-star"></i>
                                            <i class="fa-solid fa-star"></i>
                                            <i class="fa-solid fa-star"></i>
                                            <i class="fa-solid fa-star"></i>
                                            <i class="fa-solid fa-star"></i>
                                        </div>
                                    </div>
                                    <p id="show-text" class="card-text">Là một người yêu golf và cũng đã từng du
                                        lịch
                                        chơi
                                        golf ở nhiều sân
                                        trên thế giới nhưng chuyến du lịch golf Châu Âu cùng VGS Travel kết hợp cùng
                                        EVGA
                                        (Hiệp hội golf người Việt Nam tại Châu Âu) là chuyến đi tôi ấn tượng và hài lòng
                                        nhất. Lịch trình rất khoa học, chơi nhiều sân, qua nhiều nước mà không hề bị
                                        mệt. Ấn
                                        tượng nhất là tôi và nhóm bạn được chơi ở những sân thi đấu các giải lớn như Le
                                        Golf
                                        National, Albatross,... Cảm ơn VGS Travel với trải nghiệm đáng nhớ này. Tôi mong
                                        sẽ
                                        được tham gia nhiều tour golf nữa cùng các bạn.</p>
                                    <p class="view">Xem thêm</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- info plus -->
        <div class="info-plus">
            <div class="container">
                <div class="row">
                    <!-- Tab links -->
                    <div class="col-12 col-md-9 experience">
                        <div class="tab" style="padding: 0 15px;">

                            <div class="row menu-experience">
                                <p class="tablinks col-6 col-md-3 p1" onclick="openCity(event, 'travel')">Kinh nghiệm
                                    du
                                    lịch</p>
                                <p class="tablinks col-6 col-md-3 p2" onclick="openCity(event, 'culinary')">Trải nghiệm
                                    ẩm
                                    thực</p>
                                <p class="tablinks col-6 col-md-3 p3" onclick="openCity(event, 'news')">Vé máy bay</p>
                                <p class="tablinks col-6 col-md-3 p4" onclick="openCity(event, 'news2')">Tin tức & sự
                                    kiện</p>
                            </div>
                        </div>
                        <!-- Tab content -->
                        <div id="travel" class="tabcontent" style="padding: 0 15px;">
                            <div class="travel-experience">
                                @if (count($isHeadKinhNghiemDuLichs) > 0)
                                    <a href="{{ route('blogVgs.show', $isHeadKinhNghiemDuLichs[count($isHeadKinhNghiemDuLichs) - 1]->id) }}"
                                        class="
                                      row mb-5">

                                        <div class="col-12 col-md-4 p-0">
                                            <img src="{{ asset('uploads/blog_image/' . $isHeadKinhNghiemDuLichs[count($isHeadKinhNghiemDuLichs) - 1]->profile_image) }}"
                                                alt="">
                                        </div>
                                        <div class="col-12 col-md-8">
                                            <h4>{{ $isHeadKinhNghiemDuLichs[count($isHeadKinhNghiemDuLichs) - 1]->title }}
                                            </h4>
                                            <p style=" -webkit-line-clamp: 6;
                                            -webkit-box-orient: vertical;
                                            overflow: hidden;
                                            display: -webkit-box;" id="toHtml">
                                                {{ $isHeadKinhNghiemDuLichs[count($isHeadKinhNghiemDuLichs) - 1]->content }}
                                            </p>
                                        </div>
                                    </a>
                                @endif
                                <div class="row">
                                    @foreach ($kinhNghiemDuLichs as $kinhNghiemDuLich)
                                        <a href="{{ route('blogVgs.show', $kinhNghiemDuLich->id) }}"
                                            class="col-12 col-md-4 space">
                                            <div class="row bg-den">
                                                <div class="col-12 col-md-4 boi-den">
                                                    <img src="{{ asset('uploads/blog_image/' . $kinhNghiemDuLich->profile_image) }}"
                                                        alt="">
                                                </div>
                                                <div class="col-12 col-md-8  test">
                                                    <p style=" -webkit-line-clamp: 2;
                                                    -webkit-box-orient: vertical;
                                                    overflow: hidden;
                                                    display: -webkit-box;" id="toHtml">
                                                        {{ $kinhNghiemDuLich->content }}</p>
                                                </div>
                                            </div>
                                        </a>
                                    @endforeach
                                </div>
                            </div>
                        </div>

                        <div id="culinary" class="tabcontent" style="padding: 0 15px;">
                            <div class="culinary-experience">
                                @if (count($isHeadTraiNghiemAmThucs) > 0)
                                    <a href="{{ route('blogVgs.show', $isHeadTraiNghiemAmThucs[count($isHeadTraiNghiemAmThucs) - 1]->id) }}"
                                        class="row mb-5">

                                        <div class="col-12 col-md-4 p-0">
                                            <img src="{{ asset('uploads/blog_image/' . $isHeadTraiNghiemAmThucs[count($isHeadTraiNghiemAmThucs) - 1]->profile_image) }}"
                                                alt="">
                                        </div>
                                        <div class="col-12 col-md-8 p-0">
                                            <h4>{{ $isHeadTraiNghiemAmThucs[count($isHeadTraiNghiemAmThucs) - 1]->title }}
                                            </h4>
                                            <p style=" -webkit-line-clamp: 6;
                                            -webkit-box-orient: vertical;
                                            overflow: hidden;
                                            display: -webkit-box;" id="toHtml">
                                                {{ $isHeadTraiNghiemAmThucs[count($isHeadTraiNghiemAmThucs) - 1]->content }}
                                            </p>
                                        </div>


                                    </a>
                                @endif
                                <div class="row">
                                    @foreach ($traiNghiemAmThucs as $traiNghiemAmThuc)
                                        <a href="{{ route('blogVgs.show', $traiNghiemAmThuc->id) }}"
                                            class="col-12 col-md-4 space">
                                            <div class="row bg-den">
                                                <div class="col-12 col-md-4 boi-den">
                                                    <img src="{{ asset('uploads/blog_image/' . $traiNghiemAmThuc->profile_image) }}"
                                                        alt="">
                                                </div>
                                                <div class="col-12 col-md-8  test">
                                                    <p style=" -webkit-line-clamp: 2;
                                                    -webkit-box-orient: vertical;
                                                    overflow: hidden;
                                                    display: -webkit-box;" id="toHtml">
                                                        {{ $traiNghiemAmThuc->content }}</p>
                                                </div>
                                            </div>
                                        </a>
                                    @endforeach
                                </div>

                            </div>

                        </div>

                        <div id="news" class="tabcontent" style="padding: 0 15px;">
                            <div class="news-events">
                                @if (count($isHeadVeMayBays) > 0)
                                    <a href="{{ route('blogVgs.show', $isHeadVeMayBays[count($isHeadVeMayBays) - 1]->id) }}"
                                        class="row mb-5">

                                        <div class="col-12 col-md-4 p-0">
                                            <img src="{{ asset('uploads/blog_image/' . $isHeadVeMayBays[count($isHeadVeMayBays) - 1]->profile_image) }}"
                                                alt="">
                                        </div>
                                        <div class="col-12 col-md-8 p-0">
                                            <h4>{{ $isHeadVeMayBays[count($isHeadVeMayBays) - 1]->title }}</h4>
                                            <p style=" -webkit-line-clamp: 6;
                                            -webkit-box-orient: vertical;
                                            overflow: hidden;
                                            display: -webkit-box;" id="toHtml">
                                                {{ $isHeadVeMayBays[count($isHeadVeMayBays) - 1]->content }}</p>
                                        </div>


                                    </a>
                                @endif
                                <div class="row">
                                    @foreach ($veMayBays as $veMayBay)
                                        <a href="{{ route('blogVgs.show', $veMayBay->id) }}"
                                            class="col-12 col-md-4 space">
                                            <div class="row bg-den">
                                                <div class="col-12 col-md-4 boi-den">
                                                    <img src="{{ asset('uploads/blog_image/' . $veMayBay->profile_image) }}"
                                                        alt="">
                                                </div>
                                                <div class="col-12 col-md-8  test">
                                                    <p style=" -webkit-line-clamp: 2;
                                                    -webkit-box-orient: vertical;
                                                    overflow: hidden;
                                                    display: -webkit-box;" id="toHtml">{{ $veMayBay->content }}</p>
                                                </div>
                                            </div>
                                        </a>
                                    @endforeach
                                </div>
                            </div>
                        </div>

                        <div id="news2" class="tabcontent" style="padding: 0 15px;">
                            <div class="news-events">
                                @if (count($isHeadTinTucVaSuKiens) > 0)
                                    <a href="{{ route('blogVgs.show', $isHeadTinTucVaSuKiens[count($isHeadTinTucVaSuKiens) - 1]->id) }}"
                                        class="row mb-5">

                                        <div class="col-12 col-md-4 p-0">
                                            <img src="{{ asset('uploads/blog_image/' . $isHeadTinTucVaSuKiens[count($isHeadTinTucVaSuKiens) - 1]->profile_image) }}"
                                                alt="">
                                        </div>
                                        <div class="col-12 col-md-8 p-0">
                                            <h4>{{ $isHeadTinTucVaSuKiens[count($isHeadTinTucVaSuKiens) - 1]->title }}
                                            </h4>
                                            <p style=" -webkit-line-clamp: 6;
                                            -webkit-box-orient: vertical;
                                            overflow: hidden;
                                            display: -webkit-box;" id="toHtml">
                                                {{ $isHeadTinTucVaSuKiens[count($isHeadTinTucVaSuKiens) - 1]->content }}
                                            </p>
                                        </div>


                                    </a>
                                @endif
                                <div class="row">
                                    @foreach ($tinTucVaSuKiens as $tinTucVaSuKien)
                                        <a href="{{ route('blogVgs.show', $tinTucVaSuKien->id) }}"
                                            class="col-12 col-md-4 space">
                                            <div class="row bg-den">
                                                <div class="col-12 col-md-4 boi-den">
                                                    <img src="{{ asset('uploads/blog_image/' . $tinTucVaSuKien->profile_image) }}"
                                                        alt="">
                                                </div>
                                                <div class="col-12 col-md-8  test">
                                                    <p style=" -webkit-line-clamp: 2;
                                                    -webkit-box-orient: vertical;
                                                    overflow: hidden;
                                                    display: -webkit-box;" id="toHtml">
                                                        {{ $tinTucVaSuKien->content }}</p>
                                                </div>
                                            </div>
                                        </a>
                                    @endforeach
                                </div>
                            </div>
                        </div>

                    </div>

                    <!-- featured-post -->
                    <div class="col-12 col-md-3 featured-post">
                        <div class="menu-experience">
                            <p class="p1 active">Bài viết nổi bật</p>
                        </div>
                        <div style="padding: 0 15px;">
                            <div class="row">
                                @if (count($isHeadBaiVietNoiBats) > 0)
                                    <a href="{{ route('blogVgs.show', $isHeadBaiVietNoiBats[count($isHeadBaiVietNoiBats) - 1]->id) }}"
                                        class="feather">
                                        <img src="{{ asset('uploads/blog_image/' . $isHeadBaiVietNoiBats[count($isHeadBaiVietNoiBats) - 1]->profile_image) }}"
                                            alt="">
                                        <h5
                                            style="color: white; overflow: hidden; position: absolute; text-align: center; top: 40px; padding: 0 30px;">
                                            {{ $isHeadBaiVietNoiBats[count($isHeadBaiVietNoiBats) - 1]->title }}</h5>
                                    </a>
                                @endif

                            </div>
                            @foreach ($baiVietNoiBats as $baiVietNoiBat)
                                <a href="{{ route('blogVgs.show', $baiVietNoiBat->id) }}"
                                    class="row mb-3  bg-feather">
                                    <div class="col-12 col-md-4 boi-den">
                                        <img src="{{ asset('uploads/blog_image/' . $baiVietNoiBat->profile_image) }}"
                                            alt="">
                                    </div>
                                    <div class="col-12 col-md-8 test" id="toHtml" style=" -webkit-line-clamp: 2;
                                    -webkit-box-orient: vertical;
                                    overflow: hidden;
                                    display: -webkit-box;">{{ $baiVietNoiBat->content }}
                                    </div>
                                </a>
                            @endforeach

                        </div>

                    </div>

                </div>
            </div>
        </div>

        <!-- đối tác -->
        <div class="partner">
            <div class="container">
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

    <div class="obsolute">
        <i class="fa-brands fa-facebook"></i>
        <img class="zalo"
            src="https://1.bp.blogspot.com/-dbDziPVZ6FM/XqD6-L5R6LI/AAAAAAAAIs8/zAruLZY1XmY8VBc4Q80_WtrkU5aix_NSgCLcBGAsYHQ/s1600/icon-menu-right2.png"
            alt="">
        <img class="phone"
            src="https://1.bp.blogspot.com/-n_xallSAwIA/XqD7C611tlI/AAAAAAAAItA/zIlgBND8WAI2KqbIP3wd1cTgyqP3sfuAgCLcBGAsYHQ/s1600/icon-menu-right3.png"
            alt="">
    </div>

    <div class="mes">
        <i class="fa-brands fa-facebook-messenger"></i>
    </div>

    <div class="help">
        <div class="text" style="font-size: 13px;">Hi! How can we help you?</div>
        <div class="exit"><i class="fa-solid fa-minus"></i></div>
    </div>

    <!-- slick -->
    <script type="text/javascript" src="https://code.jquery.com/jquery-1.11.0.min.js"></script>
    <script type="text/javascript" src="https://code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
    <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
</body>
<script src="{{ asset('js/vgsTravel_Duy.js') }}"></script>

</html>
