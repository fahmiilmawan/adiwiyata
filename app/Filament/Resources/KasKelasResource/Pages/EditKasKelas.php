<?php

namespace App\Filament\Resources\KasKelasResource\Pages;

use App\Filament\Resources\KasKelasResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditKasKelas extends EditRecord
{
    protected static string $resource = KasKelasResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
