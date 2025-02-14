<?php

namespace App\Filament\Resources\LaporanPengeluaranResource\Pages;

use App\Filament\Resources\LaporanPengeluaranResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListLaporanPengeluarans extends ListRecords
{
    protected static string $resource = LaporanPengeluaranResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
