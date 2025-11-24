<?php

namespace App\Filament\Waiter\Resources\Orders\Schemas;

use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Schemas\Schema;

class OrderForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('table_id')
                    ->required()
                    ->numeric(),
                TextInput::make('user_id')
                    ->required()
                    ->numeric(),
                Select::make('Status')
                    ->options([
            'preparing' => 'Preparing',
            'served' => 'Served',
            'completed' => 'Completed',
            'cancelled' => 'Cancelled',
        ])
                    ->required(),
                TextInput::make('total_amount')
                    ->required()
                    ->numeric(),
            ]);
    }
}
