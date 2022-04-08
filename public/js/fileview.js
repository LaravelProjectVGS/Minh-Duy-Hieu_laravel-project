

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



function abc(){
// Get the modal
var modal = document.getElementById("myModal");

// Get the button that opens the modal
var btn = document.getElementById("fileUpload");

// Get the <span> element that closes the modal
var span = document.getElementsByClassName("close")[0];

// When the user clicks the button, open the modal 
btn.onclick = function () {
    modal.style.display = "block";
}

// When the user clicks on <span> (x), close the modal
span.onclick = function () {
    modal.style.display = "none";
}

// When the user clicks anywhere outside of the modal, close it
window.onclick = function (event) {
    if (event.target == modal) {
        modal.style.display = "none";
    }
}

}


// $(document).ready(function(){
//     $('#pop-up-form-add').submit(function(e){
//         e.preventDefault();

//         var url = $(this).attr('data-url');

//         $.ajax({
//             type: 'post',
//             url: url,
//             data: {
//                 name: $('#name').val(),
//                 file: $('#file').val(),
//             },
//             success: function(response){
//                 toastr.success('Add new student success!')

//                 $('.modal').modal('hide');
//                 setTimeout(function(){
//                     window.location.href = "{{route('fileview.index')}}"
//                 })
//             }
//         })
//     })
// })

// $().ready(function() {
// 	$("#upload-user").validate({
// 		onfocusout: false,
// 		onkeyup: false,
// 		onclick: false,
// 		rules: {
// 			"user_name": {
// 				required: true,
// 			},
// 			"img_name": {
// 				required: true,
// 			},
//             "text": {
// 				required: true,
// 			},
// 		},
// 		messages: {
// 			"user_name": {
// 				required: "Bạn chưa nhập tên",
// 			},
// 			"img_name": {
// 				required: "Bạn chưa thêm file",

// 			},
// 			"text": {
// 				equalTo: "Bắt buộc nhập trường này",

// 			}
// 		}
// 	});
// });