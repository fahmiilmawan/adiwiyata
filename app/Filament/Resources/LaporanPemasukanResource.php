<?php

namespace App\Filament\Resources;

use App\Filament\Resources\LaporanPemasukanResource\Pages;
use App\Filament\Resources\LaporanPemasukanResource\RelationManagers;
use App\Models\BankSampah;
use App\Models\LaporanPemasukan;
use Dompdf\FrameDecorator\Text;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Columns\Summarizers\Sum;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class LaporanPemasukanResource extends Resource
{
    protected static ?string $model = BankSampah::class;

    protected static ?string $navigationGroup = 'Laporan';

    protected static ?string $navigationLabel = 'Laporan Pemasukan Kelas';

    protected static ?int $navigationSort = 5;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';


    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                //
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('kelas.nama_kelas')
                    ->label('Kelas')
                    ->searchable()
                    ->sortable(),

                TextColumn::make('jumlah')
                    ->label('Jumlah (Kg)')
                    ->searchable()
                    ->sortable(),

                TextColumn::make('harga')
                    ->label('Harga (Rp)')
                    ->searchable()
                    ->sortable(),

                TextColumn::make('total_harga')
                    ->label('Total (Rp)')
                    ->searchable()
                    ->sortable()
                    ->summarize([
                        Sum::make('total_harga')
                        ->label('Total Pemasukan'),
                    ]),
            ])
            ->filters([
                //
            ])
            ->actions([
                //
            ])
            ->bulkActions([
               //
            ]);
    }


    public static function getRelations(): array
    {
        return [
            //
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListLaporanPemasukans::route('/'),
            // 'create' => Pages\CreateLaporanPemasukan::route('/create'),
            // 'edit' => Pages\EditLaporanPemasukan::route('/{record}/edit'),
        ];
    }
}
