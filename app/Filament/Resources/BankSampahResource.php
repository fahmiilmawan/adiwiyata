<?php

namespace App\Filament\Resources;

use App\Filament\Resources\BankSampahResource\Pages;
use App\Filament\Resources\BankSampahResource\RelationManagers;
use App\Models\BankSampah;
use App\Models\JenisSampah;
use Filament\Forms;
use Filament\Forms\Components\Hidden;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use Illuminate\Support\Facades\Auth;

class BankSampahResource extends Resource
{
    protected static ?string $model = BankSampah::class;

    protected static ?string $navigationGroup = 'Bank';

    protected static ?string $navigationLabel = 'Bank Sampah';
    protected static ?int $navigationSort = 3;


    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    protected static function formatRupiah($angka)
    {
        return 'Rp ' . number_format($angka, 0, ',', '.');

    }

    private static function hitungTotalHarga($set, $get)
    {
        $jumlah = $get('jumlah');
        $harga = $get('harga');

        if (is_numeric($jumlah) && is_numeric($harga) && $jumlah > 0 && $harga > 0) {
            $total = $jumlah * $harga;
            $set('total_harga', $total);
            $set('total_harga_formatted', 'Rp ' . number_format($total, 0, ',', '.')); // Format Rupiah
        } else {
            $set('total_harga', 0);
            $set('total_harga_formatted', 'Rp 0');
        }
    }


    public static function form(Form $form): Form
    {
        return $form
        ->schema([
            Hidden::make('user_id')
                ->default(Auth::user()->id),

            Select::make('kelas_id')
                ->relationship(name: 'kelas', titleAttribute: 'nama_kelas')
                ->columnSpanFull(),

            Select::make('jenis_sampah_id')
                ->label('Jenis Sampah')
                ->relationship('jenis_sampah', 'nama_sampah')
                ->reactive()
                ->required()
                ->dehydrated()
                ->rules(['required'])
                ->afterStateUpdated(function (callable $set, $state) {
                    if ($state) {
                        $harga = \App\Models\JenisSampah::find($state)?->harga;
                        $set('harga', $harga);
                    } else {
                        $set('harga', 0);
                    }
                }),

            TextInput::make('harga')
                ->label('Harga (per kg)')
                ->numeric()
                ->readonly()
                ->required(),

            TextInput::make('jumlah')
                ->label('Jumlah (kg)')
                ->numeric()
                ->required()
                ->reactive()
                ->debounce(600)
                ->afterStateUpdated(function (callable $set, $get) {
                    self::hitungTotalHarga($set, $get);
                })->columnSpanFull(),

            TextInput::make('total_harga')
                ->label('Total Harga')
                ->readonly()
                ->dehydrated(true)
                ->columnSpanFull(),
        ]);
}


    public static function mutateFormDataBeforeCreate(array $data): array
    {
    if (isset($data['jumlah']) && isset($data['harga'])) {
        $data['total_harga'] = $data['jumlah'] * $data['harga'];
    }
    return $data;
    }
    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('kelas.nama_kelas')
                    ->label('Kelas')
                    ->searchable(),
                TextColumn::make('jumlah')
                    ->label('Jumlah (kg)')
                    ->numeric()
                    ->sortable(),
                TextColumn::make('harga')
                    ->label('Harga (per kg)')
                    ->numeric()
                    ->sortable(),
                TextColumn::make('total_harga')
                    ->label('Total Harga')
                    ->formatStateUsing(fn ($state) => 'Rp ' . number_format($state, 0, ',', '.'))
                    ->sortable(),
                TextColumn::make('created_at')
                    ->label('Tanggal')
                    ->dateTime('d/m/Y H:i')
                    ->sortable(),

            ])
            ->filters([
                Tables\Filters\SelectFilter::make('kelas_id')
                    ->relationship('kelas', 'nama_kelas')
                    ->label('Kelas'),

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
            'index' => Pages\ListBankSampahs::route('/'),
            'create' => Pages\CreateBankSampah::route('/create'),
            'edit' => Pages\EditBankSampah::route('/{record}/edit'),
        ];
    }
}
