<?php

namespace App\Livewire;

use Livewire\Attributes\Validate;
use Livewire\Component;

// https://livewire.laravel.com/docs/4.x/uploads
use Livewire\WithFileUploads;

class FormEditArticle extends Component
{

// https://livewire.laravel.com/docs/4.x/uploads
    use WithFileUploads;


    #[Validate('required', message: 'Inserire obbligatoriamente un titolo.')]
    #[Validate('min:5', message: 'Il titolo deve contenere almeno 5 caratteri')]
    public $title;

    #[Validate('required', message: 'Inserire obbligatoriamente un titolo secondario.')]
    #[Validate('min:5', message: 'questo campo deve contenere almeno 5 caratteri')]
    public $subtitle;

    #[Validate('required', message: 'Inserire obbligatoriamente un contenutp.')]
    #[Validate('min:7', message: 'questo campo deve contenere almeno 7 caratteri')]
    public $body;

    # !!
    #[Validate('nullable|image|max:1024')]
    public $image;

    public $article;


    public function mount() {

        $this->title = $this->article->title ;
        $this->subtitle = $this->article->subtitle;
        $this->body = $this->article->body;

    }


    public function updateArticle() {

    $this->validate();

    if ($this->image) {
        $image = $this->image->store('articles', 'public');
    } else {
        $image = $this->article->image;
    }

    $this->article->update([

        'title' => $this->title,
        'subtitle' => $this->subtitle,
        'body' => $this->body,
        'image' => $image

    ]);

    // Article::create([
    //     'title' => $this->title,
    //     'subtitle' => $this->subtitle,
    //     'body' => $this->body
    //     ]);

    // $this->clearForm();
    // $this->reset();

    session()->flash('message' , 'Articolo correttamente modificato');


    // da valutare
    return redirect()->route('articles.index');


    }

    public function render()
    {
        return view('livewire.form-edit-article');
    }
}
