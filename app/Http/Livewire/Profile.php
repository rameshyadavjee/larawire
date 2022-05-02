<?php

namespace App\Http\Livewire;
use App\Models\User;
use Auth;
use Livewire\Component;

class Profile extends Component
{
    public $username,$email,$created_at; 

    public function render()
    {
        return view('livewire.profile');
    }
}
