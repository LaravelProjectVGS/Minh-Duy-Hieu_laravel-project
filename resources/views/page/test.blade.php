<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset=UTF-8>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Chạy thử ckeditor blog trương thanh hùng </title>
    <script src="{{asset('ckeditor/ckeditor.js')}}"></script>
   
</head>
<body>
    <textarea name="hungtt" id="text" cols="30" rows="10"></textarea>
    <script>
    CKEDITOR.replace( 'hungtt', {
        
        filebrowserBrowseUrl     : "{{ route('ckfinder_browser') }}",
        filebrowserImageBrowseUrl: "{{ route('ckfinder_browser') }}?type=Images&token=123",
        filebrowserFlashBrowseUrl: "{{ route('ckfinder_browser') }}?type=Flash&token=123", 
        filebrowserUploadUrl     : "{{ route('ckfinder_connector') }}?command=QuickUpload&type=Files", 
        filebrowserImageUploadUrl: "{{ route('ckfinder_connector') }}?command=QuickUpload&type=Images",
        filebrowserFlashUploadUrl: "{{ route('ckfinder_connector') }}?command=QuickUpload&type=Flash",
    } );
    
    </script>
    @include('ckfinder::setup')
</body>
</html>