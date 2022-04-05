<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css"
        integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="{{ asset('css/menu_blog.css') }}">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
    </script>
    <script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk="
        crossorigin="anonymous"></script>
    <link rel="stylesheet" href="{{ asset('css/chosen.min.css') }}">
    <script src="{{ asset('js/chosen.jquery.min.js') }}"></script>
    <script src="{{ asset('ckeditor/ckeditor.js') }}"></script>
    <script src="{{ asset('ckfinder/ckfinder.js') }}"></script>

    <title>Document</title>
</head>

<body>
    <!-- header -->
    @include('components.blog_components.header_blog')
    <!-- body-left -->

    <div class="body wrapper">
        @include('components.blog_components.menu_blog')

        <!-- body right -->

        @yield('createView')

    </div>

</body>

<script>
    // document.getElementById('London').style.display = "block";
    function openCity(evt, cityName) {
        // Declare all variables
        var i, tabcontent, tablinks;

        // Get all elements with class="tabcontent" and hide them
        tabcontent = document.getElementsByClassName("tabcontent");
        for (i = 1; i < tabcontent.length; i++) {
            tabcontent[i].style.display = "none";
        }

        // Get all elements with class="tablinks" and remove the class "active"
        tablinks = document.getElementsByClassName("tablinks");
        for (i = 0; i < tablinks.length; i++) {
            tablinks[i].className = tablinks[i].className.replace(" chose", "");
        }

        // Show the current tab, and add an "chose" class to the button that opened the tab
        document.getElementById(cityName).style.display = "block";
        evt.currentTarget.className += " chose";
    }

    $(document).ready(function() {
        $('.multiple-select').chosen();
    })

    const slider = document.getElementById("myinput")
    const min = slider.min
    const max = slider.max
    const value = slider.value

    function getFile() {
        document.getElementById("upfile").click();
    }

    function sub(obj) {
        var file = obj.value;
        var fileName = file.split("\\");
        document.getElementById("yourBtn").innerHTML = fileName[fileName.length - 1];
        document.myForm.submit(function(e) {
            e.preventDefault(); // <==stop page refresh==>
        });
    }

    var editor = CKEDITOR.replace('content');
    CKFinder.setupCKEditor(editor);

    CKEDITOR.replace('content', {
        filebrowserBrowseUrl: '/ckfinder/ckfinder.html',
        filebrowserUploadUrl: '/ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Files',
        filebrowserWindowWidth: '1000',
        filebrowserWindowHeight: '700'
    });

    CKFinder.setupCKEditor();

    // delete

    function deleteItem(item) {
        item.addEventListener('click', function() {
            let element = item.parentNode.parentNode;
            element.style.display = "none"
        })
    }

    //delete file

    var item_images = document.querySelectorAll('.card-body i')

    item_images.forEach((e, index) => {
        deleteItem(e)
    })

    var rows = document.querySelectorAll('table .close-row')
    rows.forEach((e, index) => {
        deleteItem(e)

    })

    var tags = document.querySelectorAll('.exit i')
    tags.forEach((e, index) => {
        deleteItem(e)
    })

    var tablePlus = document.querySelector('.table-plus')

    var insertTable = document.querySelector('.insert-table')

    tablePlus.addEventListener('click', function() {
        insertTable.style.visibility = "visible"
    })

    var hide_row = document.querySelector('.hide-row')
    hide_row.addEventListener('click', function() {
        insertTable.style.visibility = "collapse"
    })


    var userPlus = document.querySelector('.user-plus')
    var insertUser = document.querySelector('.insert-user')

    userPlus.addEventListener('click', function() {
        insertUser.style.visibility = "visible"
    })

    var hide_user = document.querySelector('.hide-user')
    hide_user.addEventListener('click', function() {
        insertUser.style.visibility = "collapse"
    })


    var pagePlus = document.querySelector('.page-plus')
    var insertPage = document.querySelector('.insert-page')

    pagePlus.addEventListener('click', function() {
        insertPage.style.visibility = "visible"
    })

    var hide_page = document.querySelector('.hide-page')
    hide_page.addEventListener('click', function() {
        insertPage.style.visibility = "collapse"
    })
</script>



</html>
