<?php

namespace App\Filament\Resources\Inventories\Pages;

use App\Filament\Resources\Inventories\InventoriesResource;
use Filament\Actions\Action;
use Filament\Actions\EditAction;
use Filament\Resources\Pages\ViewRecord;

class ViewInventories extends ViewRecord
{
    protected static string $resource = InventoriesResource::class;

    protected function getHeaderActions(): array
    {
        return [
          //  EditAction::make(),
          Action::make('back')
          ->label('Back')
          ->url(InventoriesResource::getUrl('index'))->color('sucess')->icon('heroicon-o-arrow-left')
        ];
    }
}
