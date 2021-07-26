<?php

namespace App\Http\Livewire\Payment;

use Livewire\Component;
use App\Models\DetailMember;
use App\Models\Member;
use App\Models\DetailAmortization;
use App\Models\Credits;
use App\Models\Payment;
use App\Models\ConfigTable;
use Carbon\Carbon;
use Illuminate\Support\Facades\Auth;
use Barryvdh\DomPDF\Facade as PDF;
class Payments extends Component
{
    public $position = "credit";
    public $member_id,$name,$action="POST",$acount_number,$search_member="",$credit_id;
    public $selectStatus = "proceso";
    //AMORTIATION:
    public $details_amort = [],$amortization_id;
    //Credits
    public $detailPay=null;

    ///PAYMENTS
    public $statusDetail = "pendiente", $datePay,$valuePay=0,$valFinalPay=0, $interestPay=0,$balancePay=0,$amountLats=0,$periodPay=1;
    //**CONSTANTS PAY */
    public $cntPorcent = 0.001,$cntDays=30,$cntDayGr=3,$days=0,$numberDecimals = 2;
    // ATTRIBUTES TABLE Payments
    public $amortization_id_pay,$detail_amortization_id,$user_id_pay,$member_id_pay,$credit_id_pay,$date_period_pay;
    public $date_pay,$total_pay,$balance_pay,$interest_mora_pay,$num_pay = "",$customers_name_pay="",$account_number_pay="";
    public $amount_pay,$status_pay,$code_pay,$payment_id;

    //PDF 
    public $dni ='',$email = '',$phone1='';
    public function render()
    {
        $credit = Credits::join('members','members.id','=','credits.member_id')
        ->where('credits.id',$this->credit_id)
        ->where('credits.active',true)
        ->select('members.email','members.phone1','members.name','members.last_name','members.doc_number',
                'members.account_number','credits.created_at','credits.id','credits.amortization_id',
                'credits.amount','credits.term')
        ->first();

        if($credit){
            $this->customers_name_pay = $credit->name." ".$credit->last_name;
            $this->account_number_pay = $credit->account_number;
            $this->num_pay = $credit->term;
            $this->dni = $credit->doc_number;
            $this->email = $credit->email;
            $this->phone1 = $credit->phone1;
        }
        $filter =  $this->selectStatus =="todos"?['proceso','cancelado']:$this->selectStatus;
        $listCredits = Credits::where('member_id', $this->member_id)
        ->where('active',true)
        ->where('status_credit',$filter)
        ->orderBy('created_at', 'desc')
        ->get();
        if(count($listCredits)==0){
            $this->details_amort = [];
        }
       
        return view('livewire.payment.payments',compact('credit','listCredits'))
        ->extends('layouts.app')
        ->section('subcontent');
    }

