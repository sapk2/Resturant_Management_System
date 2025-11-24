<?php

namespace App\Filament\Waiter\Resources\OrderItems;

use App\Filament\Waiter\Resources\OrderItems\Pages\CreateOrderItems;
use App\Filament\Waiter\Resources\OrderItems\Pages\EditOrderItems;
use App\Filament\Waiter\Resources\OrderItems\Pages\ListOrderItems;
use App\Filament\Waiter\Resources\OrderItems\Pages\ViewOrderItems;
use App\Filament\Waiter\Resources\OrderItems\Schemas\OrderItemsForm;
use App\Filament\Waiter\Resources\OrderItems\Schemas\OrderItemsInfolist;
use App\Filament\Waiter\Resources\OrderItems\Tables\OrderItemsTable;
use App\Models\OrderItems;
use BackedEnum;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Support\Icons\Heroicon;
use Filament\Tables\Table;

class OrderItemsResource extends Resource
{
    protected static ?string $model = OrderItems::class;

    protected static string|BackedEnum|null $navigationIcon = Heroicon::OutlinedRectangleStack;

    protected static ?string $recordTitleAttribute = 'name';

    public static function form(Schema $schema): Schema
    {
        return OrderItemsForm::configure($schema);
    }

    public static function infolist(Schema $schema): Schema
    {
        return OrderItemsInfolist::configure($schema);
    }

    public static function table(Table $table): Table
    {
        return OrderItemsTable::configure($table);
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
            'index' => ListOrderItems::route('/'),
          //  'create' => CreateOrderItems::route('/create'),
           // 'view' => ViewOrderItems::route('/{record}'),
           // 'edit' => EditOrderItems::route('/{record}/edit'),
        ];
    }
}
