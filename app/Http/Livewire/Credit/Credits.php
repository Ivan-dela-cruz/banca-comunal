<?php

namespace App\Http\Livewire\Credit;

use Livewire\Component;
use App\Models\Credits as Credit;
use Livewire\WithPagination;

class Credits extends Component
{
    use WithPagination;

    protected $queryString = [
        'search' => ['except' => ''],
        'perPage' => ['except' => '10'],
    ];
    public $perPage = '10';
    public $search = '';
    public function render()
    {
        $credits = Credit::paginate($this->perPage);
        return view('livewire.credit.credits',compact('credits'))
        ->extends('layouts.app')
        ->section('subcontent');
    }
}
