<?php

namespace App\Filament\Waiter\Resources\OrderItems\Pages;

use App\Filament\Waiter\Resources\OrderItems\OrderItemsResource;
use Filament\Actions\CreateAction;
use Filament\Resources\Pages\ListRecords;

class ListOrderItems extends ListRecords
{
    protected static string $resource = OrderItemsResource::class;

    protected function getHeaderActions(): array
    {
        return [
        CreateAction::make() ->createAnother(false),
        ];
    }
}
