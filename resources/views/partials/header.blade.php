<div class="container">
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container-fluid">
          <a class="navbar-brand" href="#">Comics</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="{{ route('pagina-home')}}">Home</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="{{ route('comics.create')}}">Aggiungi un fumetto</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="{{ route('comics.index')}}" >Lista dei fumetti</a>
              </li>
            </ul>
          </div>
        </div>
      </nav>
</div>