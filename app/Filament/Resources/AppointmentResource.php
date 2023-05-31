<?php

namespace App\Filament\Resources;

use App\Enums\StatusEnum;
use App\Filament\Resources\AppointmentResource\Pages;
use App\Filament\Resources\AppointmentResource\RelationManagers;
use App\Models\Appointment;
use App\Models\Doctor;
use Filament\Forms;
use Filament\Resources\Form;
use Filament\Resources\Resource;
use Filament\Resources\Table;
use Filament\Tables;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class AppointmentResource extends Resource
{
    protected static ?string $model = Appointment::class;

    protected static ?string $navigationIcon = 'heroicon-o-collection';

    protected static ?string $navigationLabel = 'Đặt lịch khám';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\Select::make('doctor_id')
                    ->required()
                    ->label('Tên bác sỹ')
                    ->options(function () {
                    return Doctor::whereStatus(StatusEnum::ACTIVE)->pluck('name', 'id');
                }),
                Forms\Components\TextInput::make('name')
                    ->label('Tên bệnh nhân')
                    ->required(),
                Forms\Components\TextInput::make('phone')->numeric()->label('Số điện thoại')->required(),
                Forms\Components\DatePicker::make('dob'),
                Forms\Components\TextInput::make('email')->email(),
                Forms\Components\Select::make('gender')
                    ->label('Giới tính')
                    ->required()
                    ->default(1)
                    ->options([
                    0 => 'Nữ',
                    1=> 'Nam'
                ]),
                Forms\Components\Textarea::make('address'),
                Forms\Components\Textarea::make('note'),
                Forms\Components\DateTimePicker::make('time'),
                Forms\Components\TextInput::make('service'),
                Forms\Components\Select::make('status')->options(StatusEnum::toSelectOption())->default(StatusEnum::ACTIVE->value)
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('doctor.name'),
                Tables\Columns\TextColumn::make('name'),
                Tables\Columns\TextColumn::make('phone'),
                Tables\Columns\TextColumn::make('dob'),
                Tables\Columns\TextColumn::make('email'),
                Tables\Columns\TextColumn::make('gender')->enum([
                    0 => 'Nữ',
                    1 => 'Nam'
                ]),
                Tables\Columns\TextColumn::make('address'),
                Tables\Columns\TextColumn::make('note'),
                Tables\Columns\TextColumn::make('time'),
                Tables\Columns\TextColumn::make('service'),
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
            'index' => Pages\ListAppointments::route('/'),
            'create' => Pages\CreateAppointment::route('/create'),
            'edit' => Pages\EditAppointment::route('/{record}/edit'),
        ];
    }    
}
