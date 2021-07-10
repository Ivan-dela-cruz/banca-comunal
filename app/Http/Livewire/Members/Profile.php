<?php

namespace App\Http\Livewire\Members;

use Livewire\Component;

class Profile extends Component
{
    public $member_id,$member;

    public function mount($id)
    {
        $this->credit_request = CreditRequest::find($id);
        $this->member = Member::find($this->credit_request->member_id);
        $this->member_detail = $this->member->detail;
    }

    public function render()
    {
        return view('livewire.members.profile')
        ->extends('layouts.app')
        ->section('subcontent');
    }
}