    public function findMember()
    {
        $member = Member::where('doc_number', $this->search_member)->first();
        if (isset($member)) {
            // $this->alert('success','Registro recuperado satisfactoriamente');
            $detail = DetailMember::where('member_id', $member->id)->first();
            $this->acount_number = $member->account_number;
            $this->loadData($member, $detail);

            $this->alert('success', 'Datos cargados satisfactoriamente');
        } else {
            $this->action = 'POST';
            // $this->resetInputFields();
            $this->member_id="";
            $this->alert('warning', 'No se encontrarón registros asociados');
        }
    }
    public function loadData($member, $detail)
    {
        $this->member_id = $member->id;
        $this->name = $member->name . " " . $member->last_name;
        $this->action = 'STORE';
    }
    public function getDetailCredit($dataId)
    {
        $this->credit_id =$dataId; 
        $credAux = Credits::join('members','members.id','=','credits.member_id')
        ->where('credits.id',$this->credit_id)
        ->select('members.name','members.last_name','members.doc_number',
                'members.account_number','credits.created_at','credits.id','credits.amortization_id',
                'credits.amount','credits.term')
        ->first();
        
        $this->amortization_id = $credAux->amortization_id;
        $this->details_amort = DetailAmortization::where('amortization_id',$this->amortization_id)->get();
        $this->alert('success', 'Detalle cargado  satisfactoriamente');
    }
    public function getItemPay($dataId)
    {
        $now = Carbon::now();
        $dayNow = $now->day;
        $this->detailPay = DetailAmortization::find($dataId);
        $this->datePay = $this->detailPay->payment_date;
        $this->valuePay = number_format( $this->detailPay->total_payment, $this->numberDecimals, '.','');
        $this->periodPay = $this->detailPay->period;
        $this->balancePay = $this->detailPay->balance;
        //calculo de letras y fechas
        $dateAux = Carbon::parse($this->datePay)->addDays($this->cntDayGr);
        $diff = $now->diffInDays($dateAux); // dias de direfrencia
        $this->days =$diff;
        if($dateAux->isPast()){ //si esta atrasado
            $periodLast =  $this->periodPay == 1 ?1: $this->periodPay-1;
            $payAux = DetailAmortization::where('amortization_id',$this->detailPay->amortization_id)->where('period',$periodLast)->first();
            $this->interestPay = ($payAux->amount*$this->cntPorcent)/$this->cntDays;
            $this->interestPay = number_format( $this->interestPay, $this->numberDecimals, '.','');
            $this->valFinalPay = ((float)$this->interestPay*$this->days)+$this->detailPay->total_payment;
            $this->valFinalPay =  number_format( $this->valFinalPay, $this->numberDecimals, '.','');
            $this->statusDetail = "atrasado";
        }else{
            $this->interestPay = 0;
            $this->valFinalPay = $this->detailPay->total_payment;
            $this->statusDetail = "cancelado";
        }
        //CARGAR LOS DATOS PARA GENERAR LOS PAGOS
        $this->amortization_id_pay = $this->detailPay->amortization_id ;
        $this->detail_amortization_id= $this->detailPay->id;
        $this->user_id_pay = Auth::user()->id;
        $this->member_id_pay= $this->member_id;
        $this->credit_id_pay= $this->credit_id ;
        $this->date_period_pay = $this->detailPay->payment_date ;
        $this->date_pay= Carbon::now()->toDateString() ;
        $this->balance_pay= $this->detailPay->balance ;
        $this->interest_mora_pay= $this->interestPay ;
        $this->num_pay= $this->detailPay->period ." de ".$this->num_pay ;
        $this->amount_pay = $this->valFinalPay ;
        $this->code_pay = $this->getLastNumber();
        if($this->detailPay->status =="atrasado" || $this->detailPay->status =="cancelado"){
            $this->action = "PUT";
            $paymentAux = Payment::where('detail_amortization_id',$dataId)->first();
            if($paymentAux){
                $this->payment_id  = $paymentAux->id;
                $this->date_pay  = $paymentAux->date_pay;
                $this->interest_mora_pay = $this->detailPay->interest_pay;
                $this->interestPay =  $this->detailPay->interest_pay;
                $this->statusDetail =  $this->detailPay->status;
                $this->code_pay = $paymentAux->code;
                $this->total_pay = $paymentAux->total;
                $this->valFinalPay = ($this->detailPay->interest_pay*$this->detailPay->days_pay)+$this->detailPay->total_payment;
                $this->amount_pay  = $this->valFinalPay;
            }
        }else{
            $this->action = "POST";
            $this->total_pay = "";
        }
        $this->alert('success', 'Couta cargada  satisfactoriamente');
    }

