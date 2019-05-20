@extends('layouts.app')
@section('content')
    @if(Auth::check())
        <h2>{{ Auth::user()->name }}のタスク一覧</h2>
        @if(Auth::id() == $user->id)
            {!! Form::open(['route' => 'tasks.store']) !!}
                <div class="row form-group">
                    <div class="col-sm-9">
                        {!! Form::label('content', '内容') !!}
                        {!! Form::text('content', old('content'), ['class' => 'form-control', 'row' => '3']) !!}
                    </div>
                    <div class="col-sm-3">
                        {!! Form::label('status', '状態') !!}
                        {!! Form::text('status', old('status'), ['class' => 'form-control']) !!}
                    </div>
                        {!! Form::submit('Post', ['class' => 'btn btn-primary btn-block']) !!}
                </div>
            {!! Form::close() !!}
            @if(count($tasks) > 0)
                @include('tasks.tasks', ['tasks' => $tasks])
            @else
                <p>タスクはありません</p>
            @endif
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