<?php

namespace App\Http\Livewire\Credit;

use Livewire\Component;

class Credits extends Component
{
    public function render()
    {
        return view('livewire.credit.credits')
        ->extends('layouts.app')
        ->section('subcontent');;
    }
}
