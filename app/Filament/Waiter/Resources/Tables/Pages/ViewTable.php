<?php

namespace App\Filament\Waiter\Resources\Tables\Pages;

use App\Filament\Waiter\Resources\Tables\TableResource;
use Filament\Actions\Action;
use Filament\Actions\EditAction;
use Filament\Resources\Pages\ViewRecord;

class ViewTable extends ViewRecord
{
    protected static string $resource = TableResource::class;

    protected function getHeaderActions(): array
    {
        return [
            //EditAction::make(),
            Action::make('back')->label('Back')->url(TableResource::getUrl('index'))->color('sucess')->icon('heroicon-o-arrow-left')
        ];
    }
}
