<?php

namespace App\Filament\Pages;

use App\Models\DashboardBlock;
use Filament\Pages\Page;

class CustomDashboard extends Page
{
    protected static ?string $navigationIcon = 'heroicon-o-document-text';

    protected static string $view = 'filament.pages.custom-dashboard';

    protected static ?string $title = 'Custom dashboard';

    public $blocks = [];

    public function __construct()
    {
        $blocks = DashboardBlock::orderBy('order')
            ->get();

        $this->blocks = $blocks;
    }
}