    public function store(){
        $this->code_pay = $this->getLastNumber();
        $data = [
            'code'=>$this->code_pay,
            'amortization_id'=>$this->amortization_id_pay,
            'detail_amortization_id'=>$this->detail_amortization_id,
            'user_id'=>$this->user_id_pay,
            'member_id'=>$this->member_id_pay,
            'credit_id'=>$this->credit_id_pay,
            'date_period'=>$this->date_period_pay,
            'date_pay'=>$this->date_pay,
            'total'=>$this->total_pay,
            'balance'=>$this->balance_pay,
            'interest_mora'=>$this->interest_mora_pay,
            'num_pay'=>$this->num_pay,
            'customers_name'=>$this->customers_name_pay,
            'account_number'=>$this->account_number_pay,
            'amount'=>$this->amount_pay,
            'status_pay'=>$this->statusDetail
        ];
        $payment = Payment::create($data);
        $this->payment_id = $payment->id;
        $config =  ConfigTable::where('identifier','pago')->first();
        $config->secuence = $config->secuence +1;
        $config->save();
        $detail = DetailAmortization::find($this->detail_amortization_id);
        $detail->status = $this->statusDetail;
        $detail->days_pay = $this->days;
        $detail->interest_pay = $this->interest_mora_pay;
        $detail->value_pay = $this->total_pay;
        if($this->total_pay<$this->valFinalPay){
            $detail->balance_pay = $this->valFinalPay-$this->total_pay ;
        }else{
            $detail->balance_pay = 0;
        }
        $detail->save();
        $this->action="PUT";
        $this->getDetailCredit($this->credit_id_pay);
        $this->alert('success', 'Couta cancelada  satisfactoriamente');
    }
    public function update(){
        $data = [
            'code'=>$this->code_pay,
            'amortization_id'=>$this->amortization_id_pay,
            'detail_amortization_id'=>$this->detail_amortization_id,
            'user_id'=>$this->user_id_pay,
            'member_id'=>$this->member_id_pay,
            'credit_id'=>$this->credit_id_pay,
            'date_period'=>$this->date_period_pay,
            'date_pay'=>$this->date_pay,
            'total'=>$this->total_pay,
            'balance'=>$this->balance_pay,
            'interest_mora'=>$this->interest_mora_pay,
            'num_pay'=>$this->num_pay,
            'customers_name'=>$this->customers_name_pay,
            'account_number'=>$this->account_number_pay,
            'amount'=>$this->amount_pay,
            'status_pay'=>$this->statusDetail
        ];

        $payment = Payment::find($this->payment_id);
        
        $payment->update($data);
        $detail = DetailAmortization::find($this->detail_amortization_id);
        $detail->status = $this->statusDetail;
        $detail->days_pay = $this->days;
        $detail->interest_pay = $this->interest_mora_pay;
        $detail->value_pay = $this->total_pay;
        if($this->total_pay<$this->valFinalPay){
            $detail->balance_pay = $this->valFinalPay-$this->total_pay ;
        }else{
            $detail->balance_pay = 0;
        }
        $detail->save();
        $this->action="PUT";
        $this->getDetailCredit($this->credit_id_pay);
        $this->alert('success', 'Couta actualizada  satisfactoriamente');
    }
   
    public function getLastNumber()
    {
        $re_last = ConfigTable::where('identifier', 'pago')->first();
        if($re_last){
            $codeAux = strval($re_last->complemenet+$re_last->secuence+1);
            $codeAux= ltrim($codeAux, '1');
            $serie_ac=$re_last->serie;
            $secuence_ac=$re_last->secuence+1;
            $number_ac=($re_last->serie)."".($codeAux);
            return  $number_ac;
        }
        return "".datetime();
    }
    public function validateFields()
    {
       
    }
    public function changePos($poss)
    {
        $this->position = $poss;
    }

    public function print(){
        $member = [
            'account' => $this->account_number_pay,
            'names' => $this->customers_name_pay,
            'dni' => $this->dni,
            'email' => $this->email,
            'phone1' => $this->phone1,
            'num_pay' => $this->num_pay
        ];
        $dataOperation = [
            'code'=>$this->code_pay,
            'amortization_id'=>$this->amortization_id_pay,
            'detail_amortization_id'=>$this->detail_amortization_id,
            'user_id'=>$this->user_id_pay,
            'member_id'=>$this->member_id_pay,
            'credit_id'=>$this->credit_id_pay,
            'date_period'=>$this->date_period_pay,
            'date_pay'=>$this->date_pay,
            'total'=>$this->total_pay,
            'balance'=>$this->balance_pay,
            'interest_mora'=>$this->interest_mora_pay,
            'num_pay'=>$this->num_pay,
            'customers_name'=>$this->customers_name_pay,
            'account_number'=>$this->account_number_pay,
            'amount'=>$this->amount_pay,
            'status_pay'=>$this->statusDetail
        ];

        $dataTable =  $this->details_amort ;

        $pdf = PDF::loadView('pdf.pdf_credit', compact('member', 'dataOperation','dataTable'));
        $nombrePdf = 'reporte-pago-credito-' . $this->account_number_pay . '-' . time() . '.pdf';

        return response()->streamDownload(function () use ($pdf) {
            echo $pdf->stream();
        }, $nombrePdf);
    }

}
