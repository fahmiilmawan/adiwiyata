<?php

namespace App\Filament\Resources\BankSampahResource\Pages;

use App\Filament\Resources\BankSampahResource;
use App\Models\KasKelas;
use App\Models\Pemasukan;
use App\Models\Saldo;
use Filament\Actions;
use Illuminate\Database\Eloquent\Model;
use Filament\Resources\Pages\EditRecord;

class EditBankSampah extends EditRecord
{
    protected static string $resource = BankSampahResource::class;

    //Customizing handle record before update
    protected function handleRecordUpdate(Model $record, array $data): Model
    {
        $pemasukan = Pemasukan::where('transaction_id', $record->transaction_id)->first();
        $pemasukan->jumlah = $data['jumlah'];
        $pemasukan->total = $data['total'];
        $pemasukan->save();

        $kasKelas = KasKelas::where('transaction_id', $record->transaction_id)->first();
        $kasKelas->saldo = $data['total'];
        $kasKelas->save();

        $saldoTerakhir = Saldo::latest()->first();
        $saldoBaru = ($saldoTerakhir?->saldo ?? 0) - $data['total'];
        $saldoTerakhir->saldo = $saldoBaru;
        $saldoTerakhir->save();

        return $record;
    }

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }

}
