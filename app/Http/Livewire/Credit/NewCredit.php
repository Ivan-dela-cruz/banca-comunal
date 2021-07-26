<?php

namespace App\Http\Livewire\Credit;

use App\Models\AdvisorVisit;
use App\Models\Attachment;
use App\Models\MemberReference;
use Barryvdh\DomPDF\Facade as PDF;
use Carbon\Carbon;
use Livewire\Component;
use Illuminate\Support\Collection;
use App\Models\DetailMember;
use App\Models\Member;
use App\Models\Credits;
use App\Models\Amortization;
use App\Models\DetailAmortization;
use App\Models\CreditRequest;
use App\Models\ConfigTable;
use Livewire\WithFileUploads;

class NewCredit extends Component
{
    use WithFileUploads;

    public $amortization_id = null;
    public $credit_type = '';
    public $action = 'PRINT';
    public $address, $phone;
    public $code_request = "";
    public $code_visit = "";

    //Amortizacion
    public $amount = null, $status_cred = "revision", $visit_id, $request_id;
    public $interest_rate = 4;
    public $term = null; //plazo meses
    public $fixed_free = null;
    public $period = null; //periodo dias
    public $payment_date = '';
    public $data_table = [];
    public $data_table_back = [];
    public $settlement_date; //fecha de liquidacion
    public $due_date = '';//fecha de vencimiento

    public $count = 1;

    public $dni, $name;

    public $credit_req, $amount_req, $term_req, $name_req, $last_name_req, $doc_number_req, $phone_req, $date_req;
    public $credit_visit, $amount_visit, $term_visit, $name_visit, $last_name_visit, $doc_number_visit, $phone_visit, $date_visit;

    public $credit_id = null;
    public $action_doc = 'POST';
    public $doc_id = null, $name_doc, $description_doc, $url_doc, $status_doc = 1;

