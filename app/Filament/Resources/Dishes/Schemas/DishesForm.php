<?php

namespace App\Filament\Resources\Dishes\Schemas;

use App\Models\Menu;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\Toggle;
use Filament\Schemas\Schema;

class DishesForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                Select::make('menu_id')
                ->label('Menu')
                ->options(Menu::query()
                ->pluck("name","id")),
                TextInput::make('name')
                    ->required(),
                Textarea::make('description')
                    ->required()
                    ->columnSpanFull(),
                TextInput::make('price')
                    ->required()
                    ->numeric()
                    ->prefix('RS'),
                FileUpload::make('image')
                    ->image()
                    ->required(),
                Toggle::make('is_available')
                    ->required(),
            ]);
    }
}
