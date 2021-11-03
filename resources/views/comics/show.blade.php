@extends('layout.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="card" style="width: 18rem;">
                    <img src="{{ $comic['thumb'] }}" class="card-img-top" alt="{{ $comic['title'] }}">
                    <div class="card-body">
                      <h5 class="card-title">{{ $comic['title'] }}</h5>
                      <p class="card-text">{!! $comic['description'] !!}</p>
                      <h5 class="card-title">€ {{ $comic['price'] }}</h5>
                      <h6 class="card-text">{{ $comic['series'] }}</h6>
                      <h6 class="card-text">{{ $comic['sale_date'] }}</h6>
                      <p class="card-text">{{ $comic['type'] }}</p>
                      <a href="{{ route('comics.index')}}" class="btn btn-primary">Lista fumetti</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection