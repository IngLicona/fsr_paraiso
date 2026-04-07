<?php

namespace App\Filament\Resources\GruposHogares\Pages;

use App\Filament\Resources\GruposHogares\GruposHogaresResource;
use Filament\Actions\EditAction;
use Filament\Resources\Pages\ViewRecord;

class ViewGruposHogares extends ViewRecord
{
    protected static string $resource = GruposHogaresResource::class;

    protected function getHeaderActions(): array
    {
        return [
            EditAction::make(),
        ];
    }
}
