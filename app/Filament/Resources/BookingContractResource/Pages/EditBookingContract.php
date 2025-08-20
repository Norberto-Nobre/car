<?php

namespace App\Filament\Resources\BookingContractResource\Pages;

use App\Filament\Resources\BookingContractResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditBookingContract extends EditRecord
{
    protected static string $resource = BookingContractResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
