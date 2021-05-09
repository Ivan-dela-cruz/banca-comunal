<?php

namespace App\Http\Livewire\NoteBook;

use Livewire\Component;

class NoteBooks extends Component
{
    public $title,$subtitle,$image,$info1,$info2,$info3,$number,$sec,$cod,$account_num,$member_id;
    public $type = "POST";
    public function render()
    {
        return view('livewire.note-book.note-books')
        ->extends('layouts.app')
        ->section('subcontent');
    }
}
