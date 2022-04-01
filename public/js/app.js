
// slick

$('.slider').slick({
    dots: false,
    infinite: true,
    speed: 500,
    slidesToShow: 1,
    prevArrow: "<button type='button' class='slick-prev pull-left'><i class='fa fa-angle-left' aria-hidden='true'></i></button>",
    nextArrow: "<button type='button' class='slick-next pull-right'><i class='fa fa-angle-right' aria-hidden='true'></i></button>",
})

$('.tour-quan-tam').slick({
    dots: false,
    infinite: true,
    speed: 500,
    slidesToShow: 5,
    responsive: [
        {
            autoplay: true,
            autoplaySpeed: 2000,
            breakpoint: 600,
            settings: {
                slidesToShow: 2,
                slidesToScroll: 2
            }
        },
        {
            autoplay: true,
            autoplaySpeed: 2000,
            breakpoint: 480,
            settings: {
                slidesToShow: 1,
                slidesToScroll: 1
            }
        }
    ]
})

var liMenuRespons = document.querySelectorAll('.liMenuRespon')
var rows = document.querySelectorAll('.fa-angle-down')

//true: đang ở dưới
var check = true

liMenuRespons.forEach((liMenuRespon, index) => {
    liMenuRespon.addEventListener('click', () => {
        if(check){
            rows[index].classList.remove('quayxuong')
            rows[index].classList.add('quaylen')
            check=false
        } else {
            rows[index].classList.remove('quaylen')
            rows[index].classList.add('quayxuong')
            check=true
        }
    })
})

var thamquanchinh = document.getElementById("mucluc");
var detaildes = document.getElementById("detail-des").offsetWidth;
var x = document.getElementById("detail").offsetWidth*30/100;
var y = document.getElementById("detail").offsetWidth;
var bodyW = $(window).width();
var left = (bodyW - y)/2 + detaildes;
console.log(left);
console.log(bodyW);
console.log(y);
console.log(detaildes);


function setNormal() {
    $('#mucluc').removeAttr('style');
    thamquanchinh.style.padding = "24px 10px 0px 10px";
    thamquanchinh.style.width = "30%";
    thamquanchinh.style.height = "auto";
}


function setFixed() {
    $('#mucluc').removeAttr('style');
    thamquanchinh.style.position = "fixed";
    thamquanchinh.style.top = "50px";
    thamquanchinh.style.left = left+24+"px";
    thamquanchinh.style.height = "100%";
    thamquanchinh.style.width = x-12+"px";
    thamquanchinh.style.marginTop = "12px";
    
}

window.onresize = function a(event) {
    x = document.getElementById("detail").offsetWidth*30/100;
    y = document.getElementById("detail").offsetWidth;
    detaildes = document.getElementById("detail-des").offsetWidth;
    bodyW = $(window).width();
    left = (bodyW - y)/2 + detaildes;
    
    console.log(left);
    console.log(bodyW);
    console.log(y);
    console.log(detaildes);
};

window.addEventListener("scroll",function(){ 
    if(window.innerWidth > 768) {
        if(window.pageYOffset > 1200 && window.pageYOffset < 6080) {
            $('#mucluc').removeAttr('style');
            setFixed();
        }else{
            $('#mucluc').removeAttr('style');
            setNormal();
        }
    }
})




