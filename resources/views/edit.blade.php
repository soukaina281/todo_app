<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
    <title>Document</title>
</head>

<body class='w-50 m-auto'>
    <div id="header-box">
        <h2>Edit task</h2>
        <hr>
    </div>
    <div id="add-task">
        <ul>
            @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
            @endforeach
        </ul>
        <form method="POST" action="{{ route('task.update', $task) }}">

            @csrf

            <input name="task" class='mx-1' type='text' value="{{ $task->task}}" />
            <button class='btn mx-1' type='submit'>Editer</button>
        </form>
    </div>
</body>

</html>