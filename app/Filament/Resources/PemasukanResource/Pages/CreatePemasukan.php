<?php

namespace App\Filament\Resources\PemasukanResource\Pages;

use App\Filament\Resources\PemasukanResource;
use Filament\Actions;
use Filament\Resources\Pages\CreateRecord;
use App\Models\Saldo;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;
class CreatePemasukan extends CreateRecord
{
    protected static string $resource = PemasukanResource::class;

    protected function handleRecordCreation(array $data): Model
    {
        $transactionID = '#'.(string) Str::uuid();
        $data['transaction_id'] = $transactionID;
        $pemasukan = static::getModel()::create($data);

        $saldoTerakhir = Saldo::latest()->first();

        $saldoBaru = ($saldoTerakhir?->saldo ?? 0) + $pemasukan->total;

       $saldoTerakhir->saldo = $saldoBaru;

       $saldoTerakhir->save();

        return $pemasukan;
    }
}
