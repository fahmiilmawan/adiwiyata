<?php

namespace App\Filament\Resources\TanamanResource\Pages;

use App\Filament\Resources\TanamanResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class EditTanaman extends EditRecord
{
    protected static string $resource = TanamanResource::class;

    protected function mutateFormDataBeforeSave(array $data): array
    {
        if (!empty($data['nama_tanaman'])) {
            $data['slug'] = Str::slug($data['nama_tanaman']);
        }

        return $data;
    }

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
