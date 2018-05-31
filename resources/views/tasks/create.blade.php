@extends('layouts.app')

@section('content')
<h1>タスクリスト</h1>

    {!! Form::model($task, ['route' => 'tasks.store']) !!}

        {!! Form::label('content', 'タスク:') !!}
        {!! Form::text('content') !!}

        {!! Form::submit('投稿') !!}

    {!! Form::close() !!}
<!-- Write content for each page here -->

@endsection