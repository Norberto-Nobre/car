<?php

namespace App\Filament\Widgets;

use App\Models\Customer;
use Filament\Widgets\ChartWidget;

class CustomersChart extends ChartWidget
{
    protected static ?string $heading = 'Clientes ganhos por mês (Ano Atual)';

        protected function getData(): array
    {
        // Buscar clientes cadastrados por mês no ano atual
        $clientesPorMes = Customer::selectRaw('MONTH(created_at) as mes, COUNT(*) as total')
            ->whereYear('created_at', date('Y'))
            ->groupBy('mes')
            ->pluck('total', 'mes');

        // Preencher todos os 12 meses
        $data = [];
        for ($mes = 1; $mes <= 12; $mes++) {
            $data[] = $clientesPorMes[$mes] ?? 0;
        }

        return [
            'datasets' => [
                [
                    'label' => 'Clientes',
                    'data' => $data,
                    'backgroundColor' => '#3B82F6', // cor da barra
                ],
            ],
            'labels' => [
                'Jan', 'Fev', 'Mar', 'Abr', 'Mai', 'Jun',
                'Jul', 'Ago', 'Set', 'Out', 'Nov', 'Dez',
            ],
        ];
    }

    protected function getType(): string
    {
        return 'bar';
    }
}
