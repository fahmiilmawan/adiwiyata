<?php

namespace App\Filament\Resources\LaporanPengeluaranResource\Pages;

use App\Filament\Resources\LaporanPengeluaranResource;
use App\Filament\Widgets\SaldoWidget;
use Filament\Actions;
use Filament\Notifications\Collection;
use Filament\Resources\Pages\ListRecords;
use Barryvdh\DomPDF\Facade\Pdf;
use Illuminate\Support\Facades\Response;
use App\Models\LaporanPengeluaran;


class ListLaporanPengeluarans extends ListRecords
{
    protected static string $resource = LaporanPengeluaranResource::class;

    protected function getHeaderWidgets(): array
    {
        return [
            SaldoWidget::class,
        ];
    }

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
            Actions\Action::make('Print PDF')
            ->label('Print PDF')
            ->icon('heroicon-o-printer')
            ->action(fn (Collection $records) => static::exportPdf($records))
            ->requiresConfirmation()
            ->modalHeading('Print Laporan Pengeluaran')
            ->modalDescription('Apakah Anda yakin ingin mencetak laporan ini ke dalam PDF?')
            ->modalSubmitActionLabel('Cetak'),
        ];
    }

    public function exportPdf()
    {
        $records = LaporanPengeluaran::all();


        $pdf = Pdf::loadView('print.laporan_pengeluaran', compact('records'));

        return Response::streamDownload(
            fn () => print($pdf->output()),
            'laporan_pengeluaran.pdf'
        );
    }
}
