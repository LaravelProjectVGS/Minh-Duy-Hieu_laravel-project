<div class="body-right">
    <link rel="stylesheet" href="{{ asset('css/blog.css') }}">
    <form action="" class="search-blog" style="display: flex">
        <input type="text" name="keyword" id="keyword" placeholder="Nhập từ bạn cần tìm?" style="    width: 100%;
        padding: 20px 10px;
        padding-left: 20px;
        border: none;
        margin-bottom: 30px;
        background: #f6f6f6;
        padding-right: 58px;     border-start-start-radius: 20px; outline: none">
        <button type="submit" style="height: 60px;
        font-size: 21px;
        color: white;
        border: none;
        background: #c3a30b;
        padding: 0 30px;
        border-end-end-radius: 20px;"><i class="fa-solid fa-magnifying-glass"></i></button>
    </form>
    <div class="scroll">
        <table class="table">
            <thead>
                <tr class="name-title">
                    <th width="30%" scope="col" class="tieu-de">
                        Title
                    </th>
                    <th width="10%" scope="col" class="tieu-de">
                        Option
                    </th>
                    <th width="5%" scope="col" class="tieu-de">
                        Image
                    </th>
                    <th width="5%" scope="col" class="tieu-de">
                        isHead
                    </th>
                    <th width="30%" scope="col" class="tieu-de">
                        Description
                    </th>
                    <th width="20%" scope="col" class="tieu-de">
                        Content
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

            <tbody class="page-1 macdinh" id="listItem">
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
                            <p style="-webkit-line-clamp: 5;
                            -webkit-box-orient: vertical;
                            overflow: hidden;
                            display: -webkit-box;">{{ $item->description }}</p>
                        </td>
                        <td data-label="Content">
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
        <a href="{{ url('/vgsTravel_Duy') }}" style="    margin: 0 auto;
        display: flex;
        justify-content: center;
        padding: 10px 20px;
        background: black;
        width: 81px;
        align-items: center;
        border-radius: 6px;
        color: white;">Update</a>
    </div>
    {{ $items->appends(request()->all())->links('blogVgs_components.my-paginate') }}
</div>
