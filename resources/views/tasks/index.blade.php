@extends('layouts.app')

@section('content')

    <h1>タスク一覧</h1>
    
    @if (count($tasks) > 0)
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>id</th>
                    <th>タスク内容</th>
                    <th>状態</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($tasks as $task)
                <tr>
                    <td>{!! link_to_route('tasks.show', $task->id, ['id' => $task->id]) !!}</td>
                    <td>{{ $task->content }}</td>
                    <td>{{ $task->status }}</td>
                </tr>
                @endforeach
            </tbody>
        </table>
    @else
    <p>タスクはありません。</p>
    @endif
    
    {!! link_to_route('tasks.create', '新規タスクの立上げ', null, ['class' => 'btn btn-primary']) !!}
    

@endsection