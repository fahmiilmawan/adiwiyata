<?php

namespace App\Http\Controllers;

use App\Helper\QRCode;
use App\Models\Tanaman;
use Barryvdh\DomPDF\Facade\Pdf as FacadePdf;
use Illuminate\Http\Request;

class TanamanController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $tanaman = Tanaman::all();
        return view('koleksi',compact('tanaman'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $slug)
    {
        $tanaman = Tanaman::where('slug', $slug)->firstOrFail();

        return view('koleksi-detail', [
            'tanaman' => $tanaman
        ]);
    }

    public function printQRCode()
{
    $tanaman = Tanaman::all();

    // Tambahkan QR Code ke setiap tanaman
    $tanaman->map(function ($item) {
        $qrContent = route('koleksi-detail', ['slug' => $item->slug]);
        $item->qrCode = (new QRCode($qrContent))->generate(); // Tambahkan properti qrCode
        return $item;
    });

    // Load view untuk PDF
    $pdf = FacadePdf::loadView('print.qr-code', compact('tanaman'));

    // Unduh file PDF
    return $pdf->download('qr-code.pdf');
}

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
