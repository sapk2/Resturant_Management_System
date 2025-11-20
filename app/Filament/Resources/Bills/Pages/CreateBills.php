<?php

namespace App\Filament\Resources\Bills\Pages;

use App\Filament\Resources\Bills\BillsResource;
use Filament\Resources\Pages\CreateRecord;

class CreateBills extends CreateRecord
{
    protected static string $resource = BillsResource::class;
    protected static bool $canCreateAnother = false;
    protected function getRedirectUrl(): string
{
    return $this->getResource()::getUrl('index');
}
}
