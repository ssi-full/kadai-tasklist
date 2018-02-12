@extends('layouts.app')

@section('content')

    <h1>新規タスク登録</h1>
    
     {!! Form::model($task, ['route' => 'tasks.store']) !!}
     
     {!! Form::label('type' , 'タイプ：') !!}
     {!! Form::text('type')!!}
     <br>
     {!! Form::label('content' , '内容：') !!}
     {!! Form::text('content')!!}
     <br>
     {!! Form::submit('投稿') !!}
     {!! Form::close() !!}
     
@endsection     