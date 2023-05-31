<?php

namespace App\Filament\Resources;

use App\Enums\StatusEnum;
use App\Filament\Resources\CustomerResource\Pages;
use App\Filament\Resources\CustomerResource\RelationManagers;
use App\Models\Customer;
use App\Models\User;
use Filament\Forms;
use Filament\Forms\Components\TextInput;
use Filament\Resources\Form;
use Filament\Resources\Resource;
use Filament\Resources\Table;
use Filament\Tables;
use Filament\Tables\Columns\BooleanColumn;
use Filament\Tables\Columns\TextColumn;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use Illuminate\Support\Facades\Hash;

class CustomerResource extends Resource
{
    protected static ?string $model = Customer::class;

    protected static ?string $navigationIcon = 'heroicon-o-collection';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                TextInput::make('name')->required()->label(trans('filament-user::user.resource.name')),
                TextInput::make('phone')->required()->label(trans('phone'))->numeric(),
                TextInput::make('email')->required()->label(trans('email'))->email(),
                Forms\Components\DatePicker::make('dob'),
                Forms\Components\Select::make('gender')
                    ->label('Giới tính')
                    ->required()
                    ->default(1)
                    ->options([
                        0 => 'Nữ',
                        1=> 'Nam'
                    ]),
                Forms\Components\Textarea::make('address'),
                Forms\Components\TextInput::make('password')->label(trans('filament-user::user.resource.password'))
                    ->password()
                    ->maxLength(255)
                    ->dehydrateStateUsing(static function ($state) use ($form){
                        if(!empty($state)){
                            return Hash::make($state);
                        }

                        $user = User::find($form->getColumns());
                        if($user){
                            return $user->password;
                        }
                    }),
                Forms\Components\Select::make('status')->options(StatusEnum::toSelectOption())->default(StatusEnum::ACTIVE->value)
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('id')->sortable()->label(trans('filament-user::user.resource.id')),
                TextColumn::make('name')->sortable()->searchable()->label(trans('filament-user::user.resource.name')),
                TextColumn::make('phone')->sortable()->searchable()->label(trans('phone')),
                TextColumn::make('email')->sortable()->searchable()->label(trans('email')),
                Tables\Columns\TextColumn::make('dob'),
                Tables\Columns\TextColumn::make('gender')->enum([
                    0 => 'Nữ',
                    1 => 'Nam'
                ]),
                Tables\Columns\TextColumn::make('address'),
                Tables\Columns\TextColumn::make('status')
//                Tables\Columns\TextColumn::make('created_at')->label(trans('filament-user::user.resource.created_at'))
//                    ->dateTime('M j, Y')->sortable(),
//                Tables\Columns\TextColumn::make('updated_at')->label(trans('filament-user::user.resource.updated_at'))
//                    ->dateTime('M j, Y')->sortable(),
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
            'index' => Pages\ListCustomers::route('/'),
            'create' => Pages\CreateCustomer::route('/create'),
            'edit' => Pages\EditCustomer::route('/{record}/edit'),
        ];
    }    
}
