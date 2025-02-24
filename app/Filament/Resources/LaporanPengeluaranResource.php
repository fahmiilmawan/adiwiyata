<?php

namespace App\Filament\Resources;

use App\Filament\Resources\LaporanPengeluaranResource\Pages;
use App\Filament\Resources\LaporanPengeluaranResource\RelationManagers;
use App\Models\LaporanPengeluaran;
use Barryvdh\DomPDF\Facade\Pdf;
use Filament\Forms;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Form;
use Filament\Notifications\Collection;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class LaporanPengeluaranResource extends Resource
{
    protected static ?string $model = LaporanPengeluaran::class;

    protected static ?string $navigationGroup = 'Kas';

    protected static ?string $navigationLabel = 'Laporan Pengeluaran';

    protected static ?int $navigationSort = 4;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('jenis_pengeluaran')
                    ->required()
                    ->maxLength(255),
                Forms\Components\Textarea::make('deskripsi')
                    ->required()
                    ->columnSpanFull(),

                TextInput::make('harga')
                    ->label('Harga')
                    ->numeric()
                    ->reactive(),

                TextInput::make('jumlah')
                    ->label('Jumlah (kg)')
                    ->numeric()
                    ->required()
                    ->reactive()
                    ->afterStateUpdated(fn (callable $set, $get) =>
                        $set('total', ((int) $get('harga') ?: 0) * ((int) $get('jumlah') ?: 0))
                    ),

                TextInput::make('total')
                    ->label('Total')
                    ->numeric()
                    ->readonly()
                    ->reactive()
                    ->default(0),


            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('jenis_pengeluaran')
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
            'index' => Pages\ListLaporanPengeluarans::route('/'),
            'create' => Pages\CreateLaporanPengeluaran::route('/create'),
            'edit' => Pages\EditLaporanPengeluaran::route('/{record}/edit'),
        ];
    }
}
