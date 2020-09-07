@extends('layouts.crud')

@section('content')
    <h1><a href="{{route('CRUD.create')}}">CRUD</a></h1>
    <table class="table">
        <tr>
            <th>Заголовок поста</th>
            <th>Тело поста</th>
            <th colspan="2">Манипуляции</th>
        </tr>
        @foreach($posts as $post)
            <tr>
                <td>{{$post->title}}</td>
                <td>{{$post->body}}</td>
                <td>
                    <a class="btn btn-info" href="{{route('CRUD.show', $post->id)}}">Посмотреть</a>
                </td>
                <td>
                    <a class="btn btn-success" href="{{route('CRUD.edit', $post->id)}}">Изменить</a>
                </td>
                <td>
                    <form method="POST" action="/CRUD/{{$post->id}}">
                        {{csrf_field()}}
                        <input type="hidden" name="_method" value="DELETE">
                        <input class="btn btn-danger" type="submit" value="Удалить">
                    </form>
                </td>
            </tr>
        @endforeach
    </table>
@endsection
