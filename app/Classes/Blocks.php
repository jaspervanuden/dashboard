<?php

namespace App\Classes;

use App\Livewire\RevenueWidget;

class Blocks{
    public static function getBlocks()
    {
        return [
            RevenueWidget::class => 'Omzet van vandaag',
            // naam::class => 'naam die je kan selecteren'
        ];
    }
}
