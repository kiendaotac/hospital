<?php

namespace App\Filament\Resources;

use App\Enums\StatusEnum;
use App\Filament\Resources\DoctorResource\Pages;
use App\Filament\Resources\DoctorResource\RelationManagers;
use App\Models\Doctor;
use Filament\Forms;
use Filament\Resources\Form;
use Filament\Resources\Resource;
use Filament\Resources\Table;
use Filament\Tables;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class DoctorResource extends Resource
{
    protected static ?string $model = Doctor::class;

    protected static ?string $navigationIcon = 'heroicon-o-collection';
    protected static ?string $navigationLabel = 'Quản lý bác sỹ';


    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('name'),
                Forms\Components\FileUpload::make('avatar'),
                Forms\Components\TextInput::make('title'),
                Forms\Components\TextInput::make('specialist'),
                Forms\Components\Textarea::make('education'),
                Forms\Components\Textarea::make('activity'),
                Forms\Components\Textarea::make('research'),
                Forms\Components\Textarea::make('address'),
                Forms\Components\TextInput::make('phone')->numeric(),
                Forms\Components\Select::make('status')->options(StatusEnum::toSelectOption())->default(StatusEnum::ACTIVE->name)
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('name'),
                Tables\Columns\ImageColumn::make('avatar'),
                Tables\Columns\TextColumn::make('title'),
                Tables\Columns\TextColumn::make('specialist'),
                Tables\Columns\TextColumn::make('education')->limit(40),
                Tables\Columns\TextColumn::make('activity')->limit(40),
                Tables\Columns\TextColumn::make('research')->limit(40),
                Tables\Columns\TextColumn::make('address'),
                Tables\Columns\TextColumn::make('phone'),
                Tables\Columns\TextColumn::make('status'),
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\DeleteBulkAction::make(),
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
            'index' => Pages\ListDoctors::route('/'),
            'create' => Pages\CreateDoctor::route('/create'),
            'edit' => Pages\EditDoctor::route('/{record}/edit'),
        ];
    }    
}
