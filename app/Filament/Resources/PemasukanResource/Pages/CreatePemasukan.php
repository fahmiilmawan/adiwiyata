<?php

namespace App\Filament\Resources\PemasukanResource\Pages;

use App\Filament\Resources\PemasukanResource;
use Filament\Actions;
use Filament\Resources\Pages\CreateRecord;
use App\Models\Saldo;
use Illuminate\Database\Eloquent\Model; 

class CreatePemasukan extends CreateRecord
{
    protected static string $resource = PemasukanResource::class;

    protected function handleRecordCreation(array $data): Model
    {

        $pemasukan = static::getModel()::create($data);


        $saldoTerakhir = Saldo::latest()->first();


        $saldoBaru = ($saldoTerakhir?->saldo ?? 0) + $pemasukan->total;

        Saldo::query()->delete();

        Saldo::create([
            'saldo' => $saldoBaru,
        ]);

        return $pemasukan;
    }
}
