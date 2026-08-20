<?php

namespace App\Livewire;

use Livewire\Attributes\Validate;
use Livewire\Component;

class FormEditArticle extends Component
{


    #[Validate('required', message: 'Inserire obbligatoriamente un titolo.')]
    #[Validate('min:5', message: 'Il titolo deve contenere almeno 5 caratteri')]
    public $title;

    #[Validate('required', message: 'Inserire obbligatoriamente un titolo secondario.')]
    #[Validate('min:5', message: 'questo campo deve contenere almeno 5 caratteri')]
    public $subtitle;

    #[Validate('required', message: 'Inserire obbligatoriamente un contenutp.')]
    #[Validate('min:7', message: 'questo campo deve contenere almeno 7 caratteri')]
    public $body;

    public $article;


    public function mount() {

        $this->title = $this->article->title ;
        $this->subtitle = $this->article->subtitle;
        $this->body = $this->article->body;

    }


    public function updateArticle() {

    $this->validate();

    $this->article->update([

        'title' => $this->title,
        'subtitle' => $this->subtitle,
        'body' => $this->body

    ]);

    // Article::create([
    //     'title' => $this->title,
    //     'subtitle' => $this->subtitle,
    //     'body' => $this->body
    //     ]);

    // $this->clearForm();
    // $this->reset();

    session()->flash('message' , 'Articolo correttamente modificato');

    }

    public function render()
    {
        return view('livewire.form-edit-article');
    }
}
