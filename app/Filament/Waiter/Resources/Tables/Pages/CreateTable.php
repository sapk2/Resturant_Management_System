<?php

namespace App\Filament\Waiter\Resources\Tables\Pages;

use App\Filament\Waiter\Resources\Tables\TableResource;
use Filament\Resources\Pages\CreateRecord;

class CreateTable extends CreateRecord
{
    protected static string $resource = TableResource::class; 
    protected function getRedirectUrl(): string
{
    return $this->getResource()::getUrl('index');
}
}
