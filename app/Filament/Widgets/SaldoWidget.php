<?php

namespace App\Filament\Widgets;

use App\Models\Saldo;
use Filament\Widgets\Widget;

class SaldoWidget extends Widget
{
    protected static string $view = 'filament.widgets.saldo-widget';

    public function getSaldo(): string
    {
        $saldo = Saldo::latest()->first();
        return $saldo ? 'Rp ' . number_format($saldo->saldo, 0, ',', '.') : 'Rp 0';
    }
}
