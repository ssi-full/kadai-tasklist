@extends('layouts.app')

@section('content')

<p>タスク一覧</p>

 @if (count($task) > 0 )
    <ul>
     @foreach ($task as $task)
       <li>[{{ $task->id}}] {!! link_to_route('tasks.show', $task->type, ['id' => $task->id]) !!}：{{ $task->content}}</li>
     @endforeach
    </ul>
 @endif

{!! link_to_route('tasks.create', 'タスクの登録') !!}

@endsection