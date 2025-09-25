<?php

namespace App\Filament\Resources;

use App\Filament\Resources\VehicleModelResource\Pages;
use App\Filament\Resources\VehicleModelResource\RelationManagers;
use App\Models\VehicleModel;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class VehicleModelResource extends Resource
{
    protected static ?string $model = VehicleModel::class;

    protected static ?string $navigationIcon = 'heroicon-o-squares-2x2';

    public static function getNavigationBadge(): ?string
    {
        return VehicleModel::count() > 0 ? (string) VehicleModel::count() : null;
    }

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
               Forms\Components\Select::make('brand_id')
                    ->relationship('brand', 'name')
                    ->label('Modelo')
                    ->required(),
                Forms\Components\Select::make('category_id')
                ->relationship('category', 'name')
                    ->label('Categoria')
                    ->required(),
                Forms\Components\TextInput::make('name')
                    ->required()
                    ->maxLength(255),
                Forms\Components\TextInput::make('caussion')
                    ->required()
                    ->numeric()
                    ->prefix('Kz'),
                Forms\Components\Select::make('fuel_type')
                    ->options([
                    'gasolina' => 'Gasolina',
                    'gasoleo' => 'Gasóleo',
                    'electrico' => 'Elétrico',
                    'hibrido' => 'Híbrido',
                ])
                    ->label('Tipo de combustivel')
                    ->required(),
                Forms\Components\Select::make('transmission')
                    ->options([
                    'manual' => 'Manual',
                    'automatico' => 'Automatico',
                    ])
                    ->label('Transmissão')
                    ->required(),
                Forms\Components\TextInput::make('seats')
                    ->numeric()
                    ->default(null),
                Forms\Components\TextInput::make('doors')
                    ->numeric()
                    ->default(null),
                Forms\Components\TextInput::make('price_per_day')
                    ->required()
                    ->numeric()
                    ->prefix('Kz'),
                Forms\Components\Toggle::make('is_active')
                    ->required(),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('name')
                    ->searchable(),
                Tables\Columns\TextColumn::make('brand.name')
                    ->sortable(),
                Tables\Columns\TextColumn::make('category.name')
                    ->sortable(),
                Tables\Columns\TextColumn::make('caussion')
                    ->money('AOA', true)
                    ->sortable(),
                Tables\Columns\TextColumn::make('fuel_type'),
                Tables\Columns\TextColumn::make('transmission'),
                Tables\Columns\TextColumn::make('seats')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('doors')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('price_per_day')
                    ->money('AOA', true)
                    ->sortable(),
                Tables\Columns\ToggleColumn::make('is_active'),
                Tables\Columns\TextColumn::make('created_at')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
                Tables\Columns\TextColumn::make('updated_at')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
                Tables\Columns\TextColumn::make('deleted_at')
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
            'index' => Pages\ListVehicleModels::route('/'),
            'create' => Pages\CreateVehicleModel::route('/create'),
            'edit' => Pages\EditVehicleModel::route('/{record}/edit'),
        ];
    }
}
