<?php

namespace App\Filament\Resources\Dishes\Pages;

use App\Filament\Resources\Dishes\DishesResource;
use Filament\Resources\Pages\CreateRecord;

class CreateDishes extends CreateRecord
{
    protected static string $resource = DishesResource::class;
     protected static bool $canCreateAnother = false;
         protected function getRedirectUrl(): string
{
    return $this->getResource()::getUrl('index');
}
}
