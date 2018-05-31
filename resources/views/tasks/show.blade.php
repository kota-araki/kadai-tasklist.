@extends('layouts.app')

@section('content')
<h1>id = {{ $task->id }} のタスク詳細ページ</h1>
 <p>ステイタス: {{ $task->status }}</p>    
 <p>メッセージ: {{ $task->content }}</p> 
    
{!! link_to_route('tasks.edit', 'このタスクを編集', ['id' => $task->id]) !!}
{!! Form::model($task, ['route' => ['tasks.destroy', $task->id], 'method' => 'delete']) !!}
        {!! Form::submit('削除') !!}
    {!! Form::close() !!}
<!-- Write content for each page here -->

@endsection