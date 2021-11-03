<div class="container">
    <div class="row " >
        <h1 style="text-align: center; margin: 30px">Comic World</h1>
        
        <div class="coll-12 gy-5 gx-5 d-flex justify-content-between align-items-center flex-wrap" style="">
            @foreach ($comics as $comic)
            <a href="{{ route('comics.show', $comic->id)}}">
                <img style="margin: 10px" src="{{ $comic['thumb'] }}" class="rounded mx-auto d-block" alt="{{ $comic['title'] }}">
            </a>
            @endforeach
        
        </div>
       
        
    </div>

</div>