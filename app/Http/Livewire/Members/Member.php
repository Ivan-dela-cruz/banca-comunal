<?php

namespace App\Http\Livewire\Members;

use Livewire\Component;
use App\Models\Member as MemberData;
use Livewire\WithPagination;
class Member extends Component
{
    use WithPagination;
   
    public function render()
    {
        $members = MemberData::orderBy('name','ASC')->paginate(6);
        return view('livewire.members.member',compact('members'))
        ->extends('layouts.app')
        ->section('subcontent');
    }
}
