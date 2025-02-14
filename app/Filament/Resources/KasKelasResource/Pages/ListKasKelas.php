<?php

namespace App\Filament\Resources\KasKelasResource\Pages;

use App\Filament\Resources\KasKelasResource;
use App\Models\KasKelas;
use Barryvdh\DomPDF\Facade\Pdf;
use Filament\Actions;
use Filament\Actions\ActionGroup;
use Filament\Forms\Components\Actions\Action;
use Filament\Notifications\Collection;
use Filament\Resources\Pages\ListRecords;
use Illuminate\Support\Facades\Response;

class ListKasKelas extends ListRecords
{
    protected static string $resource = KasKelasResource::class;

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
        $records = KasKelas::all();


        $pdf = Pdf::loadView('print.laporan-kas-kelas', compact('records'));

        return Response::streamDownload(
            fn () => print($pdf->output()),
            'laporan-kas-kelas.pdf'
        );
    }
}
