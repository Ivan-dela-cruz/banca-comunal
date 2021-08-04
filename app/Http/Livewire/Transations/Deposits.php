<?php

namespace App\Http\Livewire\Transations;

use App\Models\Member;
use App\Models\Transaction;
use Carbon\Carbon;
use Livewire\Component;
use Livewire\WithPagination;

class Deposits extends Component
{
    use WithPagination;

    protected $queryString = [
        'search' => ['except' => ''],
        'perPage' => ['except' => '10'],
    ];
    public $perPage = '10';
    public $search = '';
    public $action = 'POST';

    public $member_id = null, $account_id = null, $doc_number, $names = '', $account_number, $total_balance;

    public $transaction_id = null;
    public $date, $description, $amount, $amount_letters, $place, $type_partner, $deposit, $retreats, $balance, $type_currency, $status = 'Finalizado';

    public function render()
    {
        $now = Carbon::now();
        $this->date = $now->format('Y-m-d');
        if(!is_null($this->member_id)){
            $transactions = Transaction::orderBy('created_at', 'desc')
            ->where(function ($query) {
                $query->when($this->member_id != null, function ($q) {
                    $q->where('member_id', $this->member_id);
                });
            })->whereMonth('created_at', $now->month) ->paginate($this->perPage);
        }else{
            $transactions = [];
        }
        return view('livewire.transations.deposits', compact('transactions'))
            ->extends('layouts.app')
            ->section('subcontent');
    }

    public function store()
    {
        $this->validate([
            'doc_number' => 'required',
            'account_number' => 'required',
            'member_id' => 'required',
            'account_id' => 'required',
            'date' => 'required',
            'place' => 'required',
            'type_partner' => 'required',
            'deposit' => 'required|numeric',
            'status' => 'required'
        ]);

        $last_balance = $this->lastBalance($this->member_id);

        if ($this->status == 'Finalizado') {
            $this->balance = $last_balance + $this->deposit;
        } else {
            $this->balance = $last_balance;
        }


        $data = [
            'member_id' => $this->member_id,
            'account_id' => $this->account_id,
            'date' => $this->date,
            'description' => $this->description,
            "amount_letters" => $this->amount_letters,
            "place" => $this->place,
            'type_partner' => $this->type_partner,
            'deposit' => $this->deposit,
            'retreats' => 0,
            'balance' => $this->balance,
            'type_currency' => $this->type_currency,
            'status' => $this->status,
            'data1' => 'deposito',
        ];

        $this->total_balance = '$ '.$this->balance;
        $deposit = Transaction::create($data);

        $this->alert('success', 'Deposito registrado con exito');
        $this->resetInputFields();
    }

    public function edit($id)
    {
        $this->action = 'PUT';
        $transaction = Transaction::find($id);
        $this->transaction_id = $transaction->id;
        $this->member_id = $transaction->member->id;
        $this->account_id = $transaction->account_id;
        $this->doc_number = $transaction->member->doc_number;
        $this->account_number = $transaction->member->account_number;
        $this->date = $transaction->date;
        $this->place = $transaction->place;
        $this->type_partner = $transaction->type_partner;
        $this->deposit = $transaction->deposit;
        $this->status = $transaction->status;

    }


    public function update()
    {
        $transaction = Transaction::find($this->transaction_id);
        $this->validate([
            'doc_number' => 'required',
            'account_number' => 'required',
            'member_id' => 'required',
            'account_id' => 'required',
            'date' => 'required|date',
            'place' => 'required',
            'type_partner' => 'required',
            'deposit' => 'required|numeric',
            'status' => 'required',
        ]);

        $last_balance = $this->lastBalance($this->member_id);
        $balance = $this->antBalance($transaction->id - 1);
        $deposit = $this->lastDeposit($transaction->id);

        if ($this->status == 'Anulado') {
            if($last_balance < $deposit){
                $this->balance = 0;
            }else{
                $this->balance = $last_balance - $deposit;
            }
        }elseif ($this->status == 'Finalizado') {
            $this->balance = $balance + $this->deposit;
        }

//        dd($this->balance);

        $data = [
            'member_id' => $this->member_id,
            'account_id' => $this->account_id,
            'date' => $this->date,
            'description' => $this->description,
            'amount_letters' => $this->amount_letters,
            'place' => $this->place,
            'type_partner' => $this->type_partner,
            'deposit' => $this->deposit,
            'retreats' => 0,
            'balance' => $this->balance,
            'type_currency' => $this->type_currency,
            'status' => $this->status,
        ];

        $transaction->update($data);

        $this->alert('success', 'Deposito actualizado con exito');
        $this->resetInputFields();
    }


    public function resetInputFields()
    {
        $this->action = 'POST';
        $this->transaction_id = null;
        $this->member_id = null;
        $this->account_id = null;
        $this->doc_number = null;
        $this->account_number = null;
        $this->date = '';
        $this->place = '';
        $this->type_partner = '';
        $this->deposit = '';
        $this->status = 'Finalizado';
        $this->total_balance  = '';
        $this->names = '';
    }

    public function lastBalance($member_id)
    {
        $balance = Transaction::where('member_id', $member_id)->orderby('created_at', 'DESC')->take(1)->value('balance');
        if (isset($balance)) {
            return $balance;
        } else {
            return 0;
        }
    }

    public function antBalance($transaction_id){
        $balance = Transaction::where('id', $transaction_id)->value('balance');
        if (isset($balance)) {
            return $balance;
        } else {
            return 0;
        }
    }

    public function lastDeposit($transaction_id)
    {
        $deposit = Transaction::where('id', $transaction_id)->value('deposit');
        if (isset($deposit)) {
            return $deposit;
        } else {
            return 0;
        }
    }

    public function findMember()
    {
        $member = Member::where('doc_number', $this->doc_number)->first();
        if (isset($member)) {
            $this->account_number = $member->account_number;
            $this->member_id = $member->id;
            $this->account_id = $member->account->id;
            $this->names = $member->last_name . " " . $member->name;
            $this->type_partner = $member->member_type;

            $this->total_balance = '$ '.$this->lastBalance($this->member_id);
            $this->alert('success', '¡Datos  cargados con exíto!');
        } else {
            $this->action = 'POST';
            $this->account_number = "";
            $this->names = "";
            $this->member_id = 0;
            // $this->resetInputFields();
            $this->alert('warning', 'No se encontrarón registros asociados');
        }
    }

    public function findByAccount()
    {
        $member = Member::where('account_number', $this->account_number)->first();
        if (isset($member)) {
            $this->doc_number = $member->doc_number;
            $this->member_id = $member->id;
            $this->account_id = $member->account->id;
            $this->names = $member->last_name . " " . $member->name;
            $this->type_partner = $member->member_type;
            $this->total_balance = '$ '.$this->lastBalance($this->member_id);
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
