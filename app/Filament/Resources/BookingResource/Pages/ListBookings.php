<?php

namespace App\Filament\Resources\BookingResource\Pages;

use App\Filament\Resources\BookingResource;
use App\Models\Booking;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;
use Filament\Resources\Components\Tab;
use Illuminate\Database\Eloquent\Builder;

class ListBookings extends ListRecords
{
    protected static string $resource = BookingResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }

    public function getTabs(): array{

         return [
        'Todos' => Tab::make()
            ->icon('heroicon-o-squares-2x2')
             ->badgeColor('info')
             ->badge(Booking::count()),
        'Pendente' => Tab::make()
            ->icon('heroicon-o-check-circle')
            ->badgeColor('success')
            ->badge(Booking::query()->wherestatus('pendente', true)->count())
            ->modifyQueryUsing(fn (Builder $query) => $query->wherestatus('pendente', true)),
        'Aprovado' => Tab::make()
            ->icon('heroicon-o-pencil-square')
            ->badgeColor('gray')
            ->badge(Booking::query()->wherestatus('aprovado', true)->count())
            ->modifyQueryUsing(fn (Builder $query) => $query->wherestatus('aprovado', false)),
        'Cancelado' => Tab::make()
            ->icon('heroicon-o-archive-box')
            ->badgeColor('warning')
            ->badge(Booking::query()->wherestatus('cancelado', true)->count())
            ->modifyQueryUsing(fn (Builder $query) => $query->wherestatus('cancelado', false)),
        'Expirado' => Tab::make()
            ->icon('heroicon-o-archive-box')
            ->badgeColor('warning')
            ->badge(Booking::query()->wherestatus('expirado', true)->count())
            ->modifyQueryUsing(fn (Builder $query) => $query->wherestatus('expirado', false)),
    ];
    }
}
