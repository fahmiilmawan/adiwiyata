<?php

namespace App\Filament\Resources\BankSampahResource\Pages;

use App\Filament\Resources\BankSampahResource;
use App\Models\BankSampah;
use Filament\Actions;
use App\Models\KasKelas;
use App\Models\Kelas;
use App\Models\Pemasukan;
use App\Models\Saldo;
use Illuminate\Database\Eloquent\Model;
use Filament\Resources\Pages\CreateRecord;
use Illuminate\Support\Str;

class CreateBankSampah extends CreateRecord
{
    protected static string $resource = BankSampahResource::class;


    protected function handleRecordCreation(array $data): Model
    {
        $transactionID = '#'.(string) Str::uuid();
        $data['transaction_id'] = $transactionID;
        $bankSampah = BankSampah::create($data);

        $kasKelas = KasKelas::where('kelas_id', $bankSampah->kelas_id)->first();
        if (!$kasKelas) {
            $kasKelas = KasKelas::create([
                'kelas_id' => $bankSampah->kelas_id,
                'saldo' => $bankSampah->total_harga,
                'transaction_id' => $transactionID,
            ]);

        } else{
            $kasKelas->saldo += $bankSampah->total_harga;
            $kasKelas->save();
        }

            $kelas = Kelas::find($bankSampah->kelas_id);
            $pemasukan = Pemasukan::create([
                'jenis_pemasukan' => 'Bank Sampah',
                'deskripsi' => 'Pemasukan Bank Sampah Dari Kelas ' . $kelas->nama_kelas,
                'jumlah' => $bankSampah->jumlah,
                'harga' => $bankSampah->harga,
                'total' => $bankSampah->total_harga,
                'transaction_id' => $transactionID,
            ]);
            $pemasukan->save();

        $saldo = Saldo::latest()->first();
        if (!$saldo) {
            $saldo = Saldo::create([
                'saldo' => $bankSampah->total_harga,
            ]);
        } else {
            $saldo->saldo += $bankSampah->total_harga;
            $saldo->save();
        }

        return $bankSampah;
    }

}
