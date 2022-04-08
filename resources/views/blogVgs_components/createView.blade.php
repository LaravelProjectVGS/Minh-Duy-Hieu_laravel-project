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
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.2/jquery.validate.min.js"></script>
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
    //

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



    // // dkaadas
    // console.log("validate");

    // console.log(editor);

    // editor.on('blur', function() {
    //     var check = function(value) {
    //         console.log('1');
    //         return value.trim() ? undefined : 'Vui lòng nhập trường này'
    //     };
    //     var errorMessageCk = check(editor.getData().replace('&nbsp;', ''));
    //     var errorElementCk = document.querySelector('.form-message_ckediter');
    //     if (errorMessageCk) {
    //         errorElementCk.innerText = errorMessageCk;
    //         document.querySelector('.form-message_ckediter').style.color = 'red';
    //         document.querySelector('#cke_content').style.border = '2px solid red';
    //         document.querySelector('.text-content').style.display = 'none';
    //     } else {
    //         errorElementCk.innerText = '';
    //         //inputElement.parentElement.classList.remove('invalid');
    //         document.querySelector('.form-message_ckediter').style.color = 'black';
    //         document.querySelector('#cke_content').style.border = 'none';
    //     }
    // });


    // editor.on('change', function() {
    //     var errorElementCk = document.querySelector('.form-message_ckediter');
    //     errorElementCk.innerText = '';
    //     document.querySelector('.form-message_ckediter').style.color = 'black';
    //     document.querySelector('.ckeditor').style.border = 'none';
    // });



    // function Validator(options) {

    //     function validate(inputElement, rule) {
    //         var errorMessage = rule.test(inputElement.value);
    //         var errorElement = inputElement.parentElement.querySelector('.form-message');
    //         if (errorMessage) {
    //             errorElement.innerText = errorMessage;
    //             inputElement.parentElement.classList.add('invalid');
    //         } else {
    //             errorElement.innerText = '';
    //             inputElement.parentElement.classList.remove('invalid');
    //         }
    //     }

    //     var formElement = document.querySelector(options.form);
    //     console.log(options.rules);
    //     if (formElement) {
    //         options.rules.forEach(function(rule) {

    //             var inputElement = formElement.querySelector(rule.selector)
    //             if (inputElement) {
    //                 console.log(inputElement);
    //                 inputElement.onblur = function() {
    //                     validate(inputElement, rule);
    //                 }

    //                 inputElement.oninput = function() {
    //                     var errorElement = inputElement.parentElement.querySelector(
    //                         '.form-message');

    //                     errorElement.innerText = '';
    //                     inputElement.parentElement.classList.remove('invalid');
    //                 }

    //                 inputElement.addEventListener('click', function() {
    //                     inputElement.parentElement.querySelector('.text-danger').style
    //                         .display = 'none';
    //                     console.log(document.querySelectorAll('.text-danger'));
    //                 })
    //             }
    //         })
    //     }
    // }

    // Validator.isRequired = function(selector) {
    //     return {
    //         selector: selector,
    //         test: function(value) {
    //             return value.trim() ? undefined : 'Vui lòng nhập trường này'
    //         }
    //     }
    // }

    // Validator({
    //     form: '#form',
    //     rules: [
    //         Validator.isRequired('#title'),
    //         Validator.isRequired('#description'),
    //         Validator.isRequired('#content')
    //     ]
    // });

    // var test = document.querySelector('#content');
    // test.onblur = function() {
    //     console.log("okkk");
    // }
</script>



</html>
