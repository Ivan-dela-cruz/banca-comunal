<?php

namespace App\Http\Livewire\Members;

use Livewire\Component;

class Profile extends Component
{

    public function render()
    {
        return view('livewire.members.profile')
        ->extends('layouts.app')
        ->section('subcontent');
    }
}
