<?php

namespace App\Http\Livewire\Amortization;

use App\Models\Amortization;
use App\Models\DetailAmortization;
use App\Models\DetailMember;
use App\Models\Member;
use Illuminate\Support\Collection;
use Livewire\Component;


class AmortizationTable extends Component
{
    public $amortization_id = null;
    public $amount = null;
    public $interest_rate = 4;
    public $term = null; //plazo meses
    public $fixed_free = null; //cuota fija
    public $period = null; //periodo dias
    public $credit_type = '';
    public $data_table = [];
    public $data_table_back = [];
    public $settlement_date; //fecha de liquidacion
    public $due_date = '';//fecha de vencimiento

    public $action = 'PRINT';

    public $member_id = null, $dni, $name, $last_name, $address, $phone;

    public function mount()
    {
        $this->settlement_date = date('Y-m-d');
    }

    public function render()
    {
//        $this->fixed_free = $this->fFixedFree($this->amount,$this->term);

        return view('livewire.amortization.amortization-table')
            ->extends('layouts.app')
            ->section('subcontent');
    }

    public function store()
    {
        $this->validate([
            'member_id' => 'required',
            'amount' => 'required',
            'interest_rate' => 'required',
            'term' => 'required',
            'fixed_free' => 'required',
            'period' => 'required',
            'credit_type' => 'required',
            'settlement_date' => 'required',
            'due_date' => 'required',
        ]);

        $data = [
            'member_id' => $this->member_id,
            'amount' => $this->amount,
            'interest_rate' => $this->interest_rate,
            'term' => $this->term,
            'fixed_free' => $this->fixed_free,
            'period' => $this->period,
            'credit_type' => $this->credit_type,
            'settlement_date' => $this->settlement_date,
            'due_date' => $this->due_date,
        ];
        $amortization = Amortization::find($this->amortization_id);

        if (isset($amortization)) {
            $amortization->update($data);
            $this->amortization_id = $amortization->id;
            $details = DetailAmortization::where('amortization_id', $this->amortization_id);
            $details->delete();
            foreach ($this->data_table_back as $data) {
                $details = DetailAmortization::create([
                    'amortization_id' => $this->amortization_id,
                    'period' => $data['period'],
                    'payment_date' => $data['payment_date'],
                    'amount' => $data['amount'],
                    'interest' => $data['interest'],
                    'dividing' => $data['dividing'],
                    'total_payment' => $data['total_payment'],
                    'balance' => $data['balance'],
                ]);
            }
            $this->alert('success', 'Información actualizada con exito.');
        } else {
            $a = Amortization::create($data);
            $this->amortization_id = $a->id;
            foreach ($this->data_table_back as $data) {
                $details = DetailAmortization::create([
                    'amortization_id' => $a->id,
                    'period' => $data['period'],
                    'payment_date' => $data['payment_date'],
                    'amount' => $data['amount'],
                    'interest' => $data['interest'],
                    'dividing' => $data['dividing'],
                    'total_payment' => $data['total_payment'],
                    'balance' => $data['balance'],
                ]);
            }
            $this->alert('success', 'Información Registrada con exito.');
        }



    }

    public function findMember()
    {
        $member = Member::where('doc_number', $this->dni)->first();
        if (isset($member)) {
            // $this->alert('success','Registro recuperado satisfactoriamente');
            $detail = DetailMember::where('member_id', $member->id)->first();
            $this->loadData($member, $detail);
        } else {
            $this->action = 'POST';
            // $this->resetInputFields();
            $this->alert('warning', 'No se encontrarón registros asociados');
        }
    }

    public function loadData($member, $detail)
    {
        $this->member_id = $member->id;
        $this->name = $member->name . " " . $member->last_name;
        $this->phone = $member->phone1;
        $this->address = $detail->principal_street . " " . $detail->secondary_street;
        $this->action = 'STORE';
    }

    public function resetInputFields()
    {
        $this->amortization_id = null;
        $this->amount = '';
        $this->interest_rate = 4;
        $this->term = '';
        $this->fixed_free = '';
        $this->period = '';
        $this->credit_type = '';
        $this->settlement_date = date('Y-m-d');
        $this->due_date = null;
        $this->data_table = [];
        $this->data_table_back = [];

        $this->member_id = null;
        $this->dni = '';
        $this->name = '';
        $this->phone = '';
        $this->address = '';
        $this->action = 'PRINT';
    }

    public function fTable($term, $amount, $interest_rate, $date_)
    {
        // dd($sdate);
        if ($date_ != '') {
            $payment_date = $date_;
        } else {
            $payment_date = date("Y-m-d");
        }


        $list_front = new Collection();
        $list_back = new Collection();

        $balance[0] = $amount;
        $a[0] = $amount;

        for ($i = 1; $i <= $term; $i++) {

            $period[$i] = $i;
            $a[$i] = $balance[($i - 1)];
            $interest[$i] = ($a[$i] * $interest_rate) / 100;
            $dividing[$i] = $amount / $term;
            $total_payment[$i] = $interest[$i] + $dividing[$i];
            $balance[$i] = ($a[$i] - $dividing[$i]);

            $date[$i] = date("Y-m-d", strtotime($payment_date . "+ " . $i . " month"));

            $item_frontend = [
                'bg' => ($i % 2 == 0 ? 'bg-gray-200 dark:bg-dark-1' : ''),
                'period' => $period[$i],
                'payment_date' => $date[$i],
                'amount' => number_format($a[$i], 2),
                'interest' => number_format($interest[$i], 2),
                'dividing' => number_format($dividing[$i], 2),
                'total_payment' => number_format($total_payment[$i], 2),
                'balance' => number_format($balance[$i], 2),
            ];
            $item_backend = [
                'bg' => ($i % 2 == 0 ? 'bg-gray-200 dark:bg-dark-1' : ''),
                'period' => $period[$i],
                'payment_date' => $date[$i],
                'amount' => number_format($a[$i], 2,".",""),
                'interest' => number_format($interest[$i], 2,".",""),
                'dividing' => number_format($dividing[$i], 2,".",""),
                'total_payment' => number_format($total_payment[$i], 2,".",""),
                'balance' => number_format($balance[$i], 2,".",""),
            ];
            $list_front->push($item_frontend);
            $list_back->push($item_backend);

        }
        $this->due_date = date("Y-m-d", strtotime($date_ . "+ " . $term . " month"));

        $this->data_table = $list_front;
        $this->data_table_back = $list_back;

    }

    public function fData()
    {
        //  dd(date($this->settlement_date));

        $this->amount != '' && $this->validate(['amount' => 'required|numeric',]);
        $this->term != '' && $this->validate(['term' => 'required|numeric',]);
        $this->interest_rate != '' && $this->validate(['interest_rate' => 'numeric',]);

        $amount = $this->vNumber($this->amount);
        $term = $this->vNumber($this->term);
        $interest_rate = $this->vNumber($this->interest_rate);
        $date = $this->settlement_date;

        $this->fFixedFree($amount, $term);
        $this->fPeriod($term);
        $this->fTable($term, $amount, $interest_rate, $date);

    }

    public function fFixedFree($amount, $term)
    {
        $res = $amount / $term;
        $this->fixed_free = round($res, 2);
    }

    public function fPeriod($term)
    {
        $this->period = $term * 30;
    }

    public function vNumber($number)
    {
        if (is_numeric($number))
            return $number;
        else
            return 1;
    }

}
