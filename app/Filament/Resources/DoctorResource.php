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
                Forms\Components\TextInput::make('name')->label('Họ tên')->required(),
                Forms\Components\FileUpload::make('avatar')->label('Ảnh đại diện')->required(),
                Forms\Components\TextInput::make('title')->label('Chức vụ')->required(),
                Forms\Components\TextInput::make('specialist')->label('Chuyên ngành')->required(),
                Forms\Components\Textarea::make('education')->label('Học vấn')->required(),
                Forms\Components\Textarea::make('activity')->name('Hoạt động')->required(),
                Forms\Components\Textarea::make('research')->label('Nghiên cứu')->required(),
                Forms\Components\Textarea::make('address')->label('Địa chỉ')->required(),
                Forms\Components\TextInput::make('phone')->numeric()->label('Số điện thoại')->required(),
                Forms\Components\Select::make('status')->options(StatusEnum::toSelectOption())->default(StatusEnum::ACTIVE->name)->label('Trạng thái')->required()
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('name')->label('Họ tên'),
                Tables\Columns\ImageColumn::make('avatar')->label('Ảnh đại diện'),
                Tables\Columns\TextColumn::make('title')->label('Chức vụ'),
                Tables\Columns\TextColumn::make('specialist')->label('Chuyên ngành'),
                Tables\Columns\TextColumn::make('education')->limit(40)->label('Học vấn'),
                Tables\Columns\TextColumn::make('activity')->limit(40)->name('Hoạt động'),
                Tables\Columns\TextColumn::make('research')->limit(40)->label('Nghiên cứu'),
                Tables\Columns\TextColumn::make('address')->label('Địa chỉ'),
                Tables\Columns\TextColumn::make('phone')->label('Số điện thoại'),
                Tables\Columns\TextColumn::make('status')->label('Trạng thái')
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
