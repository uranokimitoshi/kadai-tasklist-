@extends('layouts.app')

@section('content')

    <h1>id = {{ $taskshow->id }} の詳細ページ</h1>

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
    {!! link_to_route('tasks.edit', '編集', ['id' => $taskshow->id], ['class' => 'btn btn-light']) !!}
    {!! Form::model($taskshow,["route"=>["tasks.destroy",$taskshow->id],"method"=>"delete"]) !!}
    {!! Form::submit('削除', ['class' => 'btn btn-danger']) !!}
     {!! Form::close() !!}
@endsection