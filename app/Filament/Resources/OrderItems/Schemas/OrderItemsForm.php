<?php

namespace App\Filament\Resources\OrderItems\Schemas;

use App\Models\Dishes;
use App\Models\Order;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Schemas\Schema;

class OrderItemsForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                Select::make('order_id')->label('order')->options(Order::query()->pluck('id','id'))->searchable(),
                Select::make('dishes_id')->label('dishes')->options(Dishes::query()->pluck('name','id'))->searchable(),
                TextInput::make('quantity')
                    ->required(),
                TextInput::make('price')
                    ->required(),
                TextInput::make('subtotal')
                    ->required(),
            ]);
    }
}
