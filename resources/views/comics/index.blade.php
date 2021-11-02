@extends('layout.app')

@section('content')
    <div class="container">
        
        <ul>
            @foreach ($comics as $comic)
            <a href=" {{ route('comics.show')}}">
                <li>{{$comic['title']}}</li>
            </a>
            @endforeach
            
        </ul>

    </div>
@endsection