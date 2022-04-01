
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    {{ Form::open(array('route' => 'front.fb', 'class' => '')) }}
    <div>
        <label  class="email">Your name</label>
            {{ Form::text('name', null, ['class' => 'input-text', 'placeholder'=>"Your name"]) }}
    </div><div>
        <label  class="email">Your email</label>
            {{ Form::text('email', null, ['class' => 'input-text', 'placeholder'=>"Your email"]) }}
    </div><div>
        <label class="email">Comments</label>
            {{ Form::textarea('comment', null, ['class' => 'tarea', 'rows'=>"5"]) }}
    </div><div class="send">
        {{ Form::submit('Send', ['class' => 'button']) }}
    </div>
    {{ Form::close() }}

</body>
</html>


