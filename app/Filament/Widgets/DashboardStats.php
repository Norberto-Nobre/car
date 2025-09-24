<?php

namespace App\Filament\Widgets;

use App\Models\Booking;
use App\Models\Customer;
use Filament\Widgets\StatsOverviewWidget as BaseWidget;
use Filament\Widgets\StatsOverviewWidget\Stat;
use Carbon\Carbon;

class DashboardStats extends BaseWidget
{
    protected function getStats(): array
    {
         // Buscar reservas agrupadas por mês do ano atual
    $reservasPorMes = Booking::selectRaw('MONTH(created_at) as mes, COUNT(*) as total')
        ->whereYear('created_at', date('Y'))
        ->groupBy('mes')
        ->pluck('total', 'mes');

        // Preencher os 12 meses, mesmo os sem reservas
    $data = [];
    for ($mes = 1; $mes <= 12; $mes++) {
        $data[] = $reservasPorMes[$mes] ?? 0;
    }

        return [
            Stat::make('Total Clientes', Customer::count())
                ->description('Ano de '. date('Y'))
                 ->icon('heroicon-o-users')
                ->icon('heroicon-o-user-group')
                ->color('primary')
                ->chart($data),

            Stat::make('Reservas Aprovadas', Booking::where('status', 'aprovado')->count())
                ->description('Ano de ' . date('Y'))
                ->icon('heroicon-o-calendar')
                ->color('success')
                ->chart((function () {
                    // Buscar reservas aprovadas agrupadas por mês do ano atual
                    $reservasPorMes = Booking::selectRaw('MONTH(created_at) as mes, COUNT(*) as total')
                        ->where('status', 'aprovado')
                        ->whereYear('created_at', date('Y'))
                        ->groupBy('mes')
                        ->pluck('total', 'mes');

                    // Preencher os 12 meses
                    $data = [];
                    for ($mes = 1; $mes <= 12; $mes++) {
                        $data[] = $reservasPorMes[$mes] ?? 0;
                    }

                    return $data;
                })()),

            Stat::make('Faturação Total', number_format(Booking::where('status', 'aprovado')->sum('total_amount'), 0, ',', '.') . ' Kz')
                ->description('Ano de ' . date('Y'))
                ->icon('heroicon-o-currency-dollar')
                ->color('warning')
                ->chart((function () {
                    // Buscar faturação mensal (somatório do campo total_amount)
                    $faturacaoPorMes = Booking::selectRaw('MONTH(created_at) as mes, SUM(total_amount) as total')
                        ->where('status', 'aprovado')
                        ->whereYear('created_at', date('Y'))
                        ->groupBy('mes')
                        ->pluck('total', 'mes');

                    // Preencher todos os 12 meses
                    $data = [];
                    for ($mes = 1; $mes <= 12; $mes++) {
                        $data[] = $faturacaoPorMes[$mes] ?? 0;
                    }

                    return $data;
                })()),
        ];
    }
    
    // protected function getColumns(): int
    // {
    //     return 3;
    // }
}
