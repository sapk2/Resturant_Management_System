<?php

namespace App\Filament\Resources\Users\Schemas;

use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Schemas\Schema;

class UserForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('name')->required(),
                TextInput::make('email')->unique(),
                TextInput::make('password')->password(),
                Select::make('role')->options(['admin'=>'admin','manager'=>'manager','waiter'=>'waiter','chef'=>'chef','cashier'=>'caisher']),
                TextInput::make('phone')->nullable()->tel()
            ]);
    }
}
