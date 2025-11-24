<?php

namespace App\Filament\Manager\Resources\Inventories\Pages;

use App\Filament\Manager\Resources\Inventories\InventoriesResource;
use Filament\Resources\Pages\CreateRecord;

class CreateInventories extends CreateRecord
{
    protected static string $resource = InventoriesResource::class;
    protected static bool $canCreateAnother = false;
    protected function getRedirectUrl(): string
        {
            return $this->getResource()::getUrl('index');
        }
}
