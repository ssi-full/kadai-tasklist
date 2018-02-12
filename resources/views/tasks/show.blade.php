@extends('layouts.app')

@section('content')

    <h1>id = {{ $task->id }} の詳細ページ</h1>

    <p>Type：{{ $task->type }}</p>
    <p>Task：{{ $task->content }}</p>
    
    {!! link_to_route('tasks.edit', 'タスクを編集', ['id' => $task->id]) !!}
    
    {!! Form::model($task, ['route' => ['tasks.destroy', $task->id], 'method' =>'delete']) !!}
      {!! Form::submit('削除') !!}
    {!! Form::close() !!}  
    
@endsection