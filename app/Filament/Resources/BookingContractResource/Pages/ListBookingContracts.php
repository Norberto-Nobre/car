<?php

namespace App\Filament\Resources\BookingContractResource\Pages;

use App\Filament\Resources\BookingContractResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListBookingContracts extends ListRecords
{
    protected static string $resource = BookingContractResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
