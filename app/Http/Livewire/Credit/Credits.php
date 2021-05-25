<?php

namespace App\Http\Livewire\Credit;

use Livewire\Component;
use App\Models\Credits as Credit;
class Credits extends Component
{
    public function render()
    {
        $credits = Credit::all();
        return view('livewire.credit.credits',compact('credits'))
        ->extends('layouts.app')
        ->section('subcontent');;
    }
}
