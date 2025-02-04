<?php

namespace App\Filament\Resources\TanamanResource\Pages;

use App\Filament\Resources\TanamanResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListTanamen extends ListRecords
{
    protected static string $resource = TanamanResource::class;

    public function getHeading(): string
    {
        return 'Tanaman';
    }

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),

            Actions\CreateAction::make('Print QR Code')
            ->label('Print QR Code')
            ->url(url(route('print.qr-code'))),
        ];


    }
}
