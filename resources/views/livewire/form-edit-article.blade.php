<div>


    @if (session('message'))
    <div class="alert alert-success" >
        {{ session('message') }}

    </div>
    @endif

    <form wire:submit="updateArticle">

        <div class="mb-3">
            <label for="title" class="form-label">Titolo Articolo</label>
            <input wire:model.live="title" type="text" class="form-control" id="title">
            <div class= "text-r"> @error('title') {{$message}} @enderror </div>
        </div>
        <div class="mb-3">
            <label for="subtitle" class="form-label">Titolo secondario</label>
            <input wire:model.live.blur="subtitle" type="text" class="form-control" id="subtitle">
            <div class= "text-r"> @error('subtitle') {{$message}} @enderror </div>

        </div>
        <div class="mb-3">
            <label for="body" class="form-label">Contenuto Articolo</label>
            <textarea wire:model.live.blur="body" name="body" id="body" cols="30" rows="10" class="form-control"></textarea>
            <div class= "text-r"> @error('body') {{$message}} @enderror </div>

        </div>

        <div class="mb-3">
            <label for="image" class="form-label">Sostituisci immagine</label>

            <div>
                <img src="{{ asset('storage/' . $article->image) }}" alt="Immagine attuale dell'articolo" class="" style="max-width: 250px;"
                >
            </div>

            <input wire:model="image" type="file" class="form-control" id="image" accept="image/*">

            <div wire:loading wire:target="image" class="mt-2">
                Caricamento immagine... ATTENDI caricamento prima di confermare l'operazione
            </div>

            @if ($image)
            <div wire:loading.remove wire:target="image" class="mt-2">
                Nuova immagine caricata. Adesso puoi cliccare su "MODIFICA"
            </div>
            @endif

            @error('image')
            <div class="text-r">{{ $message }}</div>
            @enderror

        </div>



        <button type="submit" class="btn btn-primary">Modifica</button>
        {{-- <button type="submit" class="btn btn-primary" href="">Torna indietro senza modifiche</button> --}}
        <a href="{{route('articles.index')}}" class="btn btn-primary">Torna indietro</a>

    </form>
</div>
