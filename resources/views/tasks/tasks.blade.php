<table class="table striped">
    <thead>
        <tr>
            <th>id</th>
            <th>タスク内容</th>
            <th>状態</th>
            <th></th>
        </tr>
    </thead>
    @foreach( $tasks as $task)
        <tr>
            <td>{!! link_to_route('tasks.show', $task->id, ['task' => $task] ) !!}</td>
            <td>{!! nl2br(e($task->content)) !!}</td>
            <td>{{ $task->status }}</td>
            <td>
                @if(Auth::id() == $task->user_id)
                    {!! Form::open(['route' => ['tasks.destroy', $task->id], 'method' => 'delete']) !!}
                        {!! Form::submit('Delete', ['class' => 'btn btn-danger btn-sm']) !!}
                    {!! Form::close() !!}
                @endif
            </td>
        </tr>
    @endforeach()
    {{ $tasks->render('pagination::bootstrap-4') }}
</table>