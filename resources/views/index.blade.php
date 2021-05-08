@extends('welcome')
@section('content')

<table>
<tr>
        <td>ID</td>
        <td>Title</td>
        <td>Text</td>
        <td>Date</td>
        
    
    
    
    </tr>
@foreach($news as $new)
    
    <tr>
        <td>{{$new->id}}</td>
        <td>{{$new->title}}</td>
        <td>{{$new->content}}</td>
        <td>{{$new->date}}</td>
        <td><a href="{{ route('NewsTest.edit', $new) }}"><button">Edit</button></a></td>
        <form action="{{ route('NewsTest.destroy', $new) }}" method="post">
        @csrf
        @method('DELETE')
        <td><button type="submit">Delete</button></td>
        </form>
    </tr>
    @endforeach
</table>
@endsection
