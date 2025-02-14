<?php

namespace App\Filament\Resources\LaporanPengeluaranResource\Pages;

use App\Filament\Resources\LaporanPengeluaranResource;
use App\Models\Saldo;
use Filament\Actions;
use Filament\Resources\Pages\CreateRecord;
use Illuminate\Database\Eloquent\Model;

class CreateLaporanPengeluaran extends CreateRecord
{
    protected static string $resource = LaporanPengeluaranResource::class;
    protected function handleRecordCreation(array $data): Model
    {

        $pengeluaran = static::getModel()::create($data);


        $saldoTerakhir = Saldo::latest()->first();


        $saldoBaru = ($saldoTerakhir?->saldo ?? 0) - $pengeluaran->total;

        Saldo::query()->delete();

        Saldo::create([
            'saldo' => $saldoBaru,
        ]);

        return $pengeluaran;
    }
}
