<?php

namespace App\Livewire;

use App\Models\User;
use Livewire\Component;

class Clicker extends Component
{
    public $sample = 12345;
    public function createNewUser(){
        User::create([
            'name'=>'abc cgdhs2',
            'email'=>'abc2@gmail.com',
            'password'=>'123452',
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
