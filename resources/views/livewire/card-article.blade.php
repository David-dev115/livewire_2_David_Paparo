<div>
    {{-- Close your eyes. Count to one. That is how long forever feels. --}}

    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12 d-flex justify-content-center">

                <div class="card" style="width: 18rem;">
                    {{-- <img src="https://picsum.photos/800/600" class="card-img-top" alt="immagine articolo"> --}}
                    <img src="{{ Storage::url($article->image) }}" class="card-img-top" alt="immagine articolo">
                    <div class="card-body">
                        <h5 class="card-title">{{$article->title}}</h5>
                        {{-- <h6 class="card-title">{{$article->subtitle}}</h6> --}}
                        <h6 class="card-subtitle mb-2 text-body-secondary">{{$article->subtitle}}</h6>
                        <p class="card-text" > {{$article->body}}</p>
                        <a href="{{route('articles.index')}}" class="card-link">Torna indietro</a>
                        {{-- <a href="#" class="card-link">Another link</a> --}}
                        {{-- <a href="#" class="btn btn-primary">Go somewhere</a> --}}
                    </div>
                </div>

            </div>
        </div>
    </div>
</div>
