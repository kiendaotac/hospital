<?php

namespace App\Filament\Resources;

use App\Enums\StatusEnum;
use App\Filament\Resources\HospitalResource\Pages;
use App\Filament\Resources\HospitalResource\RelationManagers;
use App\Models\Hospital;
use Filament\Forms;
use Filament\Resources\Form;
use Filament\Resources\Resource;
use Filament\Resources\Table;
use Filament\Tables;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class HospitalResource extends Resource
{
    protected static ?string $model = Hospital::class;

    protected static ?string $navigationIcon = 'heroicon-o-collection';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('name'),
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
            'index' => Pages\ListHospitals::route('/'),
            'create' => Pages\CreateHospital::route('/create'),
            'edit' => Pages\EditHospital::route('/{record}/edit'),
        ];
    }    
}
