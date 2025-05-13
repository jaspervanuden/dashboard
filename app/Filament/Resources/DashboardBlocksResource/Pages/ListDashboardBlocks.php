<?php

namespace App\Filament\Resources\DashboardBlocksResource\Pages;

use App\Filament\Resources\DashboardBlocksResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListDashboardBlocks extends ListRecords
{
    protected static string $resource = DashboardBlocksResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
