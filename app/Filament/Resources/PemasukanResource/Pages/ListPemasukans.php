<?php

namespace App\Filament\Resources\PemasukanResource\Pages;

use App\Filament\Resources\PemasukanResource;
use Filament\Actions;
use Filament\Actions\ActionGroup;
use Filament\Forms\Components\Actions\Action;
use Filament\Resources\Pages\ListRecords;

class ListPemasukans extends ListRecords
{
    protected static string $resource = PemasukanResource::class;


    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
            Actions\CreateAction::make('Print Laporan')
            ->label('Print Laporan')
            ->url(url(route('print.laporan-pemasukan'))),

        ];
    }

}
