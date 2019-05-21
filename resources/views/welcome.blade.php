@extends('layouts.app')
@section('content')
    @if(Auth::check())
        <h2>{{ Auth::user()->name }}のタスク一覧</h2>
        @if(Auth::id() == $user->id)
            @if(count($tasks) > 0)
                @include('tasks.tasks', ['tasks' => $tasks])
            @else
                <p>タスクはありません</p>
            @endif
            {!! link_to_route('tasks.create', '新規タスクの立上げ', null, ['class' => 'btn btn-primary']) !!}
        @endif
    @else
    <div class="center jumbotron">
        <div class="text center">
            <h1>Welcome to the TaskList</h1>
            {!! link_to_route('signup.get', 'Sign up now!', [], ['class' => 'btn btn-lg btn-primary']) !!}
        </div>
    </div>
    @endif
@endsection