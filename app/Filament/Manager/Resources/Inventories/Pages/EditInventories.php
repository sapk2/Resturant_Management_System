<?php

namespace App\Filament\Manager\Resources\Inventories\Pages;

use App\Filament\Manager\Resources\Inventories\InventoriesResource;
use Filament\Actions\DeleteAction;
use Filament\Actions\ViewAction;
use Filament\Resources\Pages\EditRecord;

class EditInventories extends EditRecord
{
    protected static string $resource = InventoriesResource::class;

    protected function getHeaderActions(): array
    {
        return [
            ViewAction::make(),
            DeleteAction::make(),
        ];
    }
     protected function getRedirectUrl(): string
{
    return $this->getResource()::getUrl('index');
}
}
