<?php

namespace App\Filament\Resources\LaporanPemasukanResource\Pages;

use App\Filament\Resources\LaporanPemasukanResource;
use App\Models\BankSampah;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;
use App\Filament\Widgets\TotalPemasukan;

class ListLaporanPemasukans extends ListRecords
{
    protected static string $resource = LaporanPemasukanResource::class;

    public function getHeading(): string
    {
        return 'Laporan Pemasukan';
    }

    // protected function getHeaderWidgets(): array
    // {
    //     return [
    //         TotalPemasukan::class,
    //     ];
    // }


    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make('Print PDF')
                ->label('Print PDF')
                ->url(url(route('print.laporan-pemasukan'))),
        ];
    }
}
