<?php

namespace App\Filament\Resources\PemasukanResource\Pages;

use App\Filament\Resources\PemasukanResource;
use App\Models\Saldo;
use App\Models\Pemasukan;
use Illuminate\Database\Eloquent\Model;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditPemasukan extends EditRecord
{
    protected static string $resource = PemasukanResource::class;

    protected function handleRecordUpdate(Model $record, array $data): Model
    {
        // Ambil pemasukan lama sebelum diupdate
        $pemasukanLama = Pemasukan::where('transaction_id', $record->transaction_id)->first();

        if ($pemasukanLama) {
            $totalLama = $pemasukanLama->total;
        } else {
            $totalLama = 0;
        }


        $record->update($data);


        $selisihTotal = $data['total'] - $totalLama;


        $saldoTerakhir = Saldo::latest()->first();
        if ($saldoTerakhir) {
            $saldoTerakhir->increment('saldo', $selisihTotal);
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
