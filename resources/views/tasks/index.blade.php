@extends('layouts.app')

@section('content')

    <h1>タスク一覧</h1>

    @if (count($tasksindex) > 0)
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>id</th>
                    
                    <th>内容</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($tasksindex as $tasksindex)
                <tr>
                    <td>{!! link_to_route('tasks.show', $tasksindex->id, ['id' => $tasksindex->id]) !!}</td>
                   
                    
                    <td>{{ $tasksindex->content }}</td>
                </tr>
                @endforeach
            </tbody>
        </table>
     @endif
    
    {!! link_to_route('tasks.create', '新規投稿', [], ['class' => 'btn btn-primary']) !!}

@endsection