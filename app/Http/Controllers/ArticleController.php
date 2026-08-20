<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Article;

class ArticleController extends Controller
{

    public function create () {

        return view ('articles.create');

    }

    public function index () {

        return view ('articles.index');

    }

    public function show (Article $article ) {

        return view ('articles.show' , compact ('article'));

    }

    public function edit (Article $article ) {

        return view ('articles.edit' , compact ('article'));

    }


    // public function store(Request $request)
    // {
    // $article = Article::create([
    //     'title' => $request->title,
    //     'subtitle' => $request->subtitle,
    //     'body' => $request->body,
    //     ]);

    //     return redirect()->route('articles.index');
    // }


}
