<?php

namespace App\Filament\Resources\KelompokResource\Pages;

use App\Filament\Resources\KelompokResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListKelompoks extends ListRecords
{
    protected static string $resource = KelompokResource::class;

    public function getHeading(): string
    {
        return 'Kelompok';
    }

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
