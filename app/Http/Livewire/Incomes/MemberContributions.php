<?php

namespace App\Http\Livewire\Incomes;

use Livewire\Component;
use App\Models\Member;
use App\Models\MemberIncomeContribution;
use Livewire\WithPagination;

class MemberContributions extends Component
{
    use WithPagination;

    protected $queryString = [
        'search' => ['except' => ''],
        'perPage' => ['except' => '10'],
    ];
    public $perPage = '10';
    public $search = '';

    public $description, $data_id = 0, $doc_number, $number_account, $date, $amount, $status = true, $member_id = 0, $names = "", $action = 'POST';

    public function render()
    {
        $incomes = MemberIncomeContribution::where('member_id', $this->member_id)->paginate($this->perPage);
        return view('livewire.incomes.member-contributions', compact('incomes'))
            ->extends('layouts.app')
            ->section('subcontent');
    }

    public function store()
    {
        $data = [
            'member_id' => $this->member_id,
            'amount' => $this->amount,
            'date' => $this->date,
            'description' => $this->description,
            'status' => $this->status
        ];
        $income = MemberIncomeContribution::create($data);
        $this->data_id = $income->id;
        $this->action = 'PUT';
        $this->alert('success', '¡Datos registrados con exíto!');
        //$this->resetInputFields();
    }

    public function edit($in_id)
    {
        $income = MemberIncomeContribution::find($in_id);
        $this->doc_number = $income->member->doc_number;
        $this->number_account = $income->member->account_number;
        $this->amount = $income->amount;
        $this->status = $income->status;
        $this->date = $income->date;
        $this->member_id = $income->member->id;
        $this->names = $income->member->last_name . " " . $income->member->name;
        $this->description = $income->description;
        $this->data_id = $income->id;
        $this->action = 'PUT';
        $this->alert('success', '¡Datos  cargados con exíto!');

    }

    public function update()
    {
        $data = [
            'member_id' => $this->member_id,
            'amount' => $this->amount,
            'date' => $this->date,
            'description' => $this->description,
            'status' => $this->status
        ];
        $income = MemberIncomeContribution::find($this->data_id);
        $income->update($data);
        $this->alert('success', '¡Datos actualizados con exíto!');
    }

    public function resetInputFields()
    {
        $this->doc_number = "";
        $this->number_account = "";
        $this->amount = "";
        $this->status = true;
        $this->member_id = 0;
        $this->names = "";
        $this->description = "";
        $this->data_id = 0;
        $this->action = 'POST';
    }

    public function findMember()
    {
        $member = Member::where('doc_number', $this->doc_number)->first();
        if (isset($member)) {
            $this->number_account = $member->account_number;
            $this->member_id = $member->id;
            $this->names = $member->last_name . " " . $member->name;
            $this->alert('success', '¡Datos  cargados con exíto!');
        } else {
            $this->action = 'POST';
            $this->number_account = "";
            $this->names = "";
            $this->member_id = 0;
            // $this->resetInputFields();
            $this->alert('warning', 'No se encontrarón registros asociados');
        }
    }

    public function findByAccount()
    {
        $member = Member::where('account_number', $this->number_account)->first();
        if (isset($member)) {
            $this->doc_number = $member->doc_number;
            $this->member_id = $member->id;
            $this->names = $member->last_name . " " . $member->name;
            $this->alert('success', '¡Datos del cliente cargados con exíto!');
        } else {
            $this->action = 'POST';
            $this->doc_number = "";
            $this->names = "";
            $this->member_id = 0;
            // $this->resetInputFields();
            $this->alert('warning', 'No se encontrarón registros asociados');
        }
    }
}
