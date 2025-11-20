<?php

namespace App\Filament\Resources\Orders\Schemas;

use App\Models\Table;
use App\Models\User;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Schemas\Schema;

class OrderForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                Select::make('table_id')->label('table')->options(Table::query()->pluck('name','id'))->searchable(),
                    Select::make('user_id')
                        ->label('Waiter')
                        ->relationship(
                            'user',                                 // relationship method name
                            'name',
                            fn ($query) => $query->where('role', 'waiter')
                        )
                        ->searchable()
                        ->preload()
                        ->required(),
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
