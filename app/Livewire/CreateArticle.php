<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Article;
use Livewire\Attributes\Validate;

use Livewire\WithFileUploads;


class CreateArticle extends Component
{

    // riferimento documentazione
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

    // https://livewire.laravel.com/docs/4.x/uploads
    #[Validate('nullable|image|max:1024')]
    public $image;



    public function store() {

    $this->validate();


    if ($this->image) {
    $image = $this->image->store('articles', 'public');

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

//     public function store()
// {
//     $this->validate();

//     if ($this->image) {
//         $image = $this->image->store('articles', 'public');

//         dd('IMMAGINE PRESENTE', $image);
//     } else {
//         dd('IMMAGINE ASSENTE');
//     }
// }










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
