<?php

namespace App\Filament\Resources\KasKelasResource\Pages;

use App\Filament\Resources\KasKelasResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListKasKelas extends ListRecords
{
    protected static string $resource = KasKelasResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
