@extends('layouts.crud')


@section('content')
    <h1>Форма для создания сообщения</h1>

    <form class="form" method="post" action="/CRUD">
        {{csrf_field()}}
        <div class="row">

            <input type="text" name="title" placeholder="Заголовок сообщения">
        </div>
        <div class="row">
            <textarea name="body" cols="30" rows="10" placeholder="Ваше сообщение"></textarea>
        </div>
        <div class="row">
            <input class="btn btn-primary" type="submit" value="Создать">
        </div>
    </form>

@endsection


@yield('footer')
