@extends('blog')

@section('body-right')
    <div class="body-right">
        <div class="scroll">
            <table class="table">
                <thead>
                    <tr class="name-title">
                        <th scope="col" class="tieu-de">
                            Title
                        </th>
                        <th scope="col" class="tieu-de">
                            Status
                        </th>
                        <th scope="col" class="tieu-de">
                            Stats
                        </th>
                        <th scope="col" class="tieu-de add-new p4">
                            <a href="{{ route('todo.create') }}"
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
                                    <p>Posted {{ $item->day }} days ago</p>
                                </div>
                            </td>
                            <td data-label="Status">
                                @if ($item->status == 'Published')
                                    <div class="status published">
                                        <button>{{ $item->status }}</button>
                                    </div>
                                @elseif($item->status == 'Draft')
                                    <div class="status draft">
                                        <button>{{ $item->status }}</button>
                                    </div>
                                @else
                                    <div class="status scheduled">
                                        <button>{{ $item->status }}</button>
                                    </div>
                                @endif
                            </td>
                            <td data-label="Stats">
                                <div class="stat">
                                    <h3>{{ $item->stats }}</h3>
                                    <p>views</p>
                                    <img srcset="arrow-up-circle.png 2x" alt="">
                                </div>
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
                                            <a href="{{ route('todo.edit', $item->id) }}">
                                                <p style="color: #2A4365;">
                                                    Edit file name
                                                </p>
                                            </a>

                                        </div>
                                        <div class="info-item" style="display: flex;">
                                            <i style="margin-right: 12px; color: rgba(42, 67, 101, 1)"
                                                class="fa-solid fa-trash-can"></i>
                                            <form action="{{ asset('') }}todo/{{ $item->id }}" method="post"
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
        </div>

        <div class="numbers">
            <div class="number active1">
                <p>1</p>
            </div>
            <div class="number none">
                <p>2</p>
            </div>
            <div class="number none">
                <p>3</p>
            </div>
        </div>
    </div>
@endsection
