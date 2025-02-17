<?php

namespace App\Filament\Resources\KasKelasResource\Pages;

use App\Filament\Resources\KasKelasResource;
use App\Models\KasKelas;
use App\Models\Saldo;
use App\Models\TarikSaldo;
use Filament\Actions;
use Filament\Resources\Pages\CreateRecord;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class CreateKasKelas extends CreateRecord
{
    protected static string $resource = KasKelasResource::class;

    protected function handleRecordCreation(array $data): Model
    {

        $transaction_id = '#'.(string) Str::uuid();
        $data['transaction_id'] = $transaction_id;
        $tarikSaldo = TarikSaldo::create($data);

        $saldo = Saldo::latest()->first();
        $saldo->decrement('saldo', $data['debit']);
        $saldo->save();


        return $tarikSaldo;
    }
}
