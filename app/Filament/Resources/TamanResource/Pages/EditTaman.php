<?php

namespace App\Filament\Resources\TamanResource\Pages;

use App\Filament\Resources\TamanResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;
use Illuminate\Database\Eloquent\Model;

class EditTaman extends EditRecord
{
    protected static string $resource = TamanResource::class;

    
    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
