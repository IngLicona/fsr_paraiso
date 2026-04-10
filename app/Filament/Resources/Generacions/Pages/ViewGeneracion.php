<?php

namespace App\Filament\Resources\Generacions\Pages;

use App\Filament\Resources\Generacions\GeneracionResource;
use Filament\Actions\EditAction;
use Filament\Resources\Pages\ViewRecord;

class ViewGeneracion extends ViewRecord
{
    protected static string $resource = GeneracionResource::class;

    protected function getHeaderActions(): array
    {
        return [
            EditAction::make(),
        ];
    }
}
