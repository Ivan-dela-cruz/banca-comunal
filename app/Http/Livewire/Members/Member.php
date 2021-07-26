<?php

namespace App\Http\Livewire\Members;

use Barryvdh\DomPDF\Facade as PDF;
use Livewire\Component;
use App\Models\Member as MemberData;
use Livewire\WithPagination;
class Member extends Component
{
    use WithPagination;

    protected $queryString = [
        'search' => ['except' => ''],
        'perPage' => ['except' => '6'],
    ];
    public $perPage = '6';
    public $search = '';

    public function render()
    {
        $members = MemberData::orderBy('name','ASC')->paginate($this->perPage);
        return view('livewire.members.member',compact('members'))
        ->extends('layouts.app')
        ->section('subcontent');
    }

    public function print(){
        $members = MemberData::orderBy('name','ASC')->get();

        $pdf = PDF::loadView('pdf.pdf_members', compact('members'));
        $nombrePdf = 'reporte-clientes' . time() . '.pdf';

        return response()->streamDownload(function () use ($pdf) {
            echo $pdf->stream();
        }, $nombrePdf);
    }


}
