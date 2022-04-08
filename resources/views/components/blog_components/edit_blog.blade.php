@extends('components.blog_controller.edit_form')

@section('edit')
    <div
        style="width: 80%;
                                                                                                        display: flex;
                                                                                                        align-items: center; margin-top: 100px; flex-direction: column;">
        <style>
            input {
                width: 500px;
                border: 1px solid black;
                border-radius: 6px;
                height: 40px;
                padding: 0 20px;
            }

            h2 {
                margin-bottom: 50px;
            }

            .item_form {
                margin-bottom: 40px;
                display: flex;
                flex-direction: column;
            }

            button {
                display: flex;
                margin: 0 auto;
                padding: 10px 20px;
                border-radius: 10px;
                border: none;
                outline: none;
                background: black;
                color: white
            }

        </style>
        </head>

        <body>

            <h2>Edit Blog</h2>

            <form action="{{ route('todo.update', $id) }}}" method="POST" role="form">
                @csrf
                {{ method_field('put') }}
                <div class="item_form">
                    <label for="title">Title:</label>
                    {{ csrf_field() }}
                    <input type="text" id="title" name="title" value="{{ $item->title }}">
                </div>

                <div class="item_form">
                    <label for="status">Status:</label>
                    <select id="status" name="status">
                        <option value="Published" class="published">Published</option>
                        <option value="Draft" class="draft">Draft</option>
                        <option value="Scheduled" class="scheduled">Scheduled</option>
                    </select value="{{ $item->status }}">
                </div>

                <div class="item_form">
                    <label for="stats">Stats:</label>
                    <input type="text" id="stats" name="stats" value="{{ $item->stats }}">
                </div>

                <button>Submit</button>

            </form>
    </div>
@endsection
