<?php

namespace App\Http\Livewire\CreditRequest;

use Livewire\Component;
use App\Models\CreditRequest;
use Livewire\WithPagination;

class ListRequests extends Component
{
    use WithPagination;

    protected $queryString = [
        'search' => ['except' => ''],
        'perPage' => ['except' => '10'],
    ];
    public $perPage = '10';
    public $search = '';

    public $member_type='Nuevo',$search_number="";
    public $valSt = "";
    public $modal = false;
    public function render()
    {
        $list_requests =  CreditRequest::orderBy('created_at','ASC')->paginate($this->perPage);
        if($this->valSt==""){
            if($this->member_type!="Todos"){
                $list_requests =  CreditRequest::where('credit_type',$this->member_type)->orderBy('created_at','ASC')->paginate($this->perPage);
            }
        }
        else{
            $list_requests =  CreditRequest::where('code',$this->valSt)
            ->paginate($this->perPage);
        }
        $new_re = count(CreditRequest::where('credit_type','Nuevo')->get());
        $ref_re = count(CreditRequest::where('credit_type','Refinanciación')->get());
        $rev_re = count(CreditRequest::where('credit_type','revision')->get());
        $an_re = count(CreditRequest::where('credit_type','anulado')->get());
        return view('livewire.credit-request.list-requests',
        compact('list_requests','new_re','ref_re','rev_re','an_re'))
        ->extends('layouts.app')
        ->section('subcontent');
    }
    public function searchChange()
    {
        $this->valSt = $this->search_number;
    }
    public function refresh()
    {
        $this->valSt = "";
        $this->search_number = "";
        $this->member_type = "Nuevo";
    }

    public function edit($id){
        return redirect()->route('update-request',[$id]);
    }

    public function delete($id){
        $credit_request  = CreditRequest::find($id);
        $credit_request->delete();
        $this->alert('success','Solicitud eliminada con exito.');
    }
}
