<?php

namespace App\Filament\Resources\DashboardBlocksResource\Pages;

use App\Filament\Resources\DashboardBlocksResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditDashboardBlocks extends EditRecord
{
    protected static string $resource = DashboardBlocksResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
