    <!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>VGS travel</title>
    <link rel="stylesheet" href="{{ asset('css/vgstravel.css')}}" type="text/css">

    <link rel="stylesheet" href="fontawesome-free-5.15.4-web/css/all.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick-theme.min.css"
        integrity="sha512-17EgCFERpgZKcm0j0fEq1YCJuyAWdz9KUtv1EjVuaOz8pDnh/0nZxmU6BBXwaaxqoi9PQXnRWqlcDB027hgv9A=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.css"
        integrity="sha512-yHknP1/AwR+yx26cB1y0cjvQUMvEa2PFzt1c9LlS4pRQ5NOTZFWbhBig+X9G9eYW/8m0/4OXNx8pxJ6z57x0dw=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <script text="javascript" src="./jquery-3.6.0.min.js"></script>
    <script language="javascript">
        $(document).ready(function () {
            // Hàm active tab nào đó
            function activeTab(obj) {
                // Xóa class active tất cả các tab
                $('.tab-wrapper ul li').removeClass('active');

                // Thêm class active vòa tab đang click
                $(obj).addClass('active');

                // Lấy href của tab để show content tương ứng
                var id = $(obj).find('a').attr('href');

                // Ẩn hết nội dung các tab đang hiển thị
                $('.tab-item').hide();

                // Hiển thị nội dung của tab hiện tại
                $(id).show();
            }

            // Sự kiện click đổi tab
            $('.tab li').click(function () {
                activeTab(this);
                return false;
            });

            // Active tab đầu tiên khi trang web được chạy
            activeTab($('.tab li:first-child'));
        });
    </script>
</head>

