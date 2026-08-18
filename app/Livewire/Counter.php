<?php

namespace App\Livewire;

use Livewire\Component;

class Counter extends Component

{

    public $count = 1;

    public $numx = 100;

    public function increment () {

        $this->count++;

    }

    public function decrement () {

        $this->count--;

    }

    public function incrementByNum ($num) {

        $this->count+=$num;

    }

    public function decreaseByNum ($num) {

        $this->count-=$num;

        }

    public function render()
    {
        return view('livewire.counter');
    }
}



