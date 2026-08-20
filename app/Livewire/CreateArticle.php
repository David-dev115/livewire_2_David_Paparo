<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Article;
use Livewire\Attributes\Validate;

use Livewire\WithFileUploads;

class CreateArticle extends Component
{

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

    #[Validate('nullable|image|max:2048', message: 'Seleziona un\'immagine).')]
    public $image;



    public function store() {

    $this->validate();

    // dd($this->image);
    // dd($this->image->store('articles', 'public'));

    // if ($this->image) {
    // $image = $this->image->store('articles', 'public');
    // } else {
    // $image = 'articles/default.jpg';
    // }

    if ($this->image) {
    $image = $this->image->store('articles', 'public');

    dd($image);
    } else {
    $image = 'articles/default.jpg';
        }

    Article::create([
        'title' => $this->title,
        'subtitle' => $this->subtitle,
        'body' => $this->body,
        'image' => $image
        ]);

    // $this->clearForm();
    // $this->reset();

    session()->flash('message' , 'Articolo correttamente creato');

    return redirect()->route('articles.index');

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
