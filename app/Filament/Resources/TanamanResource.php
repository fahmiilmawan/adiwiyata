<?php

namespace App\Filament\Resources;

use App\Filament\Resources\TanamanResource\Pages;
use App\Filament\Resources\TanamanResource\RelationManagers;
use App\Models\Tanaman;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Forms\Components\Select;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class TanamanResource extends Resource
{
    protected static ?string $model = Tanaman::class;

    protected static ?string $navigationGroup = 'Master Data';

    protected static ?string $slug = 'tanaman';

    protected static ?string $navigationLabel = 'Tanaman';

    protected ?string $heading = 'Tanaman';

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';



    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('nama_tanaman')
                    ->required()
                    ->maxLength(255),
                Forms\Components\TextInput::make('nama_latin')
                    ->required()
                    ->maxLength(255),
                Forms\Components\FileUpload::make('gambar')
                    ->image()
                    ->disk('local')
                    ->directory('uploads/images')
                    ->visibility('local')
                    ->required(),
                Forms\Components\Select::make('kategori_tanaman')
                    ->options([
                        'toga' => 'Toga',
                        'konsumsi' => 'Konsumsi',
                        'hias' => 'Hias',
                    ])
                    ->required(),
                Forms\Components\Select::make('taman_id')
                    ->relationship('taman','nama_taman')
                    ->required(),
                Forms\Components\RichEditor::make('deskripsi')
                    ->required()
                    ->columnSpanFull(),

            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('nama_tanaman')
                    ->searchable(),
                Tables\Columns\TextColumn::make('kategori_tanaman')
                    ->searchable(),
                Tables\Columns\TextColumn::make('deskripsi')
                    ->searchable()
                    ->sortable()
                    ,
                Tables\Columns\ViewColumn::make('qr_code')
                    ->label('QR Code')
                    ->view('components.qr-code'),
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
            'index' => Pages\ListTanamen::route('/'),
            'create' => Pages\CreateTanaman::route('/create'),
            'edit' => Pages\EditTanaman::route('/{record}/edit'),
        ];
    }
}