    public $code_credit;
    public function mount()
    {
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

    public $list_requests = [];
    public $list_visits = [];
    public $list_docs = [];
    public $search_member;

    public function render()
    {
        $this->list_requests = CreditRequest::where('member_id',$this->member_id)->orderBy('created_at', 'ASC')->get();
        $this->list_visits = AdvisorVisit::where('member_id',$this->member_id)->orderBy('created_at', 'ASC')->get();

        if ($this->credit_id != null) {
            $credit = Credits::find($this->credit_id);
//            dd($credit->attachments['id']);
            $this->list_docs = $credit->attachments;
        }
        $this->code_credit = $this->getLastNumber();

//        $data_reference = MemberReference::where('member_id', $this->member_id)->get();
        return view('livewire.credit.new-credit')
            ->extends('layouts.app')
            ->section('subcontent');
    }


    public function storeCredit()
    {
        $first_date = "";
        foreach ($this->data_table as $data) {
            $first_date = $data['payment_date'];
            break;
        }
        $this->code_credit = $this->getLastNumber();
        $data = [
            'code'=>$this->code_credit,
            'member_id' => $this->member_id,
            'visit_id' => $this->visit_id,
            'request_id' => $this->request_id,
            'amortization_id' => $this->amortization_id,
            'term' => $this->term,
            'first_pay' => $first_date,
            'amount' => $this->amount,
            'fixed_free' => $this->fixed_free,
            'balance' => 0,
            'status' => $this->status_cred
        ];

        $credit_result = Credits::create($data);
        $this->credit_id = $credit_result->id;
        $this->alert('success', 'Crédito registrado con exíto.');
    }

    public function findRequest($code_request = '')
    {
        $this->code_request = $this->code_request != '' ? $this->code_request : $code_request;
        $result = CreditRequest::where('code', $this->code_request)->first();
        $this->dni = $result->member->doc_number;
        if ($result) {
            $this->request_id = $result->id;
            $this->setDataRequest($result);
            $this->findMember();
            $this->alert('success', 'Solicitud recupedara con exíto.');
        } else {
            $this->alert('warning', 'No se encontrarón registros');
        }
    }

    public function findVisit($code_visit = '')
    {
        $this->code_visit = $this->code_visit != '' ? $this->code_visit : $code_visit;
        $result = AdvisorVisit::where('code', $this->code_visit)->first();
        if ($result) {
            $this->visit_id = $result->id;
            $this->setDataVisit($result);
            $this->alert('success', 'Visita recupedara con exíto.');
        } else {
            $this->alert('warning', 'No se encontrarón registros');
        }
    }

    public function setDataRequest($req)
    {
        $this->credit_req = $req->credit_type;
        $this->amount_req = $req->amount;
        $this->term_req = $req->deadline;
        $this->doc_number_req = $req->member->doc_number;
        $this->name_req = $req->member->name;
        $this->last_name_req = $req->member->last_name;
        $this->phone_req = $req->member->phone1;
        $this->date_req = Carbon::parse($req->created_at)->format('Y-m-d');
    }

    public function setDataVisit($visit)
    {
        $this->credit_visit = $visit->credit_type;
        $this->amount_visit = $visit->amount;
        $this->term_visit = $visit->deadline;
        $this->doc_number_visit = $visit->member->doc_number;
        $this->name_visit = $visit->member->name;
        $this->last_name_visit = $visit->member->last_name;
        $this->phone_visit = $visit->member->phone1;
        $this->date_visit = Carbon::parse($visit->created_at)->format('Y-m-d');
    }

    public function store()
    {
        $this->validate([
            'member_id' => 'required',
            'amount' => 'required|numeric',
            'interest_rate' => 'required|numeric',
            'term' => 'required|numeric',
            'fixed_free' => 'required',
            'period' => 'required',
            'credit_type' => 'required',
            'settlement_date' => 'required',
            'due_date' => 'required|date',
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
            $this->alert('success', 'Amortización registrada con exíto.');
        }


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

    public function storeFinal()
    {
        $this->alert('success', 'Ejecutado  con éxito.');
    }
//    public function print()
//    {
//        $this->alert('success', 'Acción configurada.');
//    }
    //ATTACHMENTS
    public function storeDoc()
    {
        $this->Validate([
            'name_doc' => 'required',
            'description_doc' => 'required',
            'url_doc' => 'required',
        ], [
            'name_doc.required' => 'Campo obligatorio.',
            'description_doc.required' => 'Campo obligatorio.',
            'url_doc.required' => 'Campo obligatorio.',
        ]);


        if ($this->credit_id != null) {
            $credit = Credits::find($this->credit_id);
            //save doc
            $name = "file-" . time() . '.' . $this->url_doc->getClientOriginalExtension();
            $path = 'docs/attachments/' . $this->url_doc->storeAs('/', $name, 'attachments');


            $doc = new Attachment([
                'name_doc' => $this->name_doc,
                'description_doc' => $this->description_doc,
                'url_doc' => $path,
                'status' => $this->status_doc
            ]);

            $credit->attachments()->save($doc);

            $this->alert('success', 'Anexo registrado con éxito.');
            $this->resetInputFieldsDoc();
        } else {
            $this->alert('error', 'Registre un crédito.');
            $this->resetInputFieldsDoc();
        }


    }

    public function editDoc($id)
    {
        $this->action_doc = 'PUT';

        $doc = Attachment::find($id);
//        dd($doc);
        $this->doc_id = $doc->id;
        $this->name_doc = $doc->name_doc;
        $this->description_doc = $doc->description_doc;
        $this->url_doc = $doc->url_doc;
    }

    public function updateDoc()
    {
        $doc = Attachment::find($this->doc_id);
        $this->Validate([
            'name_doc' => 'required',
            'description_doc' => 'required',
            'url_doc' => 'required',
        ], [
            'name_doc.required' => 'Campo obligatorio.',
            'description_doc.required' => 'Campo obligatorio.',
            'url_doc.required' => 'Campo obligatorio.',
        ]);


        if ($this->credit_id != null) {
            if ($this->url_doc != $doc->url_doc) {
                $name = "file-" . time() . '.' . $this->url_doc->getClientOriginalExtension();
                $path = 'docs/attachments/' . $this->url_doc->storeAs('/', $name, 'attachments');
            } else {
                $path = $doc->url_doc;
            }


            $data = [
                'name_doc' => $this->name_doc,
                'description_doc' => $this->description_doc,
                'url_doc' => $path,
                'status' => $this->status_doc
            ];

            $doc->update($data);

            $this->alert('success', 'Anexo actualizado con éxito.');
            $this->resetInputFieldsDoc();
        } else {
            $this->alert('error', 'Registre un crédito.');
            $this->resetInputFieldsDoc();
        }
    }

    public function deleteDoc($id)
    {
        $doc = Attachment::find($id);
        $doc->delete();
        $this->alert('success', 'Anexo eliminado con éxito.');
        $this-> resetInputFieldsDoc();
    }

    public function resetInputFieldsDoc()
    {
        $this->action_doc = 'POST';
        $this->doc_id = null;
        $this->name_doc = '';
        $this->description_doc = '';
        $this->url_doc = null;
    }
    public function getLastNumber()
    {
        $re_last = ConfigTable::where('identifier', 'credito')->first();
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

    public function print(){

        $this->validate([
            'name' => 'required',
            'dni' => 'required|numeric',
            'address' => 'required',
            'phone' => 'required|numeric',
            'amount' => 'required|numeric',
            'interest_rate' => 'required|numeric',
            'term' => 'required|numeric',
            'fixed_free' => 'required',
            'period' => 'required',
            'credit_type' => 'required',
            'settlement_date' => 'required',
            'due_date' => 'required|date',
        ]);


        $member = [
            'dni' => $this->dni,
            'name' => $this->name,
            'address' => $this->address,
            'phone' => $this->phone
        ];

        $dataOperation = [
            'amount' => $this->amount,
            'term' => $this->term,
            'period' => $this->period,

            'interest_rate' => $this->interest_rate,
            'fixed_free' => $this->fixed_free,
            'credit_type' => $this->credit_type,

            'settlement_date' => $this->settlement_date,
            'due_date' => $this->due_date,
        ];

        $dataTable =  $this->data_table ;

        $pdf = PDF::loadView('pdf.pdf_amortization', compact('member', 'dataOperation','dataTable'));
        $nombrePdf = 'reporte-amortizacion-' . $this->name . '-' . time() . '.pdf';

        return response()->streamDownload(function () use ($pdf) {
            echo $pdf->stream();
        }, $nombrePdf);
    }

}
