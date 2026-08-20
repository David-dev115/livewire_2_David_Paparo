<div>

    @if (session()->has('message'))
    <div class="alert alert-success">
        {{ session('message') }}
    </div>
    @endif


    <table class="table">
        <thead>
            <tr class="text-center">
                <th scope="col">#</th>
                <th scope="col">Titolo</th>
                <th scope="col">Sottotitolo</th>
                <th scope="col">Gestisci</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($articles as $article)

            <tr class="text-center">
                <th scope="row">{{$article->id}}</th>
                <td>{{$article->title}}</td>
                <td>{{$article->subtitle}}</td>
                <td>
                    <a href="{{route('articles.show' , compact('article'))}}" class="btn btn-info" >Dettaglio</a>
                    <a href="{{route('articles.edit' , compact('article'))}}" class="btn btn-warning" >Modifica</a>
                    <button  wire:click="destroy({{$article}})"
                     wire:confirm="Sei sicuro di voler eliminare questo articolo?"
                    class="btn btn-danger" >Elimina</button>

                </td>
            </tr>

            @endforeach


        </tbody>
    </table>


</div>
