<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Article;

class TableArticle extends Component
{
    public function render()
    {

        $articles = Article::all();

        return view('livewire.table-article' , compact('articles') );
    }
}
