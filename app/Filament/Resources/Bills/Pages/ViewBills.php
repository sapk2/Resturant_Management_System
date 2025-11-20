<?php

namespace App\Filament\Resources\Bills\Pages;

use App\Filament\Resources\Bills\BillsResource;
use Filament\Actions\EditAction;
use Filament\Resources\Pages\ViewRecord;

class ViewBills extends ViewRecord
{
    protected static string $resource = BillsResource::class;

    protected function getHeaderActions(): array
    {
        return [
            EditAction::make(),
        ];
    }
}