<body>

    <div class="container" style="padding: 0; margin: 0; ">
        <div class="nav-bar"
            style="height: 81.5px;border-bottom: 3px solid #c3a30b; background-color: aliceblue !important; display: inline-block;">
            <nav class="navbar navbar-expand-sm bg-light" style="padding-left: 12%;">
                <a class="navbar-brand logo" href="#">
                    <img src="logo.png" alt="Logo" style="width: 100px; margin: 0 25px;">
                </a>

                <ul class="navbar-nav hidden-menu">
                    <li class="nav-item dropdown" style="padding-left: 50px; ">
                        <a class="nav-link dropdown-toggle " href=" " id="navbardrop " data-toggle="dropdown ">
                            Tour quốc tế
                        </a>
                        <div class="dropdown-menu ">
                            <a class="dropdown-item" href="# ">Tour golf Châu Âu</a>
                            <a class="dropdown-item" href="# ">Tour golf Châu Úc</a>
                            <a class="dropdown-item" href="# ">Tour golf Châu Phi</a>
                            <a class="dropdown-item" href="# ">Tour golf Châu Mỹ</a>
                            <a class="dropdown-item" href="# ">Tour golf Châu Á</a>
                            <a class="dropdown-item" href="# ">EVGA Tour</a>
                        </div>
                    </li>
                    <li class="nav-item ">
                        <a class="nav-link " href="# ">Tour Golf trong nước</a>
                    </li>
                    <li class="nav-item dropdown ">
                        <a class="nav-link dropdown-toggle " href="# " id="navbardrop " data-toggle="dropdown ">
                            Điểm đến golf
                        </a>
                        <div class="dropdown-menu ">
                            <a class="dropdown-item " href="# ">Tour golf Châu Âu</a>
                            <a class="dropdown-item " href="# ">Tour golf Châu Úc</a>
                            <a class="dropdown-item " href="# ">Tour golf Châu Phi</a>
                            <a class="dropdown-item " href="# ">Tour golf Châu Mỹ</a>
                            <a class="dropdown-item " href="# ">Tour golf Châu Á</a>
                            <a class="dropdown-item " href="# ">EVGA Tour</a>
                        </div>
                    </li>
                    <li class="nav-item dropdown ">
                        <a class="nav-link dropdown-toggle " href="# " id="navbardrop " data-toggle="dropdown ">
                            Dịch vụ tiện ích
                        </a>
                        <div class="dropdown-menu ">
                            <a class="dropdown-item " href="# ">Tour golf Châu Âu</a>
                            <a class="dropdown-item " href="# ">Tour golf Châu Úc</a>
                            <a class="dropdown-item " href="# ">Tour golf Châu Phi</a>
                            <a class="dropdown-item " href="# ">Tour golf Châu Mỹ</a>
                            <a class="dropdown-item " href="# ">Tour golf Châu Á</a>
                            <a class="dropdown-item " href="# ">EVGA Tour</a>
                        </div>
                    </li>
                    <li class="nav-item dropdown ">
                        <a class="nav-link dropdown-toggle " href="# " id="navbardrop " data-toggle="dropdown ">
                            Kinh nghiệm & Trải nghiệm
                        </a>
                        <div class="dropdown-menu ">
                            <a class="dropdown-item " href="# ">Tour golf Châu Âu</a>
                            <a class="dropdown-item " href="# ">Tour golf Châu Úc</a>
                            <a class="dropdown-item " href="# ">Tour golf Châu Phi</a>
                            <a class="dropdown-item " href="# ">Tour golf Châu Mỹ</a>
                            <a class="dropdown-item " href="# ">Tour golf Châu Á</a>
                            <a class="dropdown-item " href="# ">EVGA Tour</a>
                        </div>
                    </li>
                    <li class="nav-item dropdown ">
                        <a class="nav-link dropdown-toggle " href="# " id="navbardrop " data-toggle="dropdown ">
                            Về chúng tôi
                        </a>
                        <div class="dropdown-menu ">
                            <a class="dropdown-item " href="# ">Tour golf Châu Âu</a>
                            <a class="dropdown-item " href="# ">Tour golf Châu Úc</a>
                            <a class="dropdown-item " href="# ">Tour golf Châu Phi</a>
                            <a class="dropdown-item " href="# ">Tour golf Châu Mỹ</a>
                            <a class="dropdown-item " href="# ">Tour golf Châu Á</a>
                            <a class="dropdown-item " href="# ">EVGA Tour</a>
                        </div>
                    </li>

                    <li class="nav-item quoc-ky">
                        <div style="position: absolute; vertical-align: middle; margin: 10px 30px;">
                            <img src="quoc-ky-viet-nam.jpg" style="width:30px;">
                        </div>

                    </li>
                </ul>

            </nav>
            <div class="quoc-ky-mobile">
                <img src="quoc-ky-viet-nam.jpg" style="width:6%;">
            </div>

            
            <input type="checkbox" id="check" class="check-input" hidden>
            <label for="check">
                <div class="bars-mobile"><i class="fas fa-bars"></i></div>
            </label>


            <label for="check" class="over-lay" style="margin: 0;"></label>

            <div class="navbar-mobile">
                <label for="check" class="close-nav">
                    <i class="fas fa-times"></i>
                </label>
                <ul class="navbar-mobile-list" style="padding-top: 50px;">
                    <li>
                        <span class="rotate" data-toggle="collapse" data-target="#collapseItem0" aria-expanded="false">
                            <i class="fas fa-chevron-down"></i>
                        </span>
                        <a href="" class="nav-link nav-mobile-link">Tour Golf quốc tế</a>
                        <ul class="collapse" id="collapseItem0">
                            <li class="nav-link nav-mobile-item"><a href="#"><a class="nav-link">Tour Golf Châu
                                        Âu</a></a></li>
                            <li class="nav-link nav-mobile-item"><a href="#"><a class="nav-link">Tour Golf Châu
                                        Úc</a></a></li>
                            <li class="nav-link nav-mobile-item"><a href="#"><a class="nav-link">Tour Golf Châu
                                        Phi</a></a></li>
                        </ul>
                    </li>
                    <li>

                        <a href="" class="nav-link nav-mobile-link">Tour Golf trong nước</a>

                    </li>
                    <li>
                        <span class="rotate" data-toggle="collapse" data-target="#collapseItem2" aria-expanded="false">
                            <i class="fas fa-chevron-down"></i>
                        </span>
                        <a href="" class="nav-link nav-mobile-link">Điểm đến Golf</a>
                        <ul class="collapse" id="collapseItem2">
                            <li class="nav-link nav-mobile-item"><a href="#"><a class="nav-link">Tour Golf Châu
                                        Âu</a></a></li>
                            <li class="nav-link nav-mobile-item"><a href="#"><a class="nav-link">Tour Golf Châu
                                        Úc</a></a></li>
                            <li class="nav-link nav-mobile-item"><a href="#"><a class="nav-link">Tour Golf Châu
                                        Phi</a></a></li>
                        </ul>
                    </li>
                    <li>
                        <span class="rotate" data-toggle="collapse" data-target="#collapseItem3" aria-expanded="false">
                            <i class="fas fa-chevron-down"></i>
                        </span>
                        <a href="" class="nav-link nav-mobile-link">Dịch vụ và tiện ích</a>
                        <ul class="collapse" id="collapseItem3">
                            <li class="nav-link nav-mobile-item"><a href="#"><a class="nav-link">Tour Golf Châu
                                        Âu</a></a></li>
                            <li class="nav-link nav-mobile-item"><a href="#"><a class="nav-link">Tour Golf Châu
                                        Úc</a></a></li>
                            <li class="nav-link nav-mobile-item"><a href="#"><a class="nav-link">Tour Golf Châu
                                        Phi</a></a></li>
                        </ul>
                    </li>
                    <li>
                        <span class="rotate" data-toggle="collapse" data-target="#collapseItem4" aria-expanded="false">
                            <i class="fas fa-chevron-down"></i>
                        </span>
                        <a href="" class="nav-link nav-mobile-link">Kinh nghiệm & trải nghiệm</a>
                        <ul class="collapse" id="collapseItem4">
                            <li class="nav-link nav-mobile-item"><a href="#"><a class="nav-link">Tour Golf Châu
                                        Âu</a></a></li>
                            <li class="nav-link nav-mobile-item"><a href="#"><a class="nav-link">Tour Golf Châu
                                        Úc</a></a></li>
                            <li class="nav-link nav-mobile-item"><a href="#"><a class="nav-link">Tour Golf Châu
                                        Phi</a></a></li>
                        </ul>
                    </li>
                    <li>
                        <span class="rotate" data-toggle="collapse" data-target="#collapseItem5" aria-expanded="false">
                            <i class="fas fa-chevron-down"></i>
                        </span>
                        <a href="" class="nav-link nav-mobile-link">Về chúng tôi</a>
                        <ul class="collapse" id="collapseItem5">
                            <li class="nav-link nav-mobile-item"><a href="#"><a class="nav-link">Tour Golf Châu
                                        Âu</a></a></li>
                            <li class="nav-link nav-mobile-item"><a href="#"><a class="nav-link">Tour Golf Châu
                                        Úc</a></a></li>
                            <li class="nav-link nav-mobile-item"><a href="#"><a class="nav-link">Tour Golf Châu
                                        Phi</a></a></li>
                        </ul>
                    </li>
                </ul>
            </div>
        </div>
    </div>
    <div class="container-fluid " style="padding: 0; margin: 0;">
        <div class="row">
            <div class="col-md-12 slider-pc">
                <div class="single-item">
                    <div class="holder hide-slider"><img style="width: 100%;object-fit: cover; " class="aaa"
                            src="crs-vgs.jpg"></div>
                    <div class="holder">
                        <img style="width: auto;object-fit: cover; " class="aaa" src="crs-vgs2.jpg">
                    </div>
                    <div class="holder">

                        <img style="width: 100%;object-fit: cover; " class="aaa" src="crs-vgs3.jpg">
                        <div class="content-slider">
                            <span class="text css-gcc11p">THOẢI MÁI VI VU DU LỊCH QUỐC TẾ</span>
                            <span class="text css css-1b6fs5z">Lịch trình ấn tượng chỉ có ở VGS Travel !</span>
                            <div class="btn-contact">
                                <a style="text-decoration: none;">
                                    <div class="css-1izq7si">Chi Tiết</div>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>






            <div class="col-md-12 slider-mobile">
                <div class="single-item">
                    <div class="holder">
                        <img style="width: 100%;object-fit: cover; " class="bbb" src="./mobile-slider-1.jpg">
                        <div class="content-slider" style="padding-left: 2% !important">
                            <span class="text css-gcc11p" style="font-size: 1em;">THOẢI MÁI VI VU DU LỊCH QUỐC TẾ</span>
                            <div class="btn-contact">
                                <a style="text-decoration: none;">
                                    <div class="css-1izq7si">Chi Tiết</div>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="holder"><img style="width: 100%;object-fit: cover; " class="bbb"
                            src="./mobile-slider.jpg">

                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="container">
        <div class="content">
            <div style="text-align: center; padding-bottom: 20px; ">
                <h1 style="color: #c3a30b;font-weight: 500;font-size: 25px; padding-top: 30px; ">TOUR NỔI BẬT</h1>
                <span>Vi du du lịch golf quốc tế với lịch trình và trải nghiệm chỉ có ở VGS Travel</span>
            </div>
            <div class="row responsive">
                <div class="col-md-12 tour-padding autoplay">
                    <div class="card tour customer shadow ">
                        <img class="card-img-top-tour card-tour " src="card.jpg " alt="Card image ">
                        <div class="card-img-overlay ">
                            <h4 class="card-title ">Tour golf UK - Scotland: từ "Xứ sở sương mù" tới "Quê hương của
                                golf"</h4>


                            <div class="row time">
                                <div class="col-md-7 col-12 text-end">Thời gian:</div>
                                <div class="col-md-5 col-12 text-start text-lowercase">10 Ngày 9 Đêm</div>
                            </div>
                            <div class="departure-date row">
                                <div class="col-md-7 col-12 text-end">
                                    Ngày khởi hành:
                                </div>
                                <div class="col-md-5 col-sm-12 text-start">
                                    2022-04-04
                                </div>
                            </div>
                            <div class="price row">
                                <div class="col-md-7 col-sm-12 text-end">
                                    Giá Tour:
                                </div>
                                <div class="col-md-5 col-sm-12 text-start">
                                    65.550.000 ₫
                                </div>
                            </div>
                            <a href="# " class="btn btn-primary ">Chi tiết</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-12 tour-padding autoplay">
                    <div class="card tour customer shadow ">
                        <img class="card-img-top-tour card-tour " src="thonhiky.jpg" alt="Card image ">
                        <div class="card-img-overlay ">
                            <h4 class="card-title ">Tour golf Thổ Nhĩ Kỳ: Khám phá cầu nối 2 lục địa Á-Âu</h4>
                            <div class="row time">
                                <div class="col-md-7 col-sm-12 text-end">Thời gian:</div>
                                <div class="col-md-5 col-sm-12 text-start text-lowercase">10 Ngày 9 Đêm</div>
                            </div>
                            <div class="departure-date row">
                                <div class="col-md-7 col-sm-12 text-end">
                                    Ngày khởi hành:
                                </div>
                                <div class="col-md-5 col-sm-12 text-start">
                                    2022-04-04
                                </div>
                            </div>
                            <div class="price row">
                                <div class="col-md-7 col-sm-12 text-end">
                                    Giá Tour:
                                </div>
                                <div class="col-md-5 col-sm-12 text-start">
                                    65.550.000 ₫
                                </div>
                            </div>
                            <a href="# " class="btn btn-primary ">Chi tiết</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-12 tour-padding autoplay">
                    <div class="card tour customer shadow ">
                        <img class="card-img-top-tour card-tour " src="lao`.jpg" alt="Card image ">
                        <div class="card-img-overlay ">
                            <h4 class="card-title ">Tour golf Lào: khám phá "đất nước triệu voi" (3N2Đ)</h4>
                            <div class="row time">
                                <div class="col-md-7 col-sm-12 text-end">Thời gian:</div>
                                <div class="col-md-5 col-sm-12 text-start text-lowercase">10 Ngày 9 Đêm</div>
                            </div>
                            <div class="departure-date row">
                                <div class="col-md-7 col-sm-12 text-end">
                                    Ngày khởi hành:
                                </div>
                                <div class="col-md-5 col-sm-12 text-start">
                                    2022-04-04
                                </div>
                            </div>
                            <div class="price row">
                                <div class="col-md-7 col-sm-12 text-end">
                                    Giá Tour:
                                </div>
                                <div class="col-md-5 col-sm-12 text-start">
                                    65.550.000 ₫
                                </div>
                            </div>
                            <a href="# " class="btn btn-primary ">Chi tiết</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-12   tour-padding autoplay">
                    <div class="card tour customer shadow ">
                        <img class="card-img-top-tour card-tour " src="lao`1.jpg" alt="Card image ">
                        <div class="card-img-overlay ">
                            <h4 class="card-title ">Tour golf Lào: Vientiane - Dansavanh (4N3Đ)</h4>
                            <div class="row time">
                                <div class="col-md-7 col-sm-12 text-end">Thời gian:</div>
                                <div class="col-md-5 col-sm-12 text-start text-lowercase">10 Ngày 9 Đêm</div>
                            </div>
                            <div class="departure-date row">
                                <div class="col-md-7 col-sm-12 text-end">
                                    Ngày khởi hành:
                                </div>
                                <div class="col-md-5 col-sm-12 text-start">
                                    2022-04-04
                                </div>
                            </div>
                            <div class="price row">
                                <div class="col-md-7 col-sm-12 text-end">
                                    Giá Tour:
                                </div>
                                <div class="col-md-5 col-sm-12 text-start">
                                    65.550.000 ₫
                                </div>
                            </div>
                            <a href="# " class="btn btn-primary ">Chi tiết</a>
                        </div>
                    </div>
                </div>
            </div>
            <div>
                <div class="form " style="text-align: center;padding-bottom: 50px; ">
                    <h1 style="color: #c3a30b; font-weight: 400;font-size: 35px;padding-top: 50px; ">BẠN MUỐN ĐI ĐÂU
                    </h1>
                    <div class="css-form ">
                        <form>
                            <label class="search ">
                                <input class="searchTerm " type="text " placeholder="Nhập địa điểm bạn muốn đi ">

                                <button type="submit " class="searchButton "><i class="fas fa-search "></i></button>
                            </label>

                        </form>
                    </div>
                </div>

                <div class="row ">
                    <div class="col col-lg-3 col-md-4 col-sm-6 col-12 ">
                        <div class="card tour customer shadow ">
                            <img class="card-img-top-tour card-tour " src="card.jpg " alt="Card image ">
                            <div class="card-img-overlay ">
                                <h4 class="card-title ">Tour golf UK - Scotland: từ "Xứ sở sương mù" tới "Quê hương của
                                    golf</h4>
                                <div class="row time">
                                    <div class="col-md-7 col-sm-12 text-end">Thời gian:</div>
                                    <div class="col-md-5 col-sm-12 text-start text-lowercase">10 Ngày 9 Đêm</div>
                                </div>
                                <div class="departure-date row">
                                    <div class="col-md-7 col-sm-12 text-end">
                                        Ngày khởi hành:
                                    </div>
                                    <div class="col-md-5 col-sm-12 text-start">
                                        2022-04-04
                                    </div>
                                </div>
                                <div class="price row">
                                    <div class="col-md-7 col-sm-12 text-end">
                                        Giá Tour:
                                    </div>
                                    <div class="col-md-5 col-sm-12 text-start">
                                        65.550.000 ₫
                                    </div>
                                </div>
                                <a href="# " class="btn btn-primary ">Chi tiết</a>
                            </div>
                        </div>
                    </div>
                    <div class="col col-lg-3 col-md-4 col-sm-6 col-12">
                        <div class="card tour customer shadow ">
                            <img class="card-img-top-tour card-tour " src="thuysi.jpg" alt="Card image ">
                            <div class="card-img-overlay ">
                                <h4 class="card-title ">Tour golf mùa hè Châu Âu: Pháp - Thụy Sĩ - Áo - Séc - Đức</h4>
                                <div class="row time">
                                    <div class="col-md-7 col-sm-12 text-end">Thời gian:</div>
                                    <div class="col-md-5 col-sm-12 text-start text-lowercase">10 Ngày 9 Đêm</div>
                                </div>
                                <div class="departure-date row">
                                    <div class="col-md-7 col-sm-12 text-end">
                                        Ngày khởi hành:
                                    </div>
                                    <div class="col-md-5 col-sm-12 text-start">
                                        2022-04-04
                                    </div>
                                </div>
                                <div class="price row">
                                    <div class="col-md-7 col-sm-12 text-end">
                                        Giá Tour:
                                    </div>
                                    <div class="col-md-5 col-sm-12 text-start">
                                        65.550.000 ₫
                                    </div>
                                </div>
                                <a href="# " class="btn btn-primary ">Chi tiết</a>
                            </div>
                        </div>
                    </div>
                    <div class="col col-lg-3 col-md-4 col-sm-6 col-12">
                        <div class="card tour customer shadow ">
                            <img class="card-img-top-tour card-tour " src="bdn-tbn.webp" alt="Card image ">
                            <div class="card-img-overlay ">
                                <h4 class="card-title ">Tour golf Nam Âu: Bồ Đào Nha - Tây Ban Nha</h4>
                                <div class="row time">
                                    <div class="col-md-7 col-sm-12 text-end">Thời gian:</div>
                                    <div class="col-md-5 col-sm-12 text-start text-lowercase">10 Ngày 9 Đêm</div>
                                </div>
                                <div class="departure-date row">
                                    <div class="col-md-7 col-sm-12 text-end">
                                        Ngày khởi hành:
                                    </div>
                                    <div class="col-md-5 col-sm-12 text-start">
                                        2022-04-04
                                    </div>
                                </div>
                                <div class="price row">
                                    <div class="col-md-7 col-sm-12 text-end">
                                        Giá Tour:
                                    </div>
                                    <div class="col-md-5 col-sm-12 text-start">
                                        65.550.000 ₫
                                    </div>
                                </div>
                                <a href="# " class="btn btn-primary ">Chi tiết</a>
                            </div>
                        </div>
                    </div>
                    <div class="col col-lg-3 col-md-4 col-sm-6 col-12">
                        <div class="card tour customer shadow ">
                            <img class="card-img-top-tour card-tour " src="tbn.png" alt="Card image ">
                            <div class="card-img-overlay ">
                                <h4 class="card-title ">Tour golf "nghìn lẻ một đêm": Tây Ban Nha - Morocco</h4>
                                <div class="row time">
                                    <div class="col-md-7 col-sm-12 text-end">Thời gian:</div>
                                    <div class="col-md-5 col-sm-12 text-start text-lowercase">10 Ngày 9 Đêm</div>
                                </div>
                                <div class="departure-date row">
                                    <div class="col-md-7 col-sm-12 text-end">
                                        Ngày khởi hành:
                                    </div>
                                    <div class="col-md-5 col-sm-12 text-start">
                                        2022-04-04
                                    </div>
                                </div>
                                <div class="price row">
                                    <div class="col-md-7 col-sm-12 text-end">
                                        Giá Tour:
                                    </div>
                                    <div class="col-md-5 col-sm-12 text-start">
                                        65.550.000 ₫
                                    </div>
                                </div>
                                <a href="# " class="btn btn-primary ">Chi tiết</a>
                            </div>
                        </div>
                    </div>

                    <div class="col col-lg-3 col-md-4 col-sm-6 col-12">
                        <div class="card tour customer shadow ">
                            <img class="card-img-top-tour card-tour " src="thonhiky.jpg" alt="Card image ">
                            <div class="card-img-overlay ">
                                <h4 class="card-title ">Tour golf Thổ Nhĩ Kỳ: Khám phá cầu nối 2 lục địa Á-Âu</h4>
                                <div class="row time">
                                    <div class="col-md-7 col-sm-12 text-end">Thời gian:</div>
                                    <div class="col-md-5 col-sm-12 text-start text-lowercase">10 Ngày 9 Đêm</div>
                                </div>
                                <div class="departure-date row">
                                    <div class="col-md-7 col-sm-12 text-end">
                                        Ngày khởi hành:
                                    </div>
                                    <div class="col-md-5 col-sm-12 text-start">
                                        2022-04-04
                                    </div>
                                </div>
                                <div class="price row">
                                    <div class="col-md-7 col-sm-12 text-end">
                                        Giá Tour:
                                    </div>
                                    <div class="col-md-5 col-sm-12 text-start">
                                        65.550.000 ₫
                                    </div>
                                </div>
                                <a href="# " class="btn btn-primary ">Chi tiết</a>
                            </div>
                        </div>
                    </div>
                    <div class="col col-lg-3 col-md-4 col-sm-6 col-12">
                        <div class="card tour customer shadow ">
                            <img class="card-img-top-tour card-tour " src="danmach.jpg" alt="Card image ">
                            <div class="card-img-overlay ">
                                <h4 class="card-title ">Tour golf Bắc Âu: Đan Mạch - Na Uy - Thụy Điển - Phần Lan</h4>
                                <div class="row time">
                                    <div class="col-md-7 col-sm-12 text-end">Thời gian:</div>
                                    <div class="col-md-5 col-sm-12 text-start text-lowercase">10 Ngày 9 Đêm</div>
                                </div>
                                <div class="departure-date row">
                                    <div class="col-md-7 col-sm-12 text-end">
                                        Ngày khởi hành:
                                    </div>
                                    <div class="col-md-5 col-sm-12 text-start">
                                        2022-04-04
                                    </div>
                                </div>
                                <div class="price row">
                                    <div class="col-md-7 col-sm-12 text-end">
                                        Giá Tour:
                                    </div>
                                    <div class="col-md-5 col-sm-12 text-start">
                                        65.550.000 ₫
                                    </div>
                                </div>
                                <a href="# " class="btn btn-primary ">Chi tiết</a>
                            </div>
                        </div>
                    </div>
                    <div class="col col-lg-3 col-md-4 col-sm-6 col-12">
                        <div class="card customer shadow ">
                            <img class="card-img-top-tour card-tour " src="dongau.jpg" alt="Card image ">
                            <div class="card-img-overlay ">
                                <h4 class="card-title ">Tour golf Đông Âu: Pháp - Đức - Séc - Bratislava - Áo - Hungary
                                </h4>
                                <div class="row time">
                                    <div class="col-md-7 col-sm-12 text-end">Thời gian:</div>
                                    <div class="col-md-5 col-sm-12 text-start text-lowercase">10 Ngày 9 Đêm</div>
                                </div>
                                <div class="departure-date row">
                                    <div class="col-md-7 col-sm-12 text-end">
                                        Ngày khởi hành:
                                    </div>
                                    <div class="col-md-5 col-sm-12 text-start">
                                        2022-04-04
                                    </div>
                                </div>
                                <div class="price row">
                                    <div class="col-md-7 col-sm-12 text-end">
                                        Giá Tour:
                                    </div>
                                    <div class="col-md-5 col-sm-12 text-start">
                                        65.550.000 ₫
                                    </div>
                                </div>
                                <a href="# " class="btn btn-primary ">Chi tiết</a>
                            </div>
                        </div>
                    </div>
                    <div class="col col-lg-3 col-md-4 col-sm-6 col-12">
                        <div class="card tour customer shadow ">
                            <img class="card-img-top-tour card-tour " src="lao`.jpg" alt="Card image ">
                            <div class="card-img-overlay ">
                                <h4 class="card-title ">Tour golf Lào: khám phá "đất nước triệu voi" (3N2Đ)</h4>
                                <div class="row time">
                                    <div class="col-md-7 col-sm-6 text-end">Thời gian:</div>
                                    <div class="col-md-5 col-sm-6 text-start text-lowercase">10 Ngày 9 Đêm</div>
                                </div>
                                <div class="departure-date row">
                                    <div class="col-md-7 col-sm-12 text-end">
                                        Ngày khởi hành:
                                    </div>
                                    <div class="col-md-5 col-sm-12 text-start">
                                        2022-04-04
                                    </div>
                                </div>
                                <div class="price row">
                                    <div class="col-md-7 col-sm-12 text-end">
                                        Giá Tour:
                                    </div>
                                    <div class="col-md-5 col-sm-12 text-start">
                                        65.550.000 ₫
                                    </div>
                                </div>
                                <a href="# " class="btn btn-primary ">Chi tiết</a>
                            </div>
                        </div>
                    </div>
                    <div class="col col-lg-3 col-md-4 col-sm-6 col-12">
                        <div class="card tour customer shadow ">
                            <img class="card-img-top-tour card-tour " src="nhat.jpg" alt="Card image ">
                            <div class="card-img-overlay ">
                                <h4 class="card-title ">Tour golf Nhật: Osaka - Kyoto- Hakone - Tokyo</h4>
                                <div class="row time">
                                    <div class="col-md-7 col-sm-12 text-end">Thời gian:</div>
                                    <div class="col-md-5 col-sm-12 text-start text-lowercase">10 Ngày 9 Đêm</div>
                                </div>
                                <div class="departure-date row">
                                    <div class="col-md-7 col-sm-12 text-end">
                                        Ngày khởi hành:
                                    </div>
                                    <div class="col-md-5 col-sm-12 text-start">
                                        2022-04-04
                                    </div>
                                </div>
                                <div class="price row">
                                    <div class="col-md-7 col-sm-12 text-end">
                                        Giá Tour:
                                    </div>
                                    <div class="col-md-5 col-sm-12 text-start">
                                        65.550.000 ₫
                                    </div>
                                </div>
                                <a href="# " class="btn btn-primary ">Chi tiết</a>
                            </div>
                        </div>
                    </div>
                    <div class="col col-lg-3 col-md-4 col-sm-6 col-12">
                        <div class="card tour customer shadow ">
                            <img class="card-img-top-tour card-tour " src="newzeland.jpg" alt="Card image ">
                            <div class="card-img-overlay ">
                                <h4 class="card-title ">Tour golf New Zealand: khám phá xứ sở Kiwi</h4>
                                <div class="row time">
                                    <div class="col-md-7 col-sm-12 text-end">Thời gian:</div>
                                    <div class="col-md-5 col-sm-12 text-start text-lowercase">10 Ngày 9 Đêm</div>
                                </div>
                                <div class="departure-date row">
                                    <div class="col-md-7 col-sm-12 text-end">
                                        Ngày khởi hành:
                                    </div>
                                    <div class="col-md-5 col-sm-12 text-start">
                                        2022-04-04
                                    </div>
                                </div>
                                <div class="price row">
                                    <div class="col-md-7 col-sm-12 text-end">
                                        Giá Tour:
                                    </div>
                                    <div class="col-md-5 col-sm-12 text-start">
                                        65.550.000 ₫
                                    </div>
                                </div>
                                <a href="# " class="btn btn-primary ">Chi tiết</a>
                            </div>
                        </div>
                    </div>
                    <div class="col col-lg-3 col-md-4 col-sm-6 col-12">
                        <div class="card tour customer shadow ">
                            <img class="card-img-top-tour card-tour " src="uc.jpg" alt="Card image ">
                            <div class="card-img-overlay ">
                                <h4 class="card-title ">Tour golf Châu Úc: Úc - New Zealand</h4>
                                <div class="row time">
                                    <div class="col-md-7 col-sm-12 text-end">Thời gian:</div>
                                    <div class="col-md-5 col-sm-12 text-start text-lowercase">10 Ngày 9 Đêm</div>
                                </div>
                                <div class="departure-date row">
                                    <div class="col-md-7 col-sm-12 text-end">
                                        Ngày khởi hành:
                                    </div>
                                    <div class="col-md-5 col-sm-12 text-start">
                                        2022-04-04
                                    </div>
                                </div>
                                <div class="price row">
                                    <div class="col-md-7 col-sm-12 text-end">
                                        Giá Tour:
                                    </div>
                                    <div class="col-md-5 col-sm-12 text-start">
                                        65.550.000 ₫
                                    </div>
                                </div>
                                <a href="# " class="btn btn-primary ">Chi tiết</a>
                            </div>
                        </div>
                    </div>

                    <div class="col col-lg-3 col-md-4 col-sm-6 col-12">
                        <div class="card customer shadow ">
                            <img class="card-img-top-tour img-tour card-tour " src="aicap.jpg" alt="Card image ">
                            <div class="card-img-overlay ">
                                <h4 class="card-title ">Tour golf Ai Cập: khám phá xứ sở Kim Tự Tháp</h4>
                                <div class="row time">
                                    <div class="col-md-7 col-sm-12 text-end">Thời gian:</div>
                                    <div class="col-md-5 col-sm-12 text-start text-lowercase">10 Ngày 9 Đêm</div>
                                </div>
                                <div class="departure-date row">
                                    <div class="col-md-7 col-sm-12 text-end">
                                        Ngày khởi hành:
                                    </div>
                                    <div class="col-md-5 col-sm-12 text-start">
                                        2022-04-04
                                    </div>
                                </div>
                                <div class="price row">
                                    <div class="col-md-7 col-sm-12 text-end">
                                        Giá Tour:
                                    </div>
                                    <div class="col-md-5 col-sm-12 text-start">
                                        65.550.000 ₫
                                    </div>
                                </div>
                                <a href="# " class="btn btn-primary ">Chi tiết</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>


            <div class="customer-comment" style="padding-top:30px 15%; padding-bottom: 25px;">
                <h1
                    style="text-align: center;color: #c3a30b;font-weight: 450px;font-size: 25px; padding-top: 30px; padding-bottom: 20px; text-transform: uppercase; ">
                    Khách hàng nói gì về chúng tôi</h1>

                <div class="row responsive">
                    @foreach($vgs as $item)
                    <div class="col-12">
                        
                        <div class="card golfer" style="overflow: hidden;">
                            <img class="card-img-top" src=" {{ 'userImg/'.$item->img_name}}" alt="Card image" style="width:100%">
                            <div class="card-body">
                                <h4 class="card-title title-golfer">{{ $item->user_name}}</h4>
                                <p class="card-text khachsaid" style="max-height: 100px;">{{$item->text}}
                                </p>
                                <div class="show-text">
                                    <span class="xemthem">Xem thêm</span>
                                    <span class="an">Ẩn</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    @endforeach
                    
                </div>

                <div>
                    <div class="row " style="padding-top: 7%;">
                        <div class="col-lg-9 col-sm-12">

                            <div class="tab-wrapper ">
                                <ul class="tab">
                                    <li>
                                        <a href="#tab-exp-travel">Kinh nghiệm du lịch</a>
                                    </li>
                                    <li>
                                        <a href="#tab-food">Trải nghiệm ẩm thực</a>
                                    </li>
                                    <li>
                                        <a href="#tab-plane">Vé máy bay</a>
                                    </li>
                                    <li>
                                        <a href="#tab-news">Tin tức sự kiện</a>
                                    </li>

                                </ul>
                                <div class="tab-content ">
                                    <div class="tab-item" id="tab-exp-travel">
                                        <img src="exp-travel.png "
                                            style="width: 300px;float: left;padding-right: 10px; ">

                                        <strong>Tổng hợp kinh nghiệm du lịch Ireland và những điều cần biết</strong>
                                        <span>Không phải tự nhiên mà Ireland được mệnh danh một trong những đất nước
                                            đáng
                                            sống
                                            nhất thế giới, cũng như một địa điểm du lịch Châu Âu lý tưởng. Những ngọn
                                            đồi
                                            xanh
                                            mướt, đường bờ biển duyên dáng, những lâu đài cổ kính, và rượu whisky, bia
                                            Guinness
                                            nổi tiếng... đã thu hút hàng triệu du khách đặt chân tới Ireland mỗi năm.
                                            Những
                                            kinh
                                            nghiệm du lịch Ireland dưới đây do VGS Travel tổng hợp sẽ giúp bạn có một
                                            chuyến
                                            vi
                                            vu tuyệt vời đến “Hòn đảo ngọc lục bảo” đầy mê hoặc của Châu Âu</span>
                                        <div class="clear-both "></div>

                                        <div class="post-child row">
                                            <div class="col-md-4 post-detail">
                                                <div style="background-color: #efefef;">
                                                    <div class="row">
                                                        <div class="post-thumb col-md-4">
                                                            <a href="">
                                                                <img src="./hungary.png">
                                                            </a>
                                                        </div>
                                                        <div class="post-data col-md-8">
                                                            <div class="post-data-title">
                                                                <a href="">
                                                                    <span>
                                                                        Kinh nghiệm du lịch Hungary siêu chi tiết
                                                                        dành cho golfer
                                                                    </span>
                                                                </a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-4 post-detail">
                                                <div style="background-color: #efefef;">
                                                    <div class="row">
                                                        <div class="post-thumb col-md-4">
                                                            <a href="">
                                                                <img src="./y.jpg">
                                                            </a>
                                                        </div>
                                                        <div class="post-data col-md-8">
                                                            <div class="post-data-title">
                                                                <a href="">
                                                                    <span>
                                                                        Tổng hợp kinh nghiệm du lịch Ý siêu chi tiết cho
                                                                        golfer
                                                                    </span>
                                                                </a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-4 post-detail">
                                                <div style="background-color: #efefef;">
                                                    <div class="row">
                                                        <div class="post-thumb col-md-4">
                                                            <a href="">
                                                                <img src="./vltt.jpg">
                                                            </a>
                                                        </div>
                                                        <div class="post-data col-md-8">
                                                            <div class="post-data-title">
                                                                <a href="">
                                                                    <span>
                                                                        Những điều bạn cần biết khi đi du lịch Scotland
                                                                        - Kinh nghiệm du lịch
                                                                    </span>
                                                                </a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-4 post-detail">
                                                <div style="background-color: #efefef;">
                                                    <div class="row">
                                                        <div class="post-thumb col-md-4">
                                                            <a href="">
                                                                <img src="./hylap.jpg">
                                                            </a>
                                                        </div>
                                                        <div class="post-data col-md-8">
                                                            <div class="post-data-title">
                                                                <a href="">
                                                                    <span>
                                                                        Tất tần tật kinh nghiệm du lịch Hy Lạp - Cập
                                                                        nhật mới nhất
                                                                    </span>
                                                                </a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-4 post-detail">
                                                <div style="background-color: #efefef;">
                                                    <div class="row">
                                                        <div class="post-thumb col-md-4">
                                                            <a href="">
                                                                <img src="./bulgaria.jpg">
                                                            </a>
                                                        </div>
                                                        <div class="post-data col-md-8">
                                                            <div class="post-data-title">
                                                                <a href="">
                                                                    <span>
                                                                        Cẩm nang khám phá xứ sở hoa hồng - Du lịch
                                                                        Bulgaria
                                                                    </span>
                                                                </a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                    <div class="tab-item" id="tab-food">
                                        <img src="food.jpg " style="width: 300px;float: left;padding-right: 10px; ">

                                        <strong>KHÁM PHÁ ẨM THỰC NEW ZEALAND: TOP 10 MÓN ĂN NHẤT ĐỊNH PHẢI THỬ</strong>
                                        <span>Là quốc gia được bao quanh bởi đại dương mênh mông, bên cạnh những cảnh
                                            quan
                                            hấp
                                            dẫn, đảo quốc New Zealand còn hấp dẫn du khách với nền ẩm thực đa dạng và
                                            độc
                                            đáo.
                                            Ẩm thực New Zealand là sự pha trộn giữa nhiều nền văn hóa, có những nét
                                            tương
                                            đồng
                                            với các món ăn Anh, ảnh hưởng một chút ẩm thực Địa Trung Hải và có nét đặc
                                            trưng
                                            của
                                            người Maori bản địa. Bài viết dưới đây sẽ giúp bạn khám phá sự phong phú,
                                            sáng
                                            tạo
                                            của ẩm thực New Zealand và top 10 món ăn ở New Zealand</span>
                                        <div class="clear-both "></div>
                                    </div>
                                    <div class="tab-item" id="tab-plane">
                                        <img src="plane.jpg " style="width: 300px;float: left;padding-right: 10px; ">

                                        <strong>Khám phá các đường bay thương mại quốc tế mới nhất - Bay cùng
                                            VNA</strong>
                                        <span>Vietnam Airlines đang dần khôi phục các đường bay quốc tế thường lệ hai
                                            chiều
                                            phục
                                            vụ nhu cầu vi vu quốc tế, du lịch, thăm thân,... của hành khách. Theo dõi
                                            thông
                                            tin
                                            lịch trình các chuyến bay được cập nhật mới nhất trong bài viết dưới đây.
                                        </span>
                                        <div class="clear-both "></div>
                                    </div>
                                    <div class="tab-item" id="tab-news">
                                        <img src="plane.jpg " style="width: 300px;float: left;padding-right: 10px; ">

                                        <strong>Khám phá các đường bay thương mại quốc tế mới nhất - Bay cùng
                                            VNA</strong>
                                        <span>Vietnam Airlines đang dần khôi phục các đường bay quốc tế thường lệ hai
                                            chiều
                                            phục
                                            vụ nhu cầu vi vu quốc tế, du lịch, thăm thân,... của hành khách. Theo dõi
                                            thông
                                            tin
                                            lịch trình các chuyến bay được cập nhật mới nhất trong bài viết dưới đây.
                                        </span>
                                        <div class="clear-both"></div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-3 col-sm-12 ">
                            <nav cclass="tab-head">
                                <div class="nav nav-tabs" id="nav-tab1" role="tablist">
                                    <button class="nav-link active" id="nav-home-tab1" data-bs-toggle="tab"
                                        style="border-radius: 10px 10px 0 0;background: #c3a30b;
                                        color: #fff;font-size: 1em;font-weight: 600;outline: unset!important;padding: 15px 24px;" data-bs-target="#nav-home" type="button" role="tab"
                                        aria-controls="nav-home" aria-selected="true">
                                        Bài viết nổi bật
                                    </button>
                                </div>
                            </nav>
                            <div class="tab-content" id="nav-tabContent1">
                                <div class="tab-pane fade show active" id="nav-home1" role="tabpanel"
                                    aria-labelledby="nav-home-tab">
                                    <div class="post-highlight">
                                        <div class="post-thumb" style="position: relative;">
                                            <a href=""><img src="./y.jpg"></a>
                                            <div class="post-data">
                                                <div class="post-data-title">
                                                    <a href="" style="text-decoration: none;"><span
                                                            style="color: #fff !important; font-weight: 600 !important; font-size: 1.429em;">
                                                            Tổng hợp kinh nghiệm du lịch Ý siêu chi tiết cho
                                                            golfer</span></a>
                                                </div>
                                            </div>
                                        </div>

                                    </div>

                                    <div class="post-child row">
                                        <div class="col-md-12 post-detail">
                                            <div style="background-color: #efefef;">
                                                <div class="row">
                                                    <div class="post-thumb col-md-4">
                                                        <a href="">
                                                            <img src="./nui.png">
                                                        </a>
                                                    </div>
                                                    <div class="post-data col-md-8">
                                                        <div class="post-data-title">
                                                            <a href="">
                                                                <span>
                                                                    Tổng hợp kinh nghiệm du lịch Ireland và những điều
                                                                    cần biết
                                                                </span>
                                                            </a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-md-12 post-detail">
                                            <div style="background-color: #efefef;">
                                                <div class="row">
                                                    <div class="post-thumb col-md-4">
                                                        <a href="">
                                                            <img src="./hungary.png">
                                                        </a>
                                                    </div>
                                                    <div class="post-data col-md-8">
                                                        <div class="post-data-title">
                                                            <a href="">
                                                                <span>
                                                                    Kinh nghiệm du lịch Hungary siêu chi tiết
                                                                    dành cho golfer
                                                                </span>
                                                            </a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>


                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div>
                        <h1
                            style="text-align: center;color: #c3a30b;font-weight: 400;font-size: 35px; padding-top: 30px; padding-bottom: 20px;border-bottom: #c3a30b 1px solid;text-transform: uppercase; ">
                            Đối tác của chúng tôi</h1>

                        <div class="row d-flex justify-content-center">
                            <div class="col-md-2 col-sm-6 col-xs-6 col-2">
                                <img src="contact.png " class="contact-width ">
                            </div>
                            <div class="col-md-2 col-sm-6 col-xs-6 col-2">
                                <img src="mbbank.png " class="contact-width ">
                            </div>
                            <div class="col-md-2 col-sm-6 col-xs-6 col-2">
                                <img src="evgn.jpg " class="contact-width ">
                            </div>
                            <div class="col-md-2 col-sm-6 col-xs-6 col-2">
                                <img src="kng.png " class="contact-width ">
                            </div>
                            <div class="col-md-2 col-sm-6 col-xs-6 col-2">
                                <img src="sheraton.png " class="contact-width ">
                            </div>
                            <div class="col-md-2 col-sm-6 col-xs-6 col-2">
                                <img src="gotadi.png " class="contact-width ">
                            </div>
                            <div class="col-md-2 col-sm-6 col-xs-6 col-2">
                                <img src="vinpearl.png " class="contact-width ">
                            </div>
                            <div class="col-md-2 col-sm-6 col-xs-6 col-2">
                                <img src="golfnews.png " class="contact-width ">
                            </div>
                            <div class="col-md-2 col-sm-6 col-xs-6 col-2">
                                <img src="petro.png " class="contact-width ">
                            </div>
                            <div class="col-md-2 col-sm-6 col-xs-6 col-2">
                                <img src="vgsbooking.png " class="contact-width ">
                            </div>
                            <div class="col-md-2 col-sm-6 col-xs-6 col-2">
                                <img src="vgsgroup.png " class="contact-width ">
                            </div>
                            <div class="col-md-2 col-sm-6 col-xs-6 col-2">
                                <img src="iagtp.png " class="contact-width">
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
    <div class="container-fluid " style="padding: 0; ">
        <div class="footer ">
            <div class="row" style="padding-left: 15px;">
                <div class="col-lg-6 col-sm-6">
                    <div class="abc ">Liên hệ với chúng tôi</div>

                    <div>
                        <a>Công Ty Cổ Phần Dịch Vụ Du Lịch Golf Việt Nam</a><br />
                        <a>Địa Chỉ: Số 20 Võ Chí Công, Quận Cầu Giấy, Tp. Hà Nội, Việt Nam</a><br />
                        <a>Số Điện Thoại : 0901803688</a><br />
                        <a>Email : contact@vgstravel.vn</a><br />
                    </div>
                </div>
                <div class="col-lg-2 col-sm-6">
                    <div class="abc ">Kết nối với chúng tôi</div>
                    <a>Liên hệ</a><br />
                    <a>Về chúng tôi</a><br />
                    <a>Chính sách và quyền riêng tư</a><br />
                </div>
                <div class="col-lg-2 col-sm-6">
                    <div class="abc ">QR Vhandicap Android</div>
                    <a><img src="qrcode.png " width="150px "></a>

                </div>
                <div class="col-lg-2 col-sm-6">
                    <div class="abc ">QR Vhandicap IOS</div>
                    <a><img src="qrcode.png " width="150px "></a>
                </div>
            </div>
        </div>
    </div>
    <div class="fixed-right">

    </div>


    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js "
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo "
        crossorigin="anonymous "></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js "
        integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1 "
        crossorigin="anonymous "></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js "
        integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM "
        crossorigin="anonymous "></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick.min.js"
        integrity="sha512-HGOnQO9+SP1V92SrtZfjqxxtLmVzqZpjFFekvzZVWoiASSQgSr4cw9Kqd2+l8Llp4Gm0G8GIFJ4ddwZilcdb8A=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script language="javascript">
        $('.responsive').slick({
            autoplay: true,
            autoplaySpeed: 2000,
            dots: true,
            infinite: false,
            speed: 300,
            slidesToShow: 4,
            slidesToScroll: 4,
            responsive: [
                {
                    breakpoint: 1024,
                    settings: {
                        slidesToShow: 2,
                        slidesToScroll: 3,
                        infinite: true,
                        dots: true
                    }
                },
                {
                    breakpoint: 600,
                    settings: {
                        slidesToShow: 1,
                        slidesToScroll: 1,
                    }
                },
                {
                    breakpoint: 480,
                    settings: {
                        slidesToShow: 1,
                        slidesToScroll: 1
                    }
                }
                // You can unslick at a given breakpoint now by adding:
                // settings: "unslick"
                // instead of a settings object
            ]
        });
    </script>
    <script language="javascript">
        $(document).ready(function () {
            $('.show-text .xemthem').click(function(){
                var $this = $(this);
                var $content = $this.parent().prev(".khachsaid");
                var linkText = $this.text().toUpperCase();    
    
                if(linkText === "XEM THÊM"){
                    linkText = "Ẩn";
                    $content.css("max-height", "2000px");
                } else {
                    linkText = "Xem thêm";
                    $content.css("max-height", "100px");
                };
                $this.text(linkText);
            });
        });
    </script>
    <script language="javascript">
        $(".rotate").click(function () {
            $(this).toggleClass("down");
        })
    </script>
    <script language="javascript">

        $('.single-item').slick({
            autoplay: true,
            autoplaySpeed: 2000,
            infinite: true,
            arrows: true
        });  
    </script>
</body>

</html>