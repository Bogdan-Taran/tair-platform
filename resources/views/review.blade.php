@extends('layout')
@section('title')Отзывы@endsection

@section('main-content')

<div class="container text-white">
<h1>Отзывы</h1>

@if($errors->any())
    <div class="alert alert-danger">
            <ul>
                @foreach($errors->all() as $error)
                <li>{{ $error }}</li>
                @endforeach
            </ul>
    </div>
@endif

<form method="post" action="review/check">
    @csrf
    <input type="text" name="firstname" id="firstname" placeholder="Введите имя"><br>
    <input type="text" name="lastname" id="lastname" placeholder="Введите фамилию"><br>
    <input type="email" name="email" id="email" placeholder="Введите email"><br>
    <input type="textarea" name="message" id="message" placeholder="Введите сообщение"><br>
    <button type="submit">Сохранить</button>
</form>
</div>

<h1 class="text-white">
    Все записи
</h1>

@foreach($reviews as $el)

<div class="text-white">
<h3>{{ $el->firstname }}</h3>

</div>

@endforeach
@endsection
