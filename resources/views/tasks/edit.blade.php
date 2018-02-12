@extends('layouts.app')

@section('content')

<p>タスクNo.{{ $task->id }}の編集ページ</p>

{!! Form::model($task, ['route' => [ 'tasks.update', $task->id], 'method' => 'put']) !!}

{!! Form::label('type','タイプ：') !!}
{!! Form::text('type') !!}
<br>
{!! Form::label('content','内容：') !!}
{!! Form::text('content') !!}
<br>
{!! Form::submit('更新') !!}

{!! Form::close() !!}
@endsection