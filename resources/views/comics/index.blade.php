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
                                    <a href="{{ route('comics.edit', $comic['id']) }}"
                                        class="btn btn-warning">
                                        Modify
                                    </a>
                                    <form method="post" action="{{ route('comics.destroy', $comic['id']) }}">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-danger" onclick="return myFunction();">Delete</button>
                                        
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>

    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
       <script>  

        function myFunction() {
            var txt;
            var r = confirm("Sicuro di voler cancellare il record?");
            if (r == true) {
                
            } else {
                return false;;
            }
        }
        
       </script>
    </div>
@endsection