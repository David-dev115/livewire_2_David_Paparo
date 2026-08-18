<div>
    {{-- Nothing in the world is as soft and yielding as water. --}}
    
    @if (session('message'))
        <div class="alert alert-success" >
            {{ session('message') }}

        </div>
    @endif

    <form wire:submit="store">
        
        <div class="mb-3">
            <label for="title" class="form-label">Titolo Articolo</label>
            <input wire:model="title" type="text" class="form-control" id="title">
            <div> @error('title') {{$message}} @enderror </div>
        </div>
        <div class="mb-3">
            <label for="subtitle" class="form-label">Titolo secondario</label>
            <input wire:model="subtitle" type="text" class="form-control" id="subtitle">
            <div> @error('subtitle') {{$message}} @enderror </div>

        </div>
        <div class="mb-3">
            <label for="body" class="form-label">Contenuto Articolo</label>
            <textarea wire:model="body" name="body" id="body" cols="30" rows="10" class="form-control"></textarea>
            <div> @error('body') {{$message}} @enderror </div>

        </div>
        
        
        <button type="submit" class="btn btn-primary">Crea</button>
    </form>
    
    
</div>
