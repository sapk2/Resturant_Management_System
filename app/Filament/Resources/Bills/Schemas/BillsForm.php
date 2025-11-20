<?php

namespace App\Filament\Resources\Bills\Schemas;

use App\Models\Order;
use Filament\Forms\Components\Concerns\HasHelperText;
use Filament\Forms\Components\DatePicker;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Schemas\Components\Section;
use Filament\Schemas\Schema;

class BillsForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                Section::make("Field")->schema([
                Select::make('order_id')->label('order')->options(Order::query()->pluck('id','id'))->searchable(),
                TextInput::make('total_amount')
                    ->required()
                    ->helperText('enter total amount')
                    ->numeric(),
                Select::make('payment_type')
                    ->options(['cash' => 'Cash', 'card' => 'Card', 'online' => 'Online'])
                    ->required(),
                Select::make('payment_status')
                    ->options(['paid' => 'Paid', 'unpaid' => 'Unpaid'])
                    ->required(),
                DatePicker::make('paid_at')
                    ->required(),
               
                ])->columns(2),
                
            ]);
    }
}
