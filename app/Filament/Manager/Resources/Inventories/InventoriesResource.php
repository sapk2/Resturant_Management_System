<?php

namespace App\Filament\Manager\Resources\Inventories;

use App\Filament\Manager\Resources\Inventories\Pages\CreateInventories;
use App\Filament\Manager\Resources\Inventories\Pages\EditInventories;
use App\Filament\Manager\Resources\Inventories\Pages\ListInventories;
use App\Filament\Manager\Resources\Inventories\Pages\ViewInventories;
use App\Filament\Manager\Resources\Inventories\Schemas\InventoriesForm;
use App\Filament\Manager\Resources\Inventories\Schemas\InventoriesInfolist;
use App\Filament\Manager\Resources\Inventories\Tables\InventoriesTable;
use App\Models\Inventories;
use BackedEnum;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Support\Icons\Heroicon;
use Filament\Tables\Table;

class InventoriesResource extends Resource
{
    protected static ?string $model = Inventories::class;

    protected static string|BackedEnum|null $navigationIcon = Heroicon::OutlinedRectangleStack;

    protected static ?string $recordTitleAttribute = 'name';

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
           // 'create' => CreateInventories::route('/create'),
           /// 'view' => ViewInventories::route('/{record}'),
           // 'edit' => EditInventories::route('/{record}/edit'),
        ];
    }
}
