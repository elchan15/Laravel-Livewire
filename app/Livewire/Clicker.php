<?php

namespace App\Livewire;

use App\Models\User;
use Livewire\Component;

class Clicker extends Component
{
    public $txtname;
    public $txtemail;
    public $txtpassword;

    public function createNewUser(){
       User::create([
            'name'=> $this->txtname,
            'email'=> $this->txtemail,
            'password'=> $this->txtpassword,
        ]);
       
    }
    
    public function render()
    {
        $titles = "Testing";
        $users = User::all();

        return view('livewire.clicker', [
            'title' => $titles,
            'users' => $users,

        ]);
    }
}
