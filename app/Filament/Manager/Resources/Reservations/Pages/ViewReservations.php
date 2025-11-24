<?php

namespace App\Filament\Manager\Resources\Reservations\Pages;

use App\Filament\Manager\Resources\Reservations\ReservationsResource;
use Filament\Actions\EditAction;
use Filament\Resources\Pages\ViewRecord;

class ViewReservations extends ViewRecord
{
    protected static string $resource = ReservationsResource::class;

    protected function getHeaderActions(): array
    {
        return [
            EditAction::make(),
        ];
    }
}
