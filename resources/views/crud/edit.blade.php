@extends('layouts.crud')

@section('content')

    <h1>Изменить сообщение № {{$post->id}}</h1>
    <form method="post" action="/CRUD/{{$post->id}}">
        {{csrf_field()}}
        <div class="row">
            <input type="hidden" name="_method" value="PUT">
        </div>

        <div class="row">
            <input class="col" type="text" name="title" value="{{$post->title}}">
        </div>

        <div class="row">
            <textarea class="col" name="body">{{$post->body}}</textarea>
        </div>

        <div class="row">
            <input class="btn btn-primary" type="submit" value="Изменить">
        </div>
    </form>
    <form method="POST" action="/CRUD/{{$post->id}}">
        {{csrf_field()}}
        <input type="hidden" name="_method" value="DELETE">
        <input class="btn btn-danger" type="submit" value="Удалить">
    </form>


@endsection
