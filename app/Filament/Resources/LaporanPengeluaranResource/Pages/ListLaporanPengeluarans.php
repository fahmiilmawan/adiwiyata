<?php

namespace App\Filament\Resources\LaporanPengeluaranResource\Pages;

use App\Filament\Resources\LaporanPengeluaranResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;
use Barryvdh\DomPDF\Facade\Pdf;
use Illuminate\Support\Facades\Response;
use App\Models\LaporanPengeluaran;

class ListLaporanPengeluarans extends ListRecords
{
    protected static string $resource = LaporanPengeluaranResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),

            Actions\Action::make('print_pdf')
                ->label('Print PDF')
                ->icon('heroicon-o-printer')
                ->color('danger')
                ->action(fn () => $this->exportPdf()) // Memanggil fungsi exportPdf()
                ->requiresConfirmation()
                ->modalHeading('Cetak Laporan Pengeluaran')
                ->modalDescription('Apakah Anda yakin ingin mencetak semua laporan pengeluaran ke dalam PDF?')
                ->modalSubmitActionLabel('Cetak'),
        ];
    }

    public function exportPdf()
    {
        $records = LaporanPengeluaran::all();

        if ($records->isEmpty()) {
            return back()->with('error', 'Tidak ada data untuk dicetak.');
        }

        $pdf = Pdf::loadView('print.laporan_pengeluaran', compact('records'));

        return Response::streamDownload(
            fn () => print($pdf->output()),
            'laporan_pengeluaran.pdf'
        );
    }
}
