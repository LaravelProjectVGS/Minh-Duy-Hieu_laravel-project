

// tab js
document.querySelector('#travel').style.display = "block"
document.querySelector('.p1').classList.add('active')

function openCity(evt, cityName) {
    // Declare all variables
    var i, tabcontent, tablinks;
    document.querySelector('#travel').style.display = "none"
    // Get all elements with class="tabcontent" and hide them
    tabcontent = document.getElementsByClassName("tabcontent");
    for (i = 0; i < tabcontent.length; i++) {
        tabcontent[i].style.display = "none";
    }

    // Get all elements with class="tablinks" and remove the class "active"
    tablinks = document.getElementsByClassName("tablinks");
    for (i = 0; i < tablinks.length; i++) {
        tablinks[i].className = tablinks[i].className.replace(" active", "");
    }

    // Show the current tab, and add an "active" class to the button that opened the tab
    document.getElementById(cityName).style.display = "block";
    evt.currentTarget.className += " active";
}


//show
var shows = document.querySelectorAll('.view')
var text = document.querySelectorAll('#show-text')
var hide = true;
shows.forEach((show, index) => {
    show.addEventListener('click', function (e) {
        if (hide) {
            text[index].classList.remove('card-text')
            text[index].classList.add('card-text-show')
            show.innerText = "Ẩn"
            hide = false
        } else {
            text[index].classList.remove('card-text-show')
            text[index].classList.add('card-text')
            show.innerText = "Xem thêm"
            hide = true
        }

    })
})

// slick

$('.slide-header').slick({
    dots: false,
    infinite: true,
    speed: 100,
    slidesToShow: 1,
    prevArrow: "<button type='button' class='slick-prev pull-left'><i class='fa fa-angle-left' aria-hidden='true'></i></button>",
    nextArrow: "<button type='button' class='slick-next pull-right'><i class='fa fa-angle-right' aria-hidden='true'></i></button>",
})

$('.slide-res').slick({
    dots: false,
    infinite: true,
    speed: 300,
    slidesToShow: 4,
    prevArrow: "<button type='button' class='slick-prev pull-left'><i class='fa fa-angle-left' aria-hidden='true'></i></button>",
    nextArrow: "<button type='button' class='slick-next pull-right'><i class='fa fa-angle-right' aria-hidden='true'></i></button>",
    responsive: [{
            breakpoint: 900,
            settings: {
                slidesToShow: 2,
                slidesToScroll: 1,
                autoplay: true,
                autoplaySpeed: 3000,

            }
        },
        {
            breakpoint: 550,
            settings: {
                slidesToShow: 1,
                slidesToScroll: 1,
                autoplay: true,
                autoplaySpeed: 3000,
            }
        }
        // You can unslick at a given breakpoint now by adding:
        // settings: "unslick"
        // instead of a settings object
    ]
});

$('.slide-review').slick({
    dots: false,
    infinite: true,
    speed: 300,
    slidesToShow: 4,
    prevArrow: "",
    nextArrow: "",
    responsive: [
        {
            breakpoint: 1020,
            settings: {
                slidesToShow: 3,
                slidesToScroll: 2,
                autoplay: true,
                autoplaySpeed: 3000,

            }
        },

        {
            breakpoint: 800,
            settings: {
                slidesToShow: 2,
                slidesToScroll: 2,
                autoplay: true,
                autoplaySpeed: 3000,

            }
        },
        {
            breakpoint: 570,
            settings: {
                slidesToShow: 1,
                slidesToScroll: 1,
                autoplay: true,
                autoplaySpeed: 3000,
            }
        }
        // You can unslick at a given breakpoint now by adding:
        // settings: "unslick"
        // instead of a settings object
    ]
});

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

var help = document.querySelector('.help')
var exit = document.querySelector('.exit')

exit.addEventListener('click', () => {
    help.classList.add('help-hide')
})
