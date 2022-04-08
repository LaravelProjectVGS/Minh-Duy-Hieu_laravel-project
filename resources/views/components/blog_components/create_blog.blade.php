@extends('components.blog_controller.create_form')

@section('create')
    <div
        style="width: 80%;     display: flex;
                                                                                                                                                                                /* justify-content: center; */
                                                                                                                                                                                flex-direction: column;
                                                                                                                                                                                align-items: center; margin-top: 100px">
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
                flex-direction: column
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

            <h2>Create Blog</h2>

            <form action="{{ asset('') }}todo" method="POST" role="form">
                {{ csrf_field() }}

                <div class="item_form">
                    <label for="title">Title:</label>
                    <input type="text" id="title" name="title">
                </div>

                <div class="item_form">
                    <label for="status">Status:</label>
                    <select id="status" name="status">
                        <option value="Published" class="published">Published</option>
                        <option value="Draft" class="draft">Draft</option>
                        <option value="Scheduled" class="scheduled">Scheduled</option>
                    </select>
                </div>

                <div class="item_form">
                    <label for="stats">Stats:</label>
                    <input type="text" id="stats" name="stats">
                </div>

                <button type="submit">Submit</button>

            </form>
    </div>
@endsection
