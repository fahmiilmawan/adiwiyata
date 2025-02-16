<?php

namespace App\Filament\Resources;

use App\Filament\Resources\PemasukanResource\Pages;
use App\Filament\Resources\PemasukanResource\RelationManagers;
use App\Filament\Resources\PemasukanResource\RelationManagers\SaldoRelationManager;
use App\Filament\Resources\PemasukanResource\Widgets\SaldoWidget;
use App\Filament\Resources\SaldoResource\RelationManagers\PemasukanRelationManager;
use App\Models\Pemasukan;
use App\Models\Saldo;
use Filament\Forms;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Form;
use Filament\Resources\RelationManagers\RelationManager;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class PemasukanResource extends Resource
{
    protected static ?string $model = Pemasukan::class;

    protected static ?string $navigationGroup = 'Kas';

    protected static ?string $navigationLabel = 'Laporan Pemasukan';

    protected static ?int $navigationSort = 4;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    private static function hitungTotalHarga($set, $get)
    {
        $jumlah = $get('jumlah');
        $harga = $get('harga');

        if (is_numeric($jumlah) && is_numeric($harga) && $jumlah > 0 && $harga > 0) {
            $total = $jumlah * $harga;
            $set('total', $total);
            $set('total_formatted', 'Rp ' . number_format($total, 0, ',', '.')); // Format Rupiah
        } else {
            $set('total', 0);
            $set('total_formatted', 'Rp 0');
        }
    }

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                TextInput::make('jenis_pemasukan')
                    ->required()
                    ->maxLength(255),
                TextInput::make('deskripsi')
                    ->required()
                    ->maxLength(255),

                    TextInput::make('harga')
                        ->label('Harga')
                        ->required()
                        ->numeric(),
                TextInput::make('jumlah')
                    ->label('Jumlah')
                    ->numeric()
                    ->debounce(600)
                    ->required()
                    ->dehydrated()
                    ->reactive()
                    ->afterStateUpdated(function (callable $set, $get) {
                        self::hitungTotalHarga($set, $get);
                    }),


                TextInput::make('total')
                    ->label('Total Harga')
                    ->readonly()
                    ->dehydrated(true)
                    ->columnSpanFull(),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('jenis_pemasukan')
                    ->searchable(),
                Tables\Columns\TextColumn::make('deskripsi')
                    ->searchable(),
                Tables\Columns\TextColumn::make('jumlah')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('harga')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('total')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('created_at')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
                Tables\Columns\TextColumn::make('updated_at')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    Tables\Actions\DeleteBulkAction::make(),
                ]),
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
            'index' => Pages\ListPemasukans::route('/'),
            'create' => Pages\CreatePemasukan::route('/create'),
            'edit' => Pages\EditPemasukan::route('/{record}/edit'),
        ];
    }
}
