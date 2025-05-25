<?php

namespace App\Filament\Resources;

use App\Filament\Resources\SiswaResource\Pages;
use App\Filament\Resources\SiswaResource\RelationManagers;
use App\Models\Jurusan;
use App\Models\Siswa;
use Filament\Forms;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\Radio;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Columns\ImageColumn;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;


class SiswaResource extends Resource
{
    protected static ?string $model = Siswa::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
        ->schema([
                FileUpload::make('foto')->required(),
                TextInput::make('nis')->required()->integer()->unique(ignorable: fn($record)=> $record),
                TextInput::make('nama')->required(),
                Select::make('kelas')->required()->options([
                    'X' => 'X',
                    'XI' => 'XI',
                    'XII' => 'XII',
                ]),
                Select::make('id_jurusan')->required()->options(Jurusan::all()->pluck('nama_jurusan', 'id'))->label('Jurusan'),
                TextInput::make('alamat')->required(),
                Radio::make('jenis_kelamin')->required()->options([
                    'L' => 'Laki - laki' ,
                    'P' => 'Perempuan' ,
                ]),
                TextInput::make('no_hp')->required(),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                ImageColumn::make('foto')->visibility('public')->circular(),
                TextColumn::make('nis')->searchable(),
                TextColumn::make('nama')->searchable(),
                TextColumn::make('kelas'),
                TextColumn::make('id_jurusan')->formatStateUsing(fn($state)=> Jurusan::find($state)->nama_jurusan)->label('Jurusan'),
                TextColumn::make('jenis_kelamin'),
                TextColumn::make('no_hp'),
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\action::make('show')
                ->label('Show')
                ->icon('heroicon-m-eye')
                ->color('info')
                ->url(fn($record)=>route('filament.admin.resources.siswas.show',$record->id))
                ,
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
            'show' => Pages\DetailSiswa::route('/{record}/show'),
            'index' => Pages\ListSiswas::route('/'),
            'create' => Pages\CreateSiswa::route('/create'),
            'edit' => Pages\EditSiswa::route('/{record}/edit'),
        ];
    }
}
