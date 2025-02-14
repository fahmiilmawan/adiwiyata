<?php

namespace App\Filament\Resources\LaporanPengeluaranResource\Pages;

use App\Filament\Resources\LaporanPengeluaranResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditLaporanPengeluaran extends EditRecord
{
    protected static string $resource = LaporanPengeluaranResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
