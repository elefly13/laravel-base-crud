@extends('layout.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="coll-12">
                <form action="{{ route('comics.store') }}" method="post">
                    @csrf
                    @method('POST')
                   

                    <div class="form-group">
                        <label for="title">Title</label>
                        <input value="{{ $comic['title'] }}" type="text" name="title" class="form-control" id="title" placeholder="Enter name of comic">
                    </div>

                    <div class="form-group">
                        <label for="description">Description</label>
                        <textarea class="form-control" id="description" name="description">{!! $comic['description'] !!}</textarea>
                    </div>

                    <div class="form-group">
                        <label for="thumb">Thumb</label>
                        <input value="{{ $comic['thumb'] }}" type="text" name="thumb" class="form-control" id="thumb" placeholder="Enter path image comic">
                    </div>

                    <div class="form-group">
                        <label for="price">Price</label>
                        <input value="{{ $comic['price'] }}" type="text" name="price" class="form-control" id="price" placeholder="Enter price of comic">
                    </div>

                    <div class="form-group">
                        <label for="series">Series</label>
                        <input value="{{ $comic['series'] }}" type="text" name="series" class="form-control" id="series" placeholder="Enter series of comic">
                    </div>

                    <div class="form-group">
                        <label for="sale_date">Sale_date</label>
                        <input value="{{ $comic['sale_date'] }}" type="text" name="sale_date" class="form-control" id="sale_date" placeholder="Enter sale_date of comic yyyy-mm-dd">
                    </div>

                    <div class="form-group">
                        <label for="type">Type</label>
                        <select class="form-control" name="type" id="type">
                            <option value="">-- Seleziona --</option>
                            <option value="comic book" {{ $comic['type'] == 'comic book' ? 'selected' : NULL}}>Comic book</option>
                            <option value="graphic novel" {{ $comic['type'] == 'graphic novel' ? 'selected' : NULL}}>Graphic novel</option>
                        </select>
                    </div>
                   
                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>

            </div>
        </div>
    </div>
@endsection