<?php

namespace App\Filament\Resources\TarikSaldoResource\Pages;

use App\Filament\Resources\TarikSaldoResource;
use App\Models\KasKelas;
use App\Models\Kelas;
use App\Models\LaporanPengeluaran;
use App\Models\Saldo;
use App\Models\TarikSaldo;
use Filament\Actions;
use Filament\Notifications\Notification;
use Filament\Resources\Pages\CreateRecord;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class CreateTarikSaldo extends CreateRecord
{
    protected static string $resource = TarikSaldoResource::class;

    protected function handleRecordCreation(array $data): Model
    {
        $saldo = Saldo::latest()->first();
        $kasKelas = KasKelas::where('id', $data['kas_kelas_id'])->first();

        if (!$saldo || !$kasKelas) {
            Notification::make()
                ->title('Kesalahan')
                ->body('Data saldo atau kas kelas tidak ditemukan.')
                ->danger()
                ->send();
            $this->halt();
        }

        $sisaSaldo = $saldo->saldo - $data['debit'];
        if ($sisaSaldo < 25000) {
            Notification::make()
                ->title('Saldo Tidak Cukup')
                ->body('Saldo tidak boleh kurang dari 25.000 setelah ditarik.')
                ->danger()
                ->send();
            $this->halt();
        }

        $transaction_id = '#' . (string) Str::uuid();
        $data['transaction_id'] = $transaction_id;

        $tarikSaldo = TarikSaldo::create($data);

        $saldo->decrement('saldo', $data['debit']);

        $kasKelas->decrement('saldo', $data['debit']);

        $kelas = Kelas::where('id', $kasKelas->kelas_id)->first();

        LaporanPengeluaran::create([
            'jenis_pengeluaran' => 'Tarik Saldo',
            'deskripsi' => 'Pengeluaran Tarik Saldo oleh kelas ' . ($kelas->nama_kelas ?? 'Tidak Diketahui'),
            'jumlah' => 1,
            'harga' => $data['debit'], 
            'total' => $data['debit'],
        ]);

        Notification::make()
            ->title('Tarik Saldo Berhasil')
            ->body('Saldo berhasil ditarik oleh kelas ' . ($kelas->nama_kelas ?? 'Tidak Diketahui'))
            ->success()
            ->send();

        return $tarikSaldo;
    }
}
