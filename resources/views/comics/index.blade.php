@extends('layout.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h1 class="mt-4 mb-4">Tutti i fumetti</h1>
                <table class="table table-striped">
                    <thead>
                      <tr>
                        <th scope="col">#</th>
                        <th scope="col">Title</th>
                        <th scope="col">Description</th>
                        <th scope="col">Price</th>
                        <th scope="col">Series</th>
                      </tr>
                    </thead>
                    <tbody>
                        @foreach ($comics as $comic)
                            <tr>
                                <th scope="row">{{ $comic['id'] }}</th>
                                <td>{{ $comic['title'] }}</td>
                                <td>{!! $comic['description'] !!}</td>
                                <td>{{ $comic['price'] }}</td>
                                <td>
                                    <a href="{{ route('comics.show', $comic->id)}}"
                                        class="btn btn-info">
                                        Details
                                    </a>
                                    <a href="{{ route('comics.create', $comic['id']) }}"
                                        class="btn btn-warning">
                                        Modify
                                    </a>
                                    <form method="post" action="">
                                        <button type="submit" class="btn btn-danger">Delete</button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
        
        {{-- <ul>
            @foreach ($comics as $comic)
            <a href=" {{ route('comics.show', $comic->id)}}">
                <li>{{$comic['title']}}</li>
            </a>
            @endforeach
            
        </ul> --}}

    </div>
@endsection