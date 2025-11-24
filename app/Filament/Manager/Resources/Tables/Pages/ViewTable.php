<?php

namespace App\Filament\Manager\Resources\Tables\Pages;

use App\Filament\Manager\Resources\Tables\TableResource;
use Filament\Actions\EditAction;
use Filament\Resources\Pages\ViewRecord;

class ViewTable extends ViewRecord
{
    protected static string $resource = TableResource::class;

    protected function getHeaderActions(): array
    {
        return [
            EditAction::make(),
        ];
    }
}
