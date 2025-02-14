<?php

namespace App\Filament\Resources\PemasukanResource\Pages;

use App\Filament\Resources\PemasukanResource;
use App\Filament\Widgets\SaldoWidget;
use App\Models\Pemasukan;
use Barryvdh\DomPDF\Facade\Pdf;
use Filament\Actions;
use Filament\Actions\ActionGroup;
use Filament\Forms\Components\Actions\Action;
use Filament\Notifications\Collection;
use Filament\Resources\Pages\ListRecords;
use Illuminate\Support\Facades\Response;

class ListPemasukans extends ListRecords
{
    protected static string $resource = PemasukanResource::class;

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
            ->modalHeading('Print Laporan Pemasukan')
            ->modalDescription('Apakah Anda yakin ingin mencetak laporan ini ke dalam PDF?')
            ->modalSubmitActionLabel('Cetak'),
        ];
    }

    public function exportPdf()
    {
        $records = Pemasukan::all();


        $pdf = Pdf::loadView('print.laporan-pemasukan', compact('records'));

        return Response::streamDownload(
            fn () => print($pdf->output()),
            'laporan-pemasukan.pdf'
        );
    }

}
