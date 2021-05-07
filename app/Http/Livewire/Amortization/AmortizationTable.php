<?php

namespace App\Http\Livewire\Amortization;

use Illuminate\Support\Collection;
use Livewire\Component;


class AmortizationTable extends Component
{
    public $amount = null;
    public $interest_rate = 4;
    public $term = null; //plazo meses
    public $fixed_free = null;
    public $period = null; //periodo dias
    public $amortization = 0;
    public $data_table = [];

    public $count = 1;

    public function render()
    {
//        $this->fixed_free = $this->fFixedFree($this->amount,$this->term);

        return view('livewire.amortization.amortization-table')
            ->extends('layouts.app')
            ->section('subcontent');
    }


    public function fTable($term, $amount, $interest_rate)
    {
        $list = new Collection();

        $balance[0] = $amount;
        $a[0] = $amount;
        for ($i = 1; $i <= $term; $i++) {
            $a[$i] = $balance[($i-1)];
            $interest[$i] = ($a[$i] * $interest_rate) / 100;
            $dividing[$i] = $amount / $term;
            $total_payment[$i] = $interest[$i] + $dividing[$i];
            $balance[$i] = $a[$i] - $dividing[$i];

            $item = [
                'amount' =>round( $balance[($i-1)],2),
                'interest' => round($interest[$i],2),
                'dividing' => round($dividing[$i],2),
                'total_payment' => round($total_payment[$i],2),
                'balance' => round($balance[$i],2),
            ];
            $list->push($item);
        }
        $this->data_table = $list;
//        dd($this->data_table);
    }

    public function fData()
    {

        if($this->term != '' && $this->term >= 0){
            $this->fFixedFree($this->amount, $this->term);
            $this->fPeriod($this->term);
            $this->fTable($this->term, $this->amount, $this->interest_rate);
        }

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


}
