<?php

namespace App\Http\Livewire;
use App\Models\User;
use Livewire\Component;
 
class Showusers extends Component
{
    public function render()
    {        
        return view('livewire.showusers', ['posts' => User::all(),
        ]);
    }
}
