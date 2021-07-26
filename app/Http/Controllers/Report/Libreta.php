<?php

namespace App\Http\Controllers\Report;

use App\Models\Member;
use App\Models\Transaction;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Barryvdh\DomPDF\Facade as PDF;
use Carbon\Carbon;
use Exception;
class Libreta extends Controller
{
    public function notebook(Request $request,$id)
    {
        try {
            $init =  !empty($request->query('desde'))  ?$request->query('desde') : Carbon::now()->startOfMonth()->format('Y-m-d');
            $final =  !empty($request->query('hasta')) ?$request->query('hasta') : Carbon::now()->endOfMonth()->format('Y-m-d');
            $subTitle = "Reporte Estado de Cuenta";
            $member = Member::find($id);
            $transactions = Transaction::where('member_id',$id)->whereBetween('date',[$init,$final])->get();
            $pdf = PDF::loadView('pdf.pdf_libreta', compact('transactions', 'member'));
            $nombrePdf = 'reporte-libreta-'. $member->name . '  ' . $member->last_name . '  ' . time() . '.pdf';
            return $pdf->download($nombrePdf);
        } catch (Exception $e) {
            return redirect()->route('dashboard');
        }
    }
    public function transactions(Request $request,$id)
    {
        $type =  !empty($request->query('type')) && $request->query('type') == 'deposito'?'deposito' : 'retiro';
        $subTitle = "Reporte General";
        $subTitle = $type =="deposito"?"Reporte de Retiros":"Reporte de Depositos";
        $member = Member::find($id);
        $transactions = Transaction::where('member_id',$id)->where('data1',$type)->get();
        $pdf = PDF::loadView('pdf.pdf_libreta', compact('transactions', 'member'));
        $nombrePdf = 'reporte-trasancciones-'.$type.'-' . $member->name . '  ' . $member->last_name . '  ' . time() . '.pdf';
        return $pdf->download($nombrePdf);
    }
}
