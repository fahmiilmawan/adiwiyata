<?php

namespace App\Filament\Resources;

use App\Filament\Resources\JenisSampahResource\Pages;
use App\Models\JenisSampah;
use Filament\Forms;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Filters\Filter;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;

class JenisSampahResource extends Resource
{
    protected static ?string $model = JenisSampah::class;

    protected static ?string $navigationGroup = 'Master Data';

    protected static ?string $navigationLabel = 'Jenis Sampah';

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Select::make('nama_sampah')
                    ->label('Nama Sampah')
                    ->required()
                    ->options([
                        'Rongsok' => 'Rongsok',
                        'Montasi (plastik & kertas)' => 'Montasi (plastik & kertas)',
                        'Aqua gelas bening (tanpa label)' => 'Aqua gelas bening (tanpa label)',
                        'Aqua botol bening (tanpa label)' => 'Aqua botol bening (tanpa label)',
                        'Plastik bening (tanpa label)' => 'Plastik bening (tanpa label)',
                        'Plastik berwarna (tanpa label)' => 'Plastik berwarna (tanpa label)',
                        'Kertas' => 'Kertas',
                        'Kaset VCD/DVD' => 'Kaset VCD/DVD',
                    ]),

                Select::make('jenis_sampah')
                    ->label('Jenis Sampah')
                    ->required()
                    ->options([
                        'Sampah Campuran' => 'Sampah Campuran',
                        'Plastik' => 'Plastik',
                        'Campuran' => 'Campuran',
                        'Botol' => 'Botol',
                        'Kertas' => 'Kertas',
                        'CD/DVD' => 'CD/DVD',
                    ]),

                TextInput::make('harga')
                    ->label('Harga (Rp)/Kg')
                    ->numeric()
                    ->required()
                    ->suffix('Rp')
                    ->rules(['min:0'])
                    ->placeholder('Masukkan harga per kg'),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('nama_sampah')
                    ->label('Nama Sampah')
                    ->searchable()
                    ->sortable(),

                TextColumn::make('jenis_sampah')
                    ->label('Jenis Sampah')
                    ->searchable()
                    ->sortable(),

                TextColumn::make('harga')
                    ->label('Harga (Rp)/Kg')
                    ->money('IDR', true)
                    ->sortable(),

                TextColumn::make('created_at')
                    ->label('Dibuat Pada')
                    ->dateTime('d M Y H:i')
                    ->sortable(),
            ])
            ->filters([
                Filter::make('jenis_sampah')
                    ->label('Filter Jenis Sampah')
                    ->form([
                        Forms\Components\TextInput::make('jenis_sampah')
                            ->label('Jenis Sampah')
                            ->placeholder('Contoh: Plastik'),
                    ])
                    ->query(function (Builder $query, array $data) {
                        return $query->when(
                            $data['jenis_sampah'],
                            fn (Builder $q) => $q->where('jenis_sampah', 'like', '%' . $data['jenis_sampah'] . '%')
                        );
                    }),
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
        return [];
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListJenisSampahs::route('/'),
            'create' => Pages\CreateJenisSampah::route('/create'),
            'edit' => Pages\EditJenisSampah::route('/{record}/edit'),
        ];
    }
}
