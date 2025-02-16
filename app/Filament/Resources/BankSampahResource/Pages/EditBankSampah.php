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

    protected function handleRecordUpdate(Model $record, array $data): Model
    {
        // Hitung selisih perubahan total harga
        $selisihTotal = $data['total_harga'] - $record->total_harga;

        // Update data bank sampah
        $record->update($data);

        // Update pemasukan berdasarkan transaksi
        $pemasukan = Pemasukan::where('transaction_id', $record->transaction_id)->first();
        if ($pemasukan) {
            $pemasukan->jumlah = $data['jumlah'];
            $pemasukan->total = $data['total_harga'];
            $pemasukan->save();
        }

        // Update kas kelas dengan menyesuaikan selisih total harga
        $kasKelas = KasKelas::where('transaction_id', $record->transaction_id)->first();
        if ($kasKelas) {
            $kasKelas->saldo += $selisihTotal; // Tambahkan/dikurangi saldo berdasarkan perubahan
            $kasKelas->save();
        }

        // Update saldo keseluruhan
        $saldoTerakhir = Saldo::latest()->first();
        if ($saldoTerakhir) {
            $saldoTerakhir->saldo += $selisihTotal; // Perubahan saldo sesuai selisih
            $saldoTerakhir->save();
        }

        return $record;
    }

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
