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
    public $payment_date = '';
    public $data_table = [];
    public $settlement_date; //fecha de liquidacion
    public $due_date = '';//fecha de vencimiento

    public $count = 1;

    public function mount(){
        $this->settlement_date = date('Y-m-d');
    }
    public function render()
    {
//        $this->fixed_free = $this->fFixedFree($this->amount,$this->term);
       
        return view('livewire.amortization.amortization-table')
            ->extends('layouts.app')
            ->section('subcontent');
    }


    public function fTable($term, $amount, $interest_rate, $date_)
    {
        // dd($sdate);
         if($date_ != ''){
             $payment_date = $date_;
         }else{
            $payment_date = date("d-m-Y");
         }
        

        $list = new Collection();

        $balance[0] = $amount;
        $a[0] = $amount;

        for ($i = 1; $i <= $term; $i++) {
            
            $period[$i] = $i;
            $a[$i] = $balance[($i-1)];
            $interest[$i] = ($a[$i] * $interest_rate) / 100;
            $dividing[$i] = $amount / $term;
            $total_payment[$i] = $interest[$i] + $dividing[$i];
            $balance[$i] = ($a[$i] - $dividing[$i]);

             $date[$i] = date("d-m-Y",strtotime($payment_date."+ ".$i." month"));

            $item = [
                'bg' => ($i%2==0 ? 'bg-gray-200 dark:bg-dark-1': ''),
                'period' => $period[$i],
                'payment_date' =>$date[$i],
                'amount' =>number_format($a[$i],2),
                'interest' =>number_format($interest[$i],2),
                'dividing' =>number_format($dividing[$i],2),
                'total_payment' => number_format($total_payment[$i],2),
                'balance' => number_format($balance[$i],2),
            ];
            $list->push($item);

        }
        $this->due_date = date("Y-m-d",strtotime($date_."+ ".$term." month"));

        $this->data_table = $list;

    }

    

    public function fData()
    {
        //  dd(date($this->settlement_date));
        
        $this->amount != ''            && $this->validate(['amount' => 'required|numeric',]);
        $this->term != ''              && $this->validate(['term' => 'required|numeric',]);
        $this->interest_rate != ''     && $this->validate(['interest_rate' => 'numeric',]);

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
