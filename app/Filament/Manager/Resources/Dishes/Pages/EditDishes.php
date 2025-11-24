<?php

namespace App\Filament\Manager\Resources\Dishes\Pages;

use App\Filament\Manager\Resources\Dishes\DishesResource;
use Filament\Actions\DeleteAction;
use Filament\Actions\ViewAction;
use Filament\Resources\Pages\EditRecord;

class EditDishes extends EditRecord
{
    protected static string $resource = DishesResource::class;

    protected function getHeaderActions(): array
    {
        return [
            ViewAction::make(),
            DeleteAction::make(),
        ];
    }
}
