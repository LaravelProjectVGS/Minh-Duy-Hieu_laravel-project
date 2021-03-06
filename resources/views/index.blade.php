<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create_view</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.0/css/all.min.css">

</head>
<body>
    <div class="header">
        <div class="containerr">
            <div class="h-logo">
                <div class="logo">
                    <img src="./images/Group.svg" alt="" class="group">
                </div>
                <div class="text">TTT <span style="color: rgb(99 179 237); font-weight: 500;">CMS</span></div>
            </div>
            <div class="h-pro">
                <div class="pro-plan"><span class="pro-plan-text">Pro plan</span></div>
                <div class="mask"></div>
            </div>
        </div>
        <div class="menu-reponsive" id="menu">
            <label for="html" class="mn"><i class="fa-solid fa-bars"></i></label>
            <input type="checkbox" id="html" hidden name="fav_language" class="check">
            <label for="html" class="menu-label"><i class="fa-solid fa-xmark" id="close"></i></label><br>
            <div class="nav-vertical-re" id="nav-show">
                <ul class="nav-menu">
                    <li class="nav-item q">
                        <a href="#" class="nav-link manager">Manage</a>
                    </li>
                    <li class="nav-item">
                        <a href="#" class="nav-link dot"><img src="{{asset('images/home.svg')}}" alt=""> View site</a>
                    </li>
                    <li class="nav-item">
                        <a href="#" class="nav-link dot"><img src="{{asset('images/file-plus.svg')}}" alt="">Create page</a>
                    </li>
                    <li class="nav-item">
                        <a href="#" class="nav-link dot"><img src="{{asset('images/pen-tool.svg')}}" alt="">Blog articles</a>
                    </li>
                    <li class="nav-item">
                        <a href="{{url('fileview')}}" class="nav-link dot"><img src="{{asset('images/image.svg')}}" alt="">Files</a>
                    </li>
                    <li class="nav-item">
                        <a href="#" class="nav-link dot"><img src="{{asset('images/users.svg')}}" alt="">Users</a>
                    </li>
                    <li class="nav-item">
                        <a href="#" class="nav-link dot"><img src="{{asset('images/zap.svg')}}" alt="">Subscriptions</a>
                    </li>
                    <li class="nav-item">
                        <a href="#" class="nav-link dot"><img src="{{asset('images/trash-2.svg')}}" alt="">Archived pages</a>
                    </li>
                    <li class="nav-item">
                        <a href="#" class="nav-link pro">Pro features</a>
                    </li>
                    <li class="nav-item">
                        <a href="#" class="nav-link dot"><img src="{{asset('images/book-open.svg')}}" alt="">Themes</a>
                    </li>
                    <li class="nav-item">
                        <a href="#" class="nav-link dot"><img src="{{asset('images/box.svg')}}" alt="">Plugins</a>
                    </li>
                    <li class="nav-item">
                        <a href="#" class="nav-link dot"><img src="{{asset('images/coffee.svg')}}" alt="">Upgrade plans</a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
    <div class="body">
        <div class="nav-vertical">
            <ul class="nav-menu">
                <li class="nav-item">
                    <a href="#" class="nav-link manager">Manage</a>
                </li>
                <li class="nav-item">
                    <a href="#" class="nav-link dot"><img src="{{asset('images/home.svg')}}" alt=""> View site</a>
                </li>
                <li class="nav-item">
                    <a href="#" class="nav-link dot"><img src="{{asset('images/file-plus.svg')}}" alt="">Create page</a>
                </li>
                <li class="nav-item">
                    <a href="#" class="nav-link dot"><img src="{{asset('images/pen-tool.svg')}}" alt="">Blog articles</a>
                </li>
                <li class="nav-item">
                    <a href="{{url('fileview')}} " class="nav-link dot"><img src="{{asset('images/image.svg')}}" alt="">Files</a>
                </li>
                <li class="nav-item">
                    <a href="#" class="nav-link dot"><img src="{{asset('images/users.svg')}}" alt="">Users</a>
                </li>
                <li class="nav-item">
                    <a href="#" class="nav-link dot"><img src="{{asset('images/zap.svg')}}" alt="">Subscriptions</a>
                </li>
                <li class="nav-item">
                    <a href="#" class="nav-link dot"><img src="{{asset('images/trash-2.svg')}}" alt="">Archived pages</a>
                </li>
                <li class="nav-item">
                    <a href="#" class="nav-link pro">Pro features</a>
                </li>
                <li class="nav-item">
                    <a href="#" class="nav-link dot"><img src="{{asset('images/book-open.svg')}}" alt="">Themes</a>
                </li>
                <li class="nav-item">
                    <a href="#" class="nav-link dot"><img src="{{asset('images/box.svg')}}" alt="">Plugins</a>
                </li>
                <li class="nav-item">
                    <a href="#" class="nav-link dot"><img src="{{asset('images/coffee.svg')}}" alt="">Upgrade plans</a>
                </li>
            </ul>
        </div>
        <div class="content">
            <table class="table pc-show">
                <thead class="pc-show">
                    <tr class="">
                        <th><span class="title-text page">Page title</span></th>
                        <th><span class="title-text created">Created</span></th>
                        <th><span class="title-text status">Status</span></th>
                        <th><span class="title-text author">Author</span></th>
                        <th class="addnew">
                            <button class="btn-add">
                                <img src="{{asset('images/file-plus2.svg')}}" class="btn-file-plus" alt="">
                                <span class="btn b">Add new</span>
                            </button>
                        </th>
                    </tr>
                    <tr class="">
                        <td colspan="5" style="height: 1px; color: #E2E8F0;"><hr style="background-color: #E2E8F0; height: 1px; border: 0;"></td>
                    </tr>
                </thead>
                <tbody>
                    <tr class="pc-show">
                        <td><span class="page-item page-title">Home_page</span></td>
                        <td><span class="page-item page-created">Updated 3 weeks ago</span></td>
                        <td><div class="container-status "><button class="page-item page-status"><span>Published</span></button></div></td>
                        <td>
                            <span class="page-item page-author">Joe Bloggs
                                <div class="container-status pd"><button class="page-item page-access"><span>Admin</span></button></div>
                            </span>
                        </td>
                        <td>
                            <div class="container-statu show dropdown">
                                <span class="page-item page-spread">
                                    <img src="{{asset('images/more-horizontal.svg')}}" alt="">
                                </span>
                                <div class="manage-hover dropdown-content">
                                    <div class="manage-title"><span class="">Manage</span></div>
                                    <div class="edit">
                                        <img src="{{asset('images/edit.svg')}}" alt="">
                                        <span>Edit file name</span>
                                    </div>
                                    <div class="trash">
                                        <img src="{{asset('images/trash-3.svg')}}" alt="">
                                        <span>Delete file</span>
                                    </div>
                                </div>
                            </div>
                        </td>
                    </tr>
                    <tr class="pc-show">
                        <td><span class="page-item page-title">Home_page</span></td>
                        <td><span class="page-item page-created">Updated 3 weeks ago</span></td>
                        <td><div class="container-status "><button class="page-item page-status"><span>Published</span></button></div></td>
                        <td>
                            <span class="page-item page-author">Joe Bloggs
                                <div class="container-status pd"><button class="page-item page-access"><span>Admin</span></button></div>
                            </span>
                        </td>
                        <td>
                            <div class="container-statu show dropdown">
                                <span class="page-item page-spread">
                                    <img src="{{asset('images/more-horizontal.svg')}}" alt="">
                                </span>
                                <div class="manage-hover dropdown-content">
                                    <div class="manage-title"><span class="">Manage</span></div>
                                    <div class="edit">
                                        <img src="{{asset('images/edit.svg')}}" alt="">
                                        <span>Edit file name</span>
                                    </div>
                                    <div class="trash">
                                        <img src="{{asset('images/trash-3.svg')}}" alt="">
                                        <span>Delete file</span>
                                    </div>
                                </div>
                            </div>
                        </td>
                    </tr>
                    <tr class="pc-show">
                        <td><span class="page-item page-title">Home_page</span></td>
                        <td><span class="page-item page-created">Updated 3 weeks ago</span></td>
                        <td><div class="container-status "><button class="page-item page-status"><span>Published</span></button></div></td>
                        <td>
                            <span class="page-item page-author">Joe Bloggs
                                <div class="container-status pd"><button class="page-item page-access"><span>Admin</span></button></div>
                            </span>
                        </td>
                        <td>
                            <div class="container-statu show dropdown">
                                    <span class="page-item page-spread">
                                        <img src="{{asset('images/more-horizontal.svg')}}" alt="">
                                    </span>
                                    <div class="manage-hover dropdown-content">
                                        <div class="manage-title"><span class="">Manage</span></div>
                                        <div class="edit">
                                            <img src="{{asset('images/edit.svg')}}" alt="">
                                            <span>Edit file name</span>
                                        </div>
                                        <div class="trash">
                                            <img src="{{asset('images/trash-3.svg')}}" alt="">
                                            <span>Delete file</span>
                                        </div>
                                    </div>
                            </div>
                        </td>
                    </tr>
                    <tr class="pc-show">
                        <td><span class="page-item page-title">Home_page</span></td>
                        <td><span class="page-item page-created">Updated 3 weeks ago</span></td>
                        <td><div class="container-status "><button class="page-item page-status"><span>Published</span></button></div></td>
                        <td>
                            <span class="page-item page-author">Joe Bloggs
                                <div class="container-status pd"><button class="page-item page-access"><span>Admin</span></button></div>
                            </span>
                        </td>
                        <td>
                            <div class="container-statu show dropdown">
                                <span class="page-item page-spread">
                                    <img src="{{asset('images/more-horizontal.svg')}}" alt="">
                                </span>
                                <div class="manage-hover dropdown-content">
                                    <div class="manage-title"><span class="">Manage</span></div>
                                    <div class="edit">
                                        <img src="{{asset('images/edit.svg')}}" alt="">
                                        <span>Edit file name</span>
                                    </div>
                                    <div class="trash">
                                        <img src="{{asset('images/trash-3.svg')}}" alt="">
                                        <span>Delete file</span>
                                    </div>
                                </div>
                            </div>
                        </td>
                    </tr>
                    <tr class="pc-show">
                        <td><span class="page-item page-title">Home_page</span></td>
                        <td><span class="page-item page-created">Updated 3 weeks ago</span></td>
                        <td><div class="container-status "><button class="page-item page-status"><span>Published</span></button></div></td>
                        <td>
                            <span class="page-item page-author">Joe Bloggs
                                <div class="container-status pd"><button class="page-item page-access"><span>Admin</span></button></div>
                            </span>
                        </td>
                        <td>
                            <div class="container-statu show dropdown">
                                <span class="page-item page-spread">
                                    <img src="{{asset('images/more-horizontal.svg')}}" alt="">
                                </span>
                                <div class="manage-hover dropdown-content">
                                    <div class="manage-title"><span class="">Manage</span></div>
                                    <div class="edit">
                                        <img src="{{asset('images/edit.svg')}}" alt="">
                                        <span>Edit file name</span>
                                    </div>
                                    <div class="trash">
                                        <img src="{{asset('images/trash-3.svg')}}" alt="">
                                        <span>Delete file</span>
                                    </div>
                                </div>
                            </div>
                        </td>
                    </tr>
                </tbody>
            </table>

            <table class="table table-mb">
                <tr>
                    <td colspan="5">
                        <div class="title-re">
                            <button class="btn-add">
                                <img src="{{asset('images/file-plus2.svg')}}" class="btn-file-plus" alt="">
                                <span class="btn">Add new</span>
                            </button>
                        </div>
                    </td>
                </tr>
                <tr>
                    <td>
                        <div class="item-reponsive">
                            <div class="p-title-re">
                                <span class="t title-re">Page title</span>
                                <span class="t title-name">Home_page</span>
                            </div>
                            <div class="p-title-re">
                                <span class="t title-re">Created</span>
                                <span class="t title-name">Updated 3 weeks ago</span>
                            </div>
                            <div class="p-title-re">
                                <span class="t title-re">Status</span>
                                <div class="container-status"><button class="page-item page-status page-item-re"><span>Published</span></button></div>
                            </div>
                            <div class="p-title-re">
                                <span class="t title-re">Author</span>
                                <span class="page-item page-author page-item-re">Joe Bloggs
                                    <div class="container-status"><button class="page-item page-access page-item-re"><span>Admin</span></button></div>
                                </span>
                            </div>
                            <div class="p-title-re">
                                <div class="edit e">
                                    <img src="{{asset('images/edit.svg')}}" alt="">
                                    <span>Edit file name</span>
                                </div>
                                
                            </div>
                            <div class="p-title-re">
                                <div class="trash t">
                                    <img src="{{asset('images/trash-3.svg')}}" alt="">
                                    <span>Delete file</span>
                                </div>
                            </div>
                        </div>
                    </td>
                </tr>
                <tr>
                    <td>
                        <div class="item-reponsive">
                            <div class="p-title-re">
                                <span class="t title-re">Page title</span>
                                <span class="t title-name">Home_page</span>
                            </div>
                            <div class="p-title-re">
                                <span class="t title-re">Created</span>
                                <span class="t title-name">Updated 3 weeks ago</span>
                            </div>
                            <div class="p-title-re">
                                <span class="t title-re">Status</span>
                                <div class="container-status"><button class="page-item page-status page-item-re"><span>Published</span></button></div>
                            </div>
                            <div class="p-title-re">
                                <span class="t title-re">Author</span>
                                <span class="page-item page-author page-item-re">Joe Bloggs
                                    <div class="container-status"><button class="page-item page-access page-item-re"><span>Admin</span></button></div>
                                </span>
                            </div>
                            <div class="p-title-re">
                                <div class="edit e">
                                    <img src="{{asset('images/edit.svg')}}" alt="">
                                    <span>Edit file name</span>
                                </div>
                                
                            </div>
                            <div class="p-title-re">
                                <div class="trash t">
                                    <img src="{{asset('images/trash-3.svg')}}" alt="">
                                    <span>Delete file</span>
                                </div>
                            </div>
                        </div>
                    </td>
                </tr>
                <tr>
                    <td>
                        <div class="item-reponsive">
                            <div class="p-title-re">
                                <span class="t title-re">Page title</span>
                                <span class="t title-name">Home_page</span>
                            </div>
                            <div class="p-title-re">
                                <span class="t title-re">Created</span>
                                <span class="t title-name">Updated 3 weeks ago</span>
                            </div>
                            <div class="p-title-re">
                                <span class="t title-re">Status</span>
                                <div class="container-status"><button class="page-item page-status page-item-re"><span>Published</span></button></div>
                            </div>
                            <div class="p-title-re">
                                <span class="t title-re">Author</span>
                                <span class="page-item page-author page-item-re">Joe Bloggs
                                    <div class="container-status"><button class="page-item page-access page-item-re"><span>Admin</span></button></div>
                                </span>
                            </div>
                            <div class="p-title-re">
                                <div class="edit e">
                                    <img src="{{asset('images/edit.svg')}}" alt="">
                                    <span>Edit file name</span>
                                </div>
                                
                            </div>
                            <div class="p-title-re">
                                <div class="trash t">
                                    <img src="{{asset('images/trash-3.svg')}}" alt="">
                                    <span>Delete file</span>
                                </div>
                            </div>
                        </div>
                    </td>
                </tr>
                <tr>
                    <td>
                        <div class="item-reponsive">
                            <div class="p-title-re">
                                <span class="t title-re">Page title</span>
                                <span class="t title-name">Home_page</span>
                            </div>
                            <div class="p-title-re">
                                <span class="t title-re">Created</span>
                                <span class="t title-name">Updated 3 weeks ago</span>
                            </div>
                            <div class="p-title-re">
                                <span class="t title-re">Status</span>
                                <div class="container-status"><button class="page-item page-status page-item-re"><span>Published</span></button></div>
                            </div>
                            <div class="p-title-re">
                                <span class="t title-re">Author</span>
                                <span class="page-item page-author page-item-re">Joe Bloggs
                                    <div class="container-status"><button class="page-item page-access page-item-re"><span>Admin</span></button></div>
                                </span>
                            </div>
                            <div class="p-title-re">
                                <div class="edit e">
                                    <img src="{{asset('images/edit.svg')}}" alt="">
                                    <span>Edit file name</span>
                                </div>
                                
                            </div>
                            <div class="p-title-re">
                                <div class="trash t">
                                    <img src="{{asset('images/trash-3.svg')}}" alt="">
                                    <span>Delete file</span>
                                </div>
                            </div>
                        </div>
                    </td>
                </tr>
                <tr>
                    <td>
                        <div class="item-reponsive">
                            <div class="p-title-re">
                                <span class="t title-re">Page title</span>
                                <span class="t title-name">Home_page</span>
                            </div>
                            <div class="p-title-re">
                                <span class="t title-re">Created</span>
                                <span class="t title-name">Updated 3 weeks ago</span>
                            </div>
                            <div class="p-title-re">
                                <span class="t title-re">Status</span>
                                <div class="container-status"><button class="page-item page-status page-item-re"><span>Published</span></button></div>
                            </div>
                            <div class="p-title-re">
                                <span class="t title-re">Author</span>
                                <span class="page-item page-author page-item-re">Joe Bloggs
                                    <div class="container-status"><button class="page-item page-access page-item-re"><span>Admin</span></button></div>
                                </span>
                            </div>
                            <div class="p-title-re">
                                <div class="edit e">
                                    <img src="{{asset('images/edit.svg')}}" alt="">
                                    <span>Edit file name</span>
                                </div>
                                
                            </div>
                            <div class="p-title-re">
                                <div class="trash t">
                                    <img src="{{asset('images/trash-3.svg')}}" alt="">
                                    <span>Delete file</span>
                                </div>
                            </div>
                        </div>
                    </td>
                </tr>
            </table>
        </div>
        </div>
    </div>
    <script src="./js/index.js"></script>
</body>
</html>