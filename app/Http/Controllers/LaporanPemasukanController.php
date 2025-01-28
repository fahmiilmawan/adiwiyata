<?php

namespace App\Http\Controllers;

use Barryvdh\DomPDF\Facade\Pdf as FacadePdf;
use Barryvdh\DomPDF\PDF;
use App\Models\BankSampah;
use Illuminate\Http\Request;

class LaporanPemasukanController extends Controller
{
    public function printPDF()
    {
        $pemasukan = BankSampah::all();

        $pdf = FacadePdf::loadView('print.laporan-pemasukan', compact('pemasukan'));
        return $pdf->download('laporan-pemasukan.pdf');
    }
}
