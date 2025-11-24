<?php

namespace App\Filament\Manager\Resources\Dishes\Pages;

use App\Filament\Manager\Resources\Dishes\DishesResource;
use Filament\Actions\EditAction;
use Filament\Resources\Pages\ViewRecord;

class ViewDishes extends ViewRecord
{
    protected static string $resource = DishesResource::class;

    protected function getHeaderActions(): array
    {
        return [
            EditAction::make(),
        ];
    }
}
