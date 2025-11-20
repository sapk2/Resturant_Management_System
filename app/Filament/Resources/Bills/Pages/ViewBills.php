<?php

namespace App\Filament\Resources\Bills\Pages;

use App\Filament\Resources\Bills\BillsResource;
use App\Models\Bills;
use Filament\Actions\Action;
use Filament\Actions\EditAction;
use Filament\Resources\Pages\ViewRecord;

class ViewBills extends ViewRecord
{
    protected static string $resource = BillsResource::class;

    protected function getHeaderActions(): array
    {
        return [
           // EditAction::make(),
           Action::make('back')
           ->label('Back')
           ->url(BillsResource::getUrl('index'))
           ->color('sucess')->icon('heroicon-o-arrow-left')
        ];
    }
}
