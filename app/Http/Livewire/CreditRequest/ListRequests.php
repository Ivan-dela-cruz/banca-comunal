<?php

namespace App\Http\Livewire\CreditRequest;

use Livewire\Component;

class ListRequests extends Component
{
    public function render()
    {
        return view('livewire.credit-request.list-requests')
        ->extends('layouts.app')
        ->section('subcontent');
    }
}
