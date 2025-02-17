<?php

namespace App\Filament\Resources\TarikSaldoResource\Pages;

use App\Filament\Resources\TarikSaldoResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditTarikSaldo extends EditRecord
{
    protected static string $resource = TarikSaldoResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
