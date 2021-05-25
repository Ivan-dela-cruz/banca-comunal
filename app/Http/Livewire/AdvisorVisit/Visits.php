<?php

namespace App\Http\Livewire\AdvisorVisit;

use Livewire\Component;
use App\Models\AdvisorVisit;
class Visits extends Component
{
    public $member_type='Nuevo',$search_number="";
    public $valSt = "";
    public $modal = false;
    public function render()
    {
        $list_requests =  AdvisorVisit::orderBy('created_at','ASC')->get();
        if($this->valSt==""){
            if($this->member_type!="Todos"){
                $list_requests =  AdvisorVisit::where('credit_type',$this->member_type)->orderBy('created_at','ASC')->get();
            }
        }
        else{
            $list_requests =  AdvisorVisit::where('code',$this->valSt)
            ->get();
        }
        $new_re = count(AdvisorVisit::where('credit_type','Nuevo')->get());
        $ref_re = count(AdvisorVisit::where('credit_type','Refinanciación')->get());
        $rev_re = count(AdvisorVisit::where('credit_type','revision')->get());
        $an_re = count(AdvisorVisit::where('credit_type','anulado')->get());
        return view('livewire.advisor-visit.visits',
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
}
