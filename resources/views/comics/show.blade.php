@extends('layout.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h1 class="mt-4 mb-4">Dettaglio {{ $comic['title'] }}</h1>
                <ul>
                    <li>{!! $comic['description'] !!}</li>
                    <li>{{ $comic['price'] }}</li>
                    <li>{{ $comic['series'] }}</li>
                    <li>{{ $comic['sale_date'] }}</li>
                    <li>{{ $comic['type'] }}</li>
                </ul>
            </div>
        </div>
    </div>
@endsection