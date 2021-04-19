<?php

namespace App\Http\Livewire\Members;

use App\Models\MemberReference;
use Livewire\Component;

class References extends Component
{

    public $reference_id, $member_id, $name, $last_name, $dni, $relationship, $instruction, $time_to_meet;

    public $action = 'STORE';

    public function render()
    {

        return view('livewire.members.references', compact('data_reference'));
    }





    public function resetInputFields()
    {
        $this->action = 'STORE';
        $this->reference_id = null;
        $this->member_id = null;
        $this->name = '';
        $this->last_name = '';
        $this->dni = '';
        $this->relationship = '';
        $this->instruction = '';
        $this->time_to_meet = '';
    }




}
