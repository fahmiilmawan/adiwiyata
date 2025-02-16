<?php

namespace App\Filament\Resources\LaporanPengeluaranResource\Pages;

use App\Filament\Resources\LaporanPengeluaranResource;
use App\Models\Saldo;
use App\Models\LaporanPengeluaran;
use Filament\Actions;
use Filament\Notifications\Notification;
use Filament\Resources\Pages\CreateRecord;
use Illuminate\Database\Eloquent\Model;

class CreateLaporanPengeluaran extends CreateRecord
{
    protected static string $resource = LaporanPengeluaranResource::class;

    protected function handleRecordCreation(array $data): Model
    {
        // Ambil saldo terakhir
        $saldoTerakhir = Saldo::latest()->first();
        $saldoSaatIni = $saldoTerakhir?->saldo ?? 0;

        // Cek apakah saldo cukup
        if ($saldoSaatIni < $data['total']) {
            Notification::make()
                ->title('Saldo Tidak Cukup')
                ->danger()
                ->body('Saldo tidak mencukupi untuk melakukan pengeluaran ini.')
                ->send();

            $this->halt();
        }

            // Kurangi saldo dengan jumlah pengeluaran
            $saldoTerakhir->decrement('saldo', $data['total']);

            // Tampilkan notifikasi sukses
            Notification::make()
            ->title('Pengeluaran Berhasil')
            ->success()
            ->body('Data pengeluaran berhasil ditambahkan.')
            ->send();

            $pengeluaran = LaporanPengeluaran::create($data);

        return $pengeluaran;
    }
}
