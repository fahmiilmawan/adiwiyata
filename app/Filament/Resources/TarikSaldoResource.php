<?php

namespace App\Filament\Resources;

use App\Filament\Resources\TarikSaldoResource\Pages;
use App\Filament\Resources\TarikSaldoResource\RelationManagers;
use App\Models\KasKelas;
use App\Models\TarikSaldo;
use Filament\Forms;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class TarikSaldoResource extends Resource
{
    protected static ?string $model = TarikSaldo::class;
    protected static ?string $navigationGroup = 'Bank';

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    protected static ?string $navigationLabel = 'Tarik Saldo Kelas';
    protected static ?int $navigationSort = 3;



    public static function form(Form $form): Form
    {
        return $form
        ->schema([
            Select::make('kas_kelas_id')
                ->label('Kelas')
                ->options(KasKelas::join('kelas', 'kas_kelas.kelas_id', '=', 'kelas.id')
                    ->pluck('kelas.nama_kelas', 'kas_kelas.id'))
                ->searchable()
                ->reactive()
                ->debounce(300)
                ->afterStateUpdated(fn (callable $set, $state) =>
                    $set('saldo', KasKelas::where('id', $state)->value('saldo') ?? 0)
                )
                ->required(),
                TextInput::make('saldo')
                    ->label('Saldo')
                    ->readOnly()
                    ->numeric(),

            TextInput::make('debit')
                ->required()
                ->numeric()
                ->columnSpanFull(),
        ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('kasKelas.kelas.nama_kelas')
                    ->label('Kelas')
                    ->searchable()
                    ->sortable(),
                    Tables\Columns\TextColumn::make('kasKelas.saldo')
                    ->label('Saldo Saat ini ')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('debit')
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
            'index' => Pages\ListTarikSaldos::route('/'),
            'create' => Pages\CreateTarikSaldo::route('/create'),
            'edit' => Pages\EditTarikSaldo::route('/{record}/edit'),
        ];
    }
}
