<?php

namespace App\Filament\Resources\PeternakanResource\Pages;

use App\Filament\Resources\PeternakanResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListPeternakans extends ListRecords
{
    protected static string $resource = PeternakanResource::class;

    public function getHeading(): string
    {
        return 'Peternakan';
    }

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
