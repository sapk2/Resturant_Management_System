<?php

namespace App\Filament\Manager\Resources\Menus\Pages;

use App\Filament\Manager\Resources\Menus\MenuResource;
use Filament\Actions\EditAction;
use Filament\Resources\Pages\ViewRecord;

class ViewMenu extends ViewRecord
{
    protected static string $resource = MenuResource::class;

    protected function getHeaderActions(): array
    {
        return [
            EditAction::make(),
        ];
    }
}
