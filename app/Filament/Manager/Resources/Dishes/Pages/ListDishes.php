<?php

namespace App\Filament\Manager\Resources\Dishes\Pages;

use App\Filament\Manager\Resources\Dishes\DishesResource;
use Filament\Actions\CreateAction;
use Filament\Resources\Pages\ListRecords;

class ListDishes extends ListRecords
{
    protected static string $resource = DishesResource::class;

    protected function getHeaderActions(): array
    {
        return [
           // CreateAction::make(),
        ];
    }
}
