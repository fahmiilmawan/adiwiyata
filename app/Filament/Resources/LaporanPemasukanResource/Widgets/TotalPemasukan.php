<?php

namespace App\Filament\Widgets;

use App\Models\BankSampah;
use Filament\Widgets\Widget;

class TotalPemasukan extends Widget
{
    protected static ?string $heading = 'Laporan Pemasukan';

    protected static ?int $sort = 1; // Urutan widget di dashboard

    protected static ?string $pollingInterval = '10s'; // Widget akan merefresh setiap 10 detik (opsional)

    protected static string $view = 'filament.resources.laporan-pemasukan-resource.widgets.total-pemasukan';

    public function getData(): array
    {
        $todayTotal = BankSampah::whereDate('created_at', now()->toDateString())
            ->sum('total_harga');

        $overallTotal = BankSampah::sum('total_harga');

        return [
            'todayTotal' => $todayTotal,
            'overallTotal' => $overallTotal,
        ];
    }
}
