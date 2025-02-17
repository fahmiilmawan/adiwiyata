<?php

namespace App\Filament\Resources;

use App\Filament\Resources\KasKelasResource\Pages;
use App\Filament\Resources\KasKelasResource\RelationManagers;
use App\Models\KasKelas;
use Filament\Forms;
use Filament\Forms\Components\Select;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class KasKelasResource extends Resource
{
    protected static ?string $model = KasKelas::class;

    protected static ?string $navigationGroup = 'Kas';

    protected static ?string $navigationLabel = 'Laporan Kas Kelas';

    protected static ?int $navigationSort = 4;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    protected static function formatRupiah($angka)
    {
        return 'Rp ' . number_format($angka, 0, ',', '.');

    }

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Select::make('kelas_id')
                    ->relationship('kelas', 'nama_kelas')
                    ->required(),
                Forms\Components\TextInput::make('saldo')
                    ->required()
                    ->numeric()
                    ->formatStateUsing(fn ($state) => self::formatRupiah($state)),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('kelas.nama_kelas')
                    ->label('Kelas')
                    ->sortable(),
                Tables\Columns\TextColumn::make('saldo')
                    ->label('Saldo')
                    ->numeric()
                    ->formatStateUsing(fn ($state) => self::formatRupiah($state))

                    ->sortable(),
                Tables\Columns\TextColumn::make('created_at')
                    ->dateTime()
                    ->label('Tanggal')
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
            'index' => Pages\ListKasKelas::route('/'),
            'create' => Pages\CreateKasKelas::route('/create'),
            'edit' => Pages\EditKasKelas::route('/{record}/edit'),
        ];
    }
}
