@extends('welcome')
@section('content')
<h3>Create new</h3>
    <form action="{{ route('NewsTest.store') }}" method="POST">
    @csrf
    Заголовок:</br><input type="text" name="title" id="title"></br>
    @error('title')
       {{ $message }}
       </br>
    @enderror
    Текст: </br><input type="text" name="text" id="text"></br>
    @error('text')
       {{ $message }}
       </br>
    @enderror
    Введите дату:</br> <input type="date" name="date" id="date"></br>
    @error('date')
       {{ $message }}
       </br>
    @enderror
    </br><button type="submit" name="button">Сделать запись</button>
</form>


@endsection