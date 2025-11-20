<?php

namespace App\Filament\Resources\Bills\Schemas;

use Filament\Infolists\Components\TextEntry;
use Filament\Schemas\Components\Section;
use Filament\Schemas\Schema;

class BillsInfolist
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                Section::make("Bills Infos")
                ->schema([
                TextEntry::make('order_id')
                    ->numeric(),
                TextEntry::make('total_amount')
                    ->numeric(),
                TextEntry::make('payment_type'),
                TextEntry::make('payment_status'),
                TextEntry::make('paid_at')
                    ->date(),
                    
                ]),

                
            ]);
    }
}
