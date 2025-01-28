<?php

namespace App\Filament\Resources\LaporanPemasukanResource\Pages;

use App\Filament\Resources\LaporanPemasukanResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditLaporanPemasukan extends EditRecord
{
    protected static string $resource = LaporanPemasukanResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
