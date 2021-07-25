<?php

namespace App\Http\Controllers\Report;

use App\Models\Member;
use App\Models\Transaction;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Barryvdh\DomPDF\Facade as PDF;

class Libreta extends Controller
{
    public function libreta($id)
    {
        $member = Member::find($id);
        $transactions = Transaction::where('member_id',$id)->get();
        $pdf = PDF::loadView('pdf.pdf_libreta', compact('transactions', 'member'));
        $nombrePdf = 'reporte-libreta - ' . $member->name . '  ' . $member->last_name . '  ' . time() . '.pdf';
        return $pdf->download($nombrePdf);
    }
}
