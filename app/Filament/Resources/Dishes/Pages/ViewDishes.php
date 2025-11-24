<?php

namespace App\Filament\Resources\Dishes\Pages;

use App\Filament\Resources\Dishes\DishesResource;
use Filament\Actions\Action;
use Filament\Actions\EditAction;
use Filament\Resources\Pages\ViewRecord;

class ViewDishes extends ViewRecord
{
    protected static string $resource = DishesResource::class;

    protected function getHeaderActions(): array
    {
        return [
            // EditAction::make(),
           Action::make('back')
           ->label('Back')
           ->url(DishesResource::getUrl('index'))
           ->color('sucess')->icon('heroicon-o-arrow-left')
        ];
    }
}
