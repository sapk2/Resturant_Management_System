<?php

namespace App\Filament\Resources\OrderItems\Pages;

use App\Filament\Resources\OrderItems\OrderItemsResource;
use Filament\Actions\Action;
use Filament\Actions\EditAction;
use Filament\Resources\Pages\ViewRecord;

class ViewOrderItems extends ViewRecord
{
    protected static string $resource = OrderItemsResource::class;

    protected function getHeaderActions(): array
    {
        return [
           // EditAction::make(),
           Action::make('back')
           ->label('back')->url(OrderItemsResource::getUrl('index'))->color('sucess')->icon('heroicon-o-arrow-left')
        ];
    }
}
