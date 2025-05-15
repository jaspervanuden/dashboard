<?php

namespace App\Livewire;

use App\Classes\FakeData;
use Filament\Widgets\ChartWidget;

class OrdersWidget extends ChartWidget
{
    protected static ?string $heading = 'Bestellingen';

    protected function getData(): array
    {
        $chartData = FakeData::getOrdersChartData();

        return [
            'datasets' => [
                [
                    'label' => 'Bestellingen per dag',
                    'data' => $chartData['data'],
                    'backgroundColor' => '#3b82f6',
                ],
            ],
            'labels' => $chartData['labels'],
        ];
    }

    protected function getType(): string
    {
        return 'bar'; // Of 'line', 'pie', etc.
    }
}
