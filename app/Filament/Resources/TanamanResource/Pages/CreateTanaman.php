<?php

namespace App\Filament\Resources\TanamanResource\Pages;

use App\Filament\Resources\TanamanResource;
use Filament\Actions;
use Filament\Resources\Pages\CreateRecord;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class CreateTanaman extends CreateRecord
{
    protected static string $resource = TanamanResource::class;

    public function handleRecordCreation(array $data) : Model
    {
        $data['slug'] = Str::slug($data['nama_tanaman']);

        $record = parent::handleRecordCreation($data);

        return $record;
    }

}
