<?php

namespace App\Http\Livewire\NoteBook;

use App\Models\Member;
use App\Models\DetailMember;
use App\Models\Transaction;
use Livewire\Component;
use Livewire\WithPagination;
use Carbon\Carbon;
class NoteBooks extends Component
{
    use WithPagination;

    protected $queryString = [
        'search' => ['except' => ''],
        'perPage' => ['except' => '10'],
    ];
    public $perPage = '10';
    public $search = '';
    public $action = 'POST';
    public $title,$subtitle,$image,$info1,$info2,$info3,$number,$sec,$cod,$account_num,$member_id;
    public $search_member = "";
    public $date,$names,$doc_number,$account_id,$type_partner,$dateFin;
    public function render()
    {
        $dateAux = Carbon::parse($this->dateFin);
        $dateAux->addDay();
        $transactions = Transaction::orderBy('created_at', 'desc')
            ->where(function ($query) {
                $query->when($this->member_id != null, function ($q) {
                    $q->where('member_id', $this->member_id);
                });
            })->whereBetween('created_at', [$this->date,$dateAux->format('Y-m-d')])
            ->paginate($this->perPage);
        return view('livewire.note-book.note-books', compact('transactions'))
        ->extends('layouts.app')
        ->section('subcontent');
    }

    public function findMember()
    {
       // dd($this->search_member);
        $member = Member::where('account_number', $this->search_member)->first();
      
        if (isset($member)) {
            $this->account_num = $member->account_number;
            $this->member_id = $member->id;
            $this->account_id = $member->account->id;
            $this->names = $member->last_name . " " . $member->name;
            $this->doc_number = $member->doc_number;
            $this->type_partner = $member->member_type;
             
            $this->alert('success', '¡Datos  cargados con exíto!');
        } else {
            $this->action = 'POST';
            $this->account_num = "";
            $this->names = "";
            $this->member_id = 0;
            // $this->resetInputFields();
            $this->alert('warning', 'No se encontrarón registros asociados');
        }
    }

}
