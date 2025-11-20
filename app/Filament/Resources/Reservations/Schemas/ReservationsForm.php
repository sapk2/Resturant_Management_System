<?php

namespace App\Filament\Resources\Reservations\Schemas;

use App\Models\Table;
use Filament\Forms\Components\DateTimePicker;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Schemas\Schema;

class ReservationsForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                 Select::make('table_id')->label('table')->options(Table::query()->pluck('name','id'))->searchable(),
                TextInput::make('customer_name')
                    ->required(),
                TextInput::make('phone')
                    ->tel()
                    ->required(),
                DateTimePicker::make('reserved_for')
                    ->required(),
                Select::make('status')
                    ->options(['reserved' => 'Reserved', 'completed' => 'Completed', 'cancelled' => 'Cancelled'])
                    ->required(),
            ]);
    }
}
