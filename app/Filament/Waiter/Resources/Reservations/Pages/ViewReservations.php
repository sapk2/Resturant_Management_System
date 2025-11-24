<?php

namespace App\Filament\Waiter\Resources\Reservations\Pages;

use App\Filament\Waiter\Resources\Reservations\ReservationsResource;
use Filament\Actions\Action;
use Filament\Actions\EditAction;
use Filament\Resources\Pages\ViewRecord;

class ViewReservations extends ViewRecord
{
    protected static string $resource = ReservationsResource::class;

    protected function getHeaderActions(): array
    {
        return [
           // EditAction::make(),
           Action::make('back')->label('Back')->url(ReservationsResource::getUrl('index'))->color('sucess')->icon('heroicon-o-arrow-left')
        ];
    }
}
