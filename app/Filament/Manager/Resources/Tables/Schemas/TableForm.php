<?php

namespace App\Filament\Manager\Resources\Tables\Schemas;

use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Schemas\Schema;

class TableForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('name')
                    ->required(),
                TextInput::make('capacity')
                    ->required(),
                Select::make('status')
                    ->options(['available' => 'Available', 'occupied' => 'Occupied', 'reserved' => 'Reserved'])
                    ->required(),
            ]);
    }
}
