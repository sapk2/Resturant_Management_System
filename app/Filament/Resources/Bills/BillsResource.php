<?php

namespace App\Filament\Resources\Bills;

use App\Filament\Resources\Bills\Pages\CreateBills;
use App\Filament\Resources\Bills\Pages\EditBills;
use App\Filament\Resources\Bills\Pages\ListBills;
use App\Filament\Resources\Bills\Pages\ViewBills;
use App\Filament\Resources\Bills\Schemas\BillsForm;
use App\Filament\Resources\Bills\Schemas\BillsInfolist;
use App\Filament\Resources\Bills\Tables\BillsTable;
use App\Models\Bills;
use BackedEnum;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Support\Icons\Heroicon;
use Filament\Tables\Table;

class BillsResource extends Resource
{
    protected static ?string $model = Bills::class;

    protected static string|BackedEnum|null $navigationIcon = Heroicon::OutlinedRectangleStack;

    protected static ?string $recordTitleAttribute = 'Bills';

    public static function form(Schema $schema): Schema
    {
        return BillsForm::configure($schema);
    }

    public static function infolist(Schema $schema): Schema
    {
        return BillsInfolist::configure($schema);
    }

    public static function table(Table $table): Table
    {
        return BillsTable::configure($table);
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
            'index' => ListBills::route('/'),
            'create' => CreateBills::route('/create'),
            'view' => ViewBills::route('/{record}'),
            'edit' => EditBills::route('/{record}/edit'),
        ];
    }
}
