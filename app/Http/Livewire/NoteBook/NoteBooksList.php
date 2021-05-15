<?php

namespace App\Http\Livewire\NoteBook;

use Livewire\Component;

class NoteBooksList extends Component
{
    public function render()
    {
        return view('livewire.note-book.note-books-list')
        ->extends('layouts.app')
        ->section('subcontent');
    }
}
