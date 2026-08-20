<div>


    {{-- @if (session('message'))
    <div class="alert alert-success" >
        {{ session('message') }}

    </div>
    @endif --}}

    <form wire:submit="store">

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
            <label for="image" class="form-label">Immagine</label>
            <input wire:model="image" type="file" class="form-control" id="image" accept="image/*">
            @error('image')<div class="text-r">{{ $message }}</div>@enderror
        </div>


        <button type="submit" class="btn btn-primary">Crea</button>
    </form>


</div>
