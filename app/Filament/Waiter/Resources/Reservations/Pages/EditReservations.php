<?php

namespace App\Filament\Waiter\Resources\Reservations\Pages;

use App\Filament\Waiter\Resources\Reservations\ReservationsResource;
use Filament\Actions\DeleteAction;
use Filament\Actions\ViewAction;
use Filament\Resources\Pages\EditRecord;

class EditReservations extends EditRecord
{
    protected static string $resource = ReservationsResource::class;

    protected function getHeaderActions(): array
    {
        return [
            ViewAction::make(),
            DeleteAction::make(),
        ];
    }  protected function getRedirectUrl(): string
{
    return $this->getResource()::getUrl('index');
}
}
