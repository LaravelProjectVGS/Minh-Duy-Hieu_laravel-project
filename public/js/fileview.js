

$(document).on("click", ".sidebar ul li", function () {
    $(this).addClass('active').siblings().removeClass('active');
})



$(document).ready(function () {
    $(document).on("click", ".change ul li", function () {
        $(this).addClass('active-menu').siblings().removeClass('active-menu');
    })
})



$(document).ready(function () {
    $(document).on("click", ".navbar-mobile-list li", function () {
        $(this).addClass('active').siblings().removeClass('active');
    })
})


$(document).ready(function () {
    $(document).on("click", ".phantrang ul li", function () {
        $(this).addClass('active-phantrang').siblings().removeClass('active-phantrang');
    })
})


$(document).ready(function () {
    // Hàm active tab nào đó
    function activeTab(obj) {
        // Xóa class active tất cả các tab
        $('.change ul li').removeClass('active-menu');

        // Thêm class active vòa tab đang click
        $(obj).addClass('active-menu');

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
    activeTab($('.tab li:nth-child(2)'));
});

function showPreview(event) {
    var urlImage = URL.createObjectURL(event.target.files[0]);
    var preview = document.getElementById("img-preview");
    var newimg = document.createElement("img");
    preview.innerHTML = "";
    newimg.src = urlImage;
    newimg.height = "auto";
    newimg.width = "auto";
    preview.appendChild(newimg);
}

$('.btn-clear-img').on('click', function () {

    $('#img-preview').empty()
})
