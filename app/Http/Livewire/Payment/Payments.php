<?php

namespace App\Http\Livewire\Payment;

use Livewire\Component;

class Payments extends Component
{
    public function render()
    {
        return view('livewire.payment.payments')
        ->extends('layouts.app')
        ->section('subcontent');
    }
}
