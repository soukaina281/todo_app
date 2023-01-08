<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <metas="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
    <title>Document</title>
</head>
<body>
<div>
    <div id="header-box" class="text-center">
        <h1>To Do List</h1>
        <h3>Que devez vous faire?</h3>
    </div>
    <div id="add-task">
        <ul>
            @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
            @endforeach
        </ul>
        <form method="POST" action="{{ route('task.ajouter') }}">

            @csrf 

            <input name="task" class='mx-1' type='text'/>
            <button class='btn mx-1' type='submit'>ajouter</button>
        </form>
    </div>
    @if (!$tasks->isEmpty())
    <div id='to-do-list' class='my-5 p-5'>
        @foreach ($tasks as $task)
        <div class="task-box">
            <form  method="POST" action="{{ route('task.editStatus', $task) }}">
                @csrf

                @if($task->status == 0)
                <input type="checkbox" name="status" value="1" onclick="submit()" />
                @else
                <input type="checkbox" name="status" value="0"  onclick="submit()" checked />
                @endif
                <label class='px-3'>{{ $task->task }}</label>
            </form> 
            <span>
                <a class="btn" href="{{ route('task.edit', $task) }}"><img src="{{ asset('icons/pencil-fill.svg') }}" alt="" /></a>
                <a class="btn" href="{{ route('task.delete', $task) }}"><img src="{{ asset('icons/trash.svg') }}" alt=""/></a>
            </span>
        </div>
        @endforeach
    </div>
    @endif
</div>
</body>
</html>