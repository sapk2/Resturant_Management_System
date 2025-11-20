<?php

namespace App\Filament\Resources\Inventories;

use App\Filament\Resources\Inventories\Pages\CreateInventories;
use App\Filament\Resources\Inventories\Pages\EditInventories;
use App\Filament\Resources\Inventories\Pages\ListInventories;
use App\Filament\Resources\Inventories\Pages\ViewInventories;
use App\Filament\Resources\Inventories\Schemas\InventoriesForm;
use App\Filament\Resources\Inventories\Schemas\InventoriesInfolist;
use App\Filament\Resources\Inventories\Tables\InventoriesTable;
use App\Models\Inventories;
use BackedEnum;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Support\Icons\Heroicon;
use Filament\Tables\Table;

class InventoriesResource extends Resource
{
    protected static ?string $model = Inventories::class;

    protected static string|BackedEnum|null $navigationIcon = Heroicon::BuildingStorefront;

    protected static ?string $recordTitleAttribute = 'Inventories';

    public static function form(Schema $schema): Schema
    {
        return InventoriesForm::configure($schema);
    }

    public static function infolist(Schema $schema): Schema
    {
        return InventoriesInfolist::configure($schema);
    }

    public static function table(Table $table): Table
    {
        return InventoriesTable::configure($table);
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
            'index' => ListInventories::route('/'),
            'create' => CreateInventories::route('/create'),
            'view' => ViewInventories::route('/{record}'),
            'edit' => EditInventories::route('/{record}/edit'),
        ];
    }
}
