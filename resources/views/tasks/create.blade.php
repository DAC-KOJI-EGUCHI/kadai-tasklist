@extends('layouts.app')

@section('content')

    <h1>新規タスク作成ページ</h1>
    <div class="row">
        <div class="col-6">
            {!! Form::model($task, ['route' => 'tasks.store']) !!}
            
                <div class="form-group">
                    {!! Form::label('content', 'タスク内容:') !!}
                    {!! Form::text('content', old('content'), ['class' => 'form-control']) !!}
                </div>
                
                <div class="form-group">
                    {!! Form::label('status', '状態:') !!}
                    {!! Form::text('status', old('content'), ['class' => 'form-control']) !!}
                </div>
                
                {!! Form::submit('作成', ['class' => 'btn btn-primary']) !!}
            
            {!! Form::close() !!}
        </div>
    </div>

@endsection