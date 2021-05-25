<?php

namespace App\Http\Livewire\Credit;

use App\Models\MemberReference;
use Livewire\Component;
use Illuminate\Support\Collection;
use App\Models\DetailMember;
use App\Models\Member;
use App\Models\Credits;
use App\Models\Amortization;
use App\Models\DetailAmortization;
use App\Models\CreditRequest;

class NewCredit extends Component
{
    public $amortization_id = null;
    public $credit_type = '';
    public $action = 'PRINT';
    public   $address, $phone;
    public $code_request = "";

    //Amortizacion
    public $amount = null, $status_cred="revision", $visit_id, $request_id;
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

    //credito

    public $listButtonFrame = [
        "1" => "button text-white bg-theme-1",
        "2" => "button text-gray-600 bg-gray-200 dark:bg-dark-1",
        "3" => "button text-gray-600 bg-gray-200 dark:bg-dark-1",
        "4" => "button text-gray-600 bg-gray-200 dark:bg-dark-1",
        "5" => "button text-gray-600 bg-gray-200 dark:bg-dark-1"
    ];
    public $listTextFrame = [
        "1" => "font-medium text-base lg:mt-3 ml-3 lg:mx-auto",
        "2" => "text-base lg:mt-3 ml-3 lg:mx-auto text-gray-700 dark:text-gray-600",
        "3" => "text-base lg:mt-3 ml-3 lg:mx-auto text-gray-700 dark:text-gray-600",
        "4" => "text-base lg:mt-3 ml-3 lg:mx-auto text-gray-700 dark:text-gray-600",
        "5" => "text-base lg:mt-3 ml-3 lg:mx-auto text-gray-700 dark:text-gray-600"
    ];
    public $visibleFrame = [
        "1" => true,
        "2" => false,
        "3" => false,
        "4" => false,
        "5" => false
    ];
    public $pageFrame = 1;

    public $data_id, $status = true, $url_image, $member_type, $acount_number;
    public $member_id = null, $city;
    public $canton, $parish, $principal_street, $secundary_street, $reference_place;
    public $members;
    public $modal = false, $input_search = '';

    //Personal Data
    public $name, $last_name, $dni, $passport, $instruction, $marital_status, $birth_date, $email, $phone1, $phone2;
    //Spouse Data
    public $name_spouse, $last_name_spouse, $dni_spouse, $passport_spouse, $birth_date_spouse, $email_spouse, $phone1_spouse, $phone2_spouse;
    //References
    public $action_ref = 'POST';
    public $reference_id = null, $name_ref, $last_name_ref, $dni_ref, $relationship_ref, $instruction_ref, $time_to_meet_ref;


    public function selectFrame($id)
    {
        for ($i = 1; $i <= count($this->listButtonFrame); $i++) {
            if ($id == $i) {
                $this->listButtonFrame[$i] = "button text-white bg-theme-1";
                $this->listTextFrame[$i] = "font-medium text-base lg:mt-3 ml-3 lg:mx-auto";
                $this->visibleFrame[$i] = true;
            } else {
                $this->listButtonFrame[$i] = "button text-gray-600 bg-gray-200 dark:bg-dark-1";
                $this->listTextFrame[$i] = "text-base lg:mt-3 ml-3 lg:mx-auto text-gray-700 dark:text-gray-600";
                $this->visibleFrame[$i] = false;
            }
        }
    }

    public function render()
    {

        $data_reference = MemberReference::where('member_id', $this->member_id)->get();
        return view('livewire.credit.new-credit', compact('data_reference'))
            ->extends('layouts.app')
            ->section('subcontent');
    }

    public function storeCredit()
    {
        $first_date = "";
        foreach($this->data_table as $data)
        {
            $first_date =  $data['payment_date'] ;
            break;
        }
        
        $data = [
            'member_id'=>$this->member_id,
            'visit_id'=>$this->visit_id,
            'request_id'=>$this->request_id,
            'amortization_id'=>$this->amortization_id,
            'term'=>$this->term,
            'first_pay'=>$first_date,
            'amount'=>$this->amount,
            'fixed_free'=>$this->fixed_free,
            'balance'=>0,
            'status'=>$this->status_cred
        ];
      
        $credit_result = Credits::create($data);
        $this->alert('success', 'Crédito registrado con exíto.');
    }

public function findRequest()
{
    $resul = CreditRequest::where('code',$this->code_request)->first();
    if($resul){
        $this->request_id = $resul->id;
        $this->alert('success', 'Solicitud recupedara con exíto.');
    }else{
        $this->alert('warning', 'No se encontrarón registros');
    }
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
            foreach ($this->data_table as $data) {
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
            foreach ($this->data_table as $data) {
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
            $this->alert('succes', 'Información Registrada con exito.');
        }



    }

    public function findMember()
    {
        $member = Member::where('doc_number', $this->dni)->first();
        if (isset($member)) {
            // $this->alert('success','Registro recuperado satisfactoriamente');
            $detail = DetailMember::where('member_id', $member->id)->first();
            $this->acount_number = $member->account_number;
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


        $list = new Collection();

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

            $item = [
                'bg' => ($i % 2 == 0 ? 'bg-gray-200 dark:bg-dark-1' : ''),
                'period' => $period[$i],
                'payment_date' => $date[$i],
                'amount' => number_format($a[$i], 2),
                'interest' => number_format($interest[$i], 2),
                'dividing' => number_format($dividing[$i], 2),
                'total_payment' => number_format($total_payment[$i], 2),
                'balance' => number_format($balance[$i], 2),
            ];
            $list->push($item);

        }
        $this->due_date = date("Y-m-d", strtotime($date_ . "+ " . $term . " month"));

        $this->data_table = $list;

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
