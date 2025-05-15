<?php

namespace App\Livewire;

use App\Classes\FakeData;
use Filament\Widgets\ChartWidget;
use Filament\Widgets\StatsOverviewWidget;

class ConversionRateWidget extends StatsOverviewWidget
{
    public $name;
    public $width;

    public function mount($name = 'Conversie persentage', $width = 1)
    {
        $this->name = $name;
        $this->width = $width;
    }

    /**
     * @return mixed
     */
    protected function getColumns(): int
    {
        return $this->width;
    }

    protected function getCards(): array
    {
        return [
            StatsOverviewWidget\Stat::make($this->name, FakeData::getConversionRateData()),
        ];
    }
}
