<?php

namespace App\Classes;

use App\Livewire\RevenueWidget;
use App\Livewire\WeekOrdersWidget;
use App\Livewire\VisitorsWidget;
use App\Livewire\ConversionRateWidget;
use App\Livewire\ReturnsWidget;
use App\Livewire\NewCustomersWidget;


class Blocks{
    public static function getBlocks()
    {
        return [
            RevenueWidget::class => 'Omzet van vandaag',
            WeekOrdersWidget::class => 'Aantal bestellingen deze week',
            VisitorsWidget::class => 'Aantal bezoekers',
            ConversionRateWidget::class => 'Conversieratio',
            ReturnsWidget::class => 'Aantal retouren',
            NewCustomersWidget::class => 'Nieuwe klanten vandaag'
            // naam::class => 'naam die je kan selecteren'
        ];
    }
}
