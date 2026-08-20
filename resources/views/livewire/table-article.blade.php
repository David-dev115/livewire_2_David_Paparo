<div>
    {{-- Care about people's approval and you will be their prisoner. --}}
    
    
    <table class="table">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Titolo</th>
                <th scope="col">Sottotitolo</th>
                <th scope="col">Gestisci</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($articles as $article)
            
            <tr>
                <th scope="row">{{$article->id}}</th>
                <td>{{$article->title}}</td>
                <td>{{$article->subtitle}}</td>
                <td>
                    <a href="{{route('articles.show' , compact('article'))}}" class="btn btn-info" >Dettaglio</a>
                    <a href="{{route('articles.edit' , compact('article'))}}" class="btn btn-warning" >Modifica</a>
                    <button class="btn btn-danger" >Elimina</button>

                </td>
            </tr>
            
            @endforeach
            
            
        </tbody>
    </table>
    
    
</div>
