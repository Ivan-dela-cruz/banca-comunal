<?php

namespace App\Http\Livewire\Members;

use Livewire\Component;
use App\Models\Credits;
use App\Models\Member;
use App\Models\DetailAmortization;
use Carbon\Carbon;
class Profile extends Component
{
    public $member_id,$member,$listCredits=[],$listPayments=[];

    public function mount($id)
    {
        $now =  Carbon::now();
        $this->member = Member::find($id);
        $this->listCredits = Credits::where('member_id', $id)->orderBy('created_at', 'desc')->get();
        $this->listPayments = DetailAmortization::join('amortizations','detail_amortizations.amortization_id','=','amortizations.id')
        ->select('detail_amortizations.*')
        ->whereMonth('detail_amortizations.payment_date', $now->month)
        ->where('amortizations.member_id', $id)
        ->get();
    }

    public function render()
    {
        return view('livewire.members.profile')
        ->extends('layouts.app')
        ->section('subcontent');
    }
}
