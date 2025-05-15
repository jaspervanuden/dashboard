<?php

namespace App\Livewire;

use App\Classes\FakeData;
use Filament\Widgets\ChartWidget;

class WeekOrdersWidget extends ChartWidget
{
    protected static ?string $heading = 'Bestellingen';
    public $name;
    public $width;

    public function mount($name = 'Omzet', $width = 1): void
    {
        $this->name = $name;
        $this->width = $width;
    }

    public function getColumnSpan(): int|string|array
    {
        return $this->width;
    }

    protected function getData(): array
    {
        $chartData = FakeData::getWeekOrdersChartData();

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
