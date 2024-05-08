<?php

namespace App\Livewire;

use Livewire\Component;

class Clicker extends Component
{
    public function handleClick(){
        dd("click");
    }
    
    public function render()
    {
        return view('livewire.clicker');
    }
}
