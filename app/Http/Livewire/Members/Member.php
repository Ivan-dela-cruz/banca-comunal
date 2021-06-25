<?php

namespace App\Http\Livewire\Members;

use Livewire\Component;
use App\Models\Member as MemberData;
use Livewire\WithPagination;
class Member extends Component
{
    use WithPagination;

    protected $queryString = [
        'search' => ['except' => ''],
        'perPage' => ['except' => '6'],
    ];
    public $perPage = '6';
    public $search = '';

    public function render()
    {
        $members = MemberData::orderBy('name','ASC')->paginate($this->perPage);
        return view('livewire.members.member',compact('members'))
        ->extends('layouts.app')
        ->section('subcontent');
    }


}
