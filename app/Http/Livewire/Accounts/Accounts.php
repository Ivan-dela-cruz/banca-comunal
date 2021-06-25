<?php

namespace App\Http\Livewire\Accounts;

use Livewire\Component;
use App\Models\AccountClient;
use App\Models\ConfigTable;
use App\Models\Member;
use Livewire\WithPagination;

class Accounts extends Component
{
    use WithPagination;

    protected $queryString = [
        'search' => ['except' => ''],
        'perPage' => ['except' => '10'],
    ];
    public $perPage = '10';
    public $search = '';

    public $member_type = "cliente",$search_number="";
    public $valSt = "";
    public $modal = false;
    //EDIT MODAL
    public $member_type_modal,$acount_number_modal,$status_modal;

    //MEMBER
    public $member_id, $block_account=false, $names_modal, $doc_number_modal;
    public $serie_ac, $secuence_ac, $number_ac;
public $vass= "nill";

    public function render()
    {
        $accounts =  AccountClient::orderBy('created_at','ASC')->paginate($this->perPage);
        if($this->valSt==""){
            if($this->member_type!="Todos"){
                $accounts =  AccountClient::where('type',$this->member_type)->orderBy('created_at','ASC')->paginate($this->perPage);
            }
        }
        else{
            $accounts =  AccountClient::where('number',$this->valSt)
            ->orWhere('code',$this->valSt)
            ->paginate($this->perPage);
        }
        $this->getLastNumber();
        $this->getAccount();
        return view('livewire.accounts.accounts',compact('accounts'))
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
        $this->member_type = "cliente";
    }
    public function edit($id)
    {
        $account_edit = AccountClient::find($id);
        $this->member_type_modal= $account_edit->type;
        $this->acount_number_modal= $account_edit->number;
        $this->status_modal= $account_edit->status;
        $memberAux= Member::find($account_edit->member_id);
        $this->member_id  = $memberAux->id;
        $this->names_modal = $memberAux->last_name." ".$memberAux->name;
        $this->doc_number_modal = $memberAux->doc_number;
    }
    public function getAccount()
    {
        $account = AccountClient::where('member_id', $this->member_id)->first();
        if($account){
            $this->block_account = true;
            return;
        }
        $this->block_account = false;
    }
    public function getLastNumber()
    {
        $re_last = ConfigTable::where('identifier', $this->member_type)->first();
        if($re_last){
            $codeAux = strval($re_last->complemenet+$re_last->secuence+1);
            $codeAux= ltrim($codeAux, '1');
            $this->serie_ac=$re_last->serie;
            $this->secuence_ac=$re_last->secuence+1;
            $this->number_ac=($re_last->serie)."".($codeAux);
            $this->acount_number_modal =  $this->number_ac;
        }
    }
    public function storeFinal()
    {

    }
}
