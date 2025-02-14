<?php

namespace App\Filament\Resources\KasKelasResource\Pages;

use App\Filament\Resources\KasKelasResource;
use Filament\Actions;
use Filament\Actions\ActionGroup;
use Filament\Forms\Components\Actions\Action;
use Filament\Resources\Pages\ListRecords;

class ListKasKelas extends ListRecords
{
    protected static string $resource = KasKelasResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
            Actions\CreateAction::make('Print kas Kelas')
            ->label('Print kas Kelas')
            ->url(url(route('print.laporan-KasKelas'))),
        ];
    }
}
