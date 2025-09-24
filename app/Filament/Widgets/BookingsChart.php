<?php

namespace App\Filament\Widgets;

use App\Models\Booking;
use Carbon\Carbon;
use Filament\Widgets\ChartWidget;

class BookingsChart extends ChartWidget
{
    protected static ?string $heading = 'Reservas por Mês (Ano Atual)';

     protected function getData(): array
    {
        $year = now()->year;

        // Meses do ano
        $months = collect(range(1, 12))->map(function ($m) {
            return Carbon::create()->month($m)->format('M');
        })->toArray();

        // Status possíveis
        $statuses = [
            'pendente' => '#3B82F6',   // azul
            'aprovado' => '#22C55E',   // verde
            'cancelado' => '#EF4444',  // vermelho
            'expirado' => '#F59E0B',   // laranja
        ];

        $datasets = [];

        foreach ($statuses as $status => $color) {
            $data = [];

            foreach (range(1, 12) as $month) {
                $count = Booking::whereYear('created_at', $year)
                    ->whereMonth('created_at', $month)
                    ->where('status', $status)
                    ->count();

                $data[] = $count;
            }

            $datasets[] = [
                'label' => ucfirst($status),
                'data' => $data,
                'backgroundColor' => $color, // cor da barra
            ];
        }

        return [
            'labels' => $months,
            'datasets' => $datasets,
        ];
    }

    protected function getType(): string
    {
        return 'bar';
    }
}
