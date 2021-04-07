<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Event;
class ShowEvents extends Component
{
    public function render()
    {
        $events = Event::get();

        // return view('event.index', compact('events'));
        // ou assim
        return view('livewire.show-events', [
            'events' => $events
        ]) ->extends('layouts.app')
        ->section('subcontent');
    }
}
