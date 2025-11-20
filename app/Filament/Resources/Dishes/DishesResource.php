<?php

namespace App\Filament\Resources\Dishes;

use App\Filament\Resources\Dishes\Pages\CreateDishes;
use App\Filament\Resources\Dishes\Pages\EditDishes;
use App\Filament\Resources\Dishes\Pages\ListDishes;
use App\Filament\Resources\Dishes\Pages\ViewDishes;
use App\Filament\Resources\Dishes\Schemas\DishesForm;
use App\Filament\Resources\Dishes\Schemas\DishesInfolist;
use App\Filament\Resources\Dishes\Tables\DishesTable;
use App\Models\Dishes;
use BackedEnum;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Support\Icons\Heroicon;
use Filament\Tables\Table;

class DishesResource extends Resource
{
    protected static ?string $model = Dishes::class;

    protected static string|BackedEnum|null $navigationIcon = Heroicon::CircleStack;

    protected static ?string $recordTitleAttribute = 'Dishes';

    public static function form(Schema $schema): Schema
    {
        return DishesForm::configure($schema);
    }

    public static function infolist(Schema $schema): Schema
    {
        return DishesInfolist::configure($schema);
    }

    public static function table(Table $table): Table
    {
        return DishesTable::configure($table);
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
            'index' => ListDishes::route('/'),
            'create' => CreateDishes::route('/create'),
            'view' => ViewDishes::route('/{record}'),
            'edit' => EditDishes::route('/{record}/edit'),
        ];
    }
}
