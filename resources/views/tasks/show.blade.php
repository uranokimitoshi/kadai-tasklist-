@extends('layouts.app')

@section('content')

    <h1>id = {{ $taskshow->id }} のメッセージ詳細ページ</h1>

    <table class="table table-bordered">
        <tr>
            <th>id</th>
            <td>{{ $taskshow->id }}</td>
        </tr>
        
        <tr>
            <th>内容</th>
            <td>{{ $taskshow->content }}</td>
        </tr>
    </table>
    {!! link_to_route('tasks.edit', 'このメッセージを編集', ['id' => $taskshow->id], ['class' => 'btn btn-light']) !!}

@endsection