<?php

namespace App\Filament\Resources\ColorVehicleModelResource\Pages;

use App\Filament\Resources\ColorVehicleModelResource;
use Filament\Actions;
use Filament\Resources\Pages\ManageRecords;

class ManageColorVehicleModels extends ManageRecords
{
    protected static string $resource = ColorVehicleModelResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
