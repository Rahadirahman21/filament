<?php

namespace App\Filament\Resources;

use App\Filament\Resources\EskulResource\Pages;
use App\Filament\Resources\EskulResource\RelationManagers;
use App\Models\Eskul;
use Filament\Forms;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Columns\ImageColumn;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class EskulResource extends Resource
{
    protected static ?string $model = Eskul::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                FileUpload::make('foto')->required(),  
                TextInput::make('nama_eskul')->required(),
                TextInput::make('jadwal')->required(),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                 ImageColumn::make('foto')->visibility('public')->circular(),
                TextColumn::make('nama_eskul')->searchable(),
                TextColumn::make('jadwal')->searchable(),
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
                Tables\Actions\DeleteAction::make(),
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
            'index' => Pages\ListEskuls::route('/'),
            'create' => Pages\CreateEskul::route('/create'),
            'edit' => Pages\EditEskul::route('/{record}/edit'),
        ];
    }
}
