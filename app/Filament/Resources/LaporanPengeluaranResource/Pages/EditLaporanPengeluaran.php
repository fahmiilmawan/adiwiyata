<?php

namespace App\Filament\Resources\LaporanPengeluaranResource\Pages;

use App\Filament\Resources\LaporanPengeluaranResource;
use App\Models\Saldo;
use App\Models\LaporanPengeluaran;
use Filament\Actions;
use Filament\Notifications\Notification;
use Filament\Resources\Pages\EditRecord;
use Illuminate\Database\Eloquent\Model;

class EditLaporanPengeluaran extends EditRecord
{
    protected static string $resource = LaporanPengeluaranResource::class;

    protected function handleRecordUpdate(Model $record, array $data): Model
    {
        // Ambil total pengeluaran lama sebelum update
        $pengeluaranLama = LaporanPengeluaran::where('id', $record->id)->first();
        $totalLama = $pengeluaranLama?->total ?? 0;

        // Ambil saldo terakhir
        $saldoTerakhir = Saldo::latest()->first();
        $saldoSaatIni = $saldoTerakhir?->saldo ?? 0;

        // Hitung selisih pengeluaran
        $selisih = $data['total'] - $totalLama;

        // Jika pengeluaran meningkat dan saldo tidak cukup, tampilkan notifikasi error
        if ($selisih > 0 && $saldoSaatIni < $selisih) {
            Notification::make()
                ->title('Saldo Tidak Cukup')
                ->danger()
                ->body('Saldo tidak mencukupi untuk meningkatkan pengeluaran ini.')
                ->send();

            return $record; // Batalkan update tanpa error
        }

        // Update pengeluaran dengan nilai baru
        $record->update($data);

        // Perbarui saldo sesuai perubahan pengeluaran
        $saldoTerakhir->decrement('saldo', $selisih);

        // Tampilkan notifikasi sukses
        Notification::make()
            ->title('Pengeluaran Diperbarui')
            ->success()
            ->body('Data pengeluaran berhasil diperbarui.')
            ->send();

        return $record;
    }

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
