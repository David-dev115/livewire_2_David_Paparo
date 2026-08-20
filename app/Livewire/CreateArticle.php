<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Article;
use Livewire\Attributes\Validate;

class CreateArticle extends Component
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



    public function store() {

    $this->validate();

    Article::create([
        'title' => $this->title,
        'subtitle' => $this->subtitle,
        'body' => $this->body
        ]);

    // $this->clearForm();
    $this->reset();

    session()->flash('message' , 'Articolo correttamente creato');

    }

    // protected function clearForm () {

    // $this->title = "";
    // $this->subtitle = "";
    // $this->body = "";

    // }


    public function render()
    {
        return view('livewire.create-article');
    }
}
