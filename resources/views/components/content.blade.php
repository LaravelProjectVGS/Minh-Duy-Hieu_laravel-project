@extends('layout')

@section('content')

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

@endsection