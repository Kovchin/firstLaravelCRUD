@extends('layouts.crud')

@section('content')

    <h1>Пост № {{$post->id}}</h1>

            <p>{{$post->title}}</p>
            <p>{{$post->body}}</p>

            <a class="btn btn-success" href="{{route('CRUD.edit', $post->id)}}"> Изменить </a>
    <form method="POST" action="{{'CRUD.destroy'}}">
        <input type="hidden" name="_method" value="DELETE">
        <submit class="btn btn-danger">Удалить</submit>
    </form>

@endsection
