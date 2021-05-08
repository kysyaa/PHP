@extends('welcome')
@section('content')
<h3>Update</h3>
<table>

  
    <form action="{{route('NewsTest.update', $news )}}" method="POST">
    @csrf
    @isset($news)
    @method('PUT')
    @endisset
    ID:<input type="text" name="id" id="id" value="{{ old('id',  $news->id)}}"></br>
    Заголовок:</br><input type="text" name="title" id="title" value="{{ old('title', $news->title)}}"></br>
    @error('title')
       {{ $message }}
       </br>
    @enderror
    Текст: </br><input type="text" name="text" id="text" value="{{ old('content',  $news->content)}}"></br>
    @error('text')
       {{ $message }}
       </br>
    @enderror
    Введите дату:</br> <input type="date" name="date" id="date" value="{{ old('date',  $news->date)}}"></br>
  
    </br><input type="submit" value="Обновить">
    
     
</form>

</table>

  @endsection