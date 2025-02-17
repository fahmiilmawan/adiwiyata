<?php

namespace App\Filament\Resources\TarikSaldoResource\Pages;

use App\Filament\Resources\TarikSaldoResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListTarikSaldos extends ListRecords
{
    protected static string $resource = TarikSaldoResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
