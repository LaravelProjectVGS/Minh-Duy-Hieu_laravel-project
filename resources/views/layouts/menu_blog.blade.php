<div class="body-right">
    <link rel="stylesheet" href="{{ asset('css/blog.css') }}">
    <div class="scroll">
        <table class="table">
            <thead>
                <tr class="name-title">
                    <th scope="col" class="tieu-de">
                        Title
                    </th>
                    <th scope="col" class="tieu-de">
                        Option
                    </th>
                    <th scope="col" class="tieu-de">
                        Image
                    </th>
                    <th scope="col" class="tieu-de">
                        isHead
                    </th>
                    <th scope="col" class="tieu-de">
                        Description
                    </th>
                    <th scope="col" class="tieu-de add-new p4 bg-dark">
                        <a href="{{ url('/blogVgs/create') }}"
                            style="display: flex; justify-content: space-between; color:aliceblue">
                            <img srcset="{{ asset('image_blog/pen-white.png') }} 2x" alt="">
                            Add new
                        </a>
                    </th>
                </tr>
            </thead>

            <tbody class="page-1 macdinh">
                @foreach ($items as $item)
                    <tr>
                        <td scope="row" data-label="Title" class="td-top">
                            <div class="title">
                                <h2>{{ $item->title }}</h2>
                                <p>Posted days ago</p>
                            </div>
                        </td>
                        <td data-label="Option">
                            <p>{{ $item->options }}</p>
                        </td>
                        <td data-label="Image">
                            <img src="{{ asset('uploads/blog_image/' . $item->profile_image) }}" width="70px"
                                height="70px" alt="" style="object-fit: cover">
                        </td>
                        <td data-label="isHead">
                            <p>{{ $item->head }}</p>
                        </td>
                        <td data-label="Description">
                            <p id="toHtml" style=" -webkit-line-clamp: 5;
                            -webkit-box-orient: vertical;
                            overflow: hidden;
                            display: -webkit-box;">{{ $item->content }}</p>
                        </td>
                        <td data-label="">
                            <div class="info dropdown-info">
                                <i class="fa-solid fa-ellipsis"></i>
                                <div class="dropdown-content" style="padding-left: 25px;">
                                    <div class="title-info">
                                        Manage
                                    </div>
                                    <div class="info-item" style="display: flex; margin-bottom: 17px;">
                                        <i style="margin-right: 12px; color: rgba(42, 67, 101, 1)"
                                            class="fa-solid fa-pen-to-square"></i>
                                        <a href="{{ route('blogVgs.edit', $item->id) }}">
                                            <p style="color: #2A4365;">
                                                Edit file name
                                            </p>
                                        </a>

                                    </div>
                                    <div class="info-item" style="display: flex;">
                                        <i style="margin-right: 12px; color: rgba(42, 67, 101, 1)"
                                            class="fa-solid fa-trash-can"></i>
                                        <form action="{{ asset('') }}blogVgs/{{ $item->id }}" method="post"
                                            onsubmit="return confirm ('Do you want to delete?')">
                                            {{ csrf_field() }}
                                            {{ method_field('delete') }}
                                            <button
                                                style="color: #2A4365; border:none; outline:none; background: #FFFFFF; font-size: 16px"
                                                type="submit">Delete</button>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
        <a href="{{ url('/vgsTravel_Duy') }}">Update</a>
    </div>

    <div class="numbers">
        <div class="number active1">
            <p style="margin: 0">1</p>
        </div>
        <div class="number none m-0" style="margin-right: 9px!important">
            <p style="margin: 0">2</p>
        </div>
        <div class="number none m-0">
            <p style="margin: 0">3</p>
        </div>
    </div>
</div>
