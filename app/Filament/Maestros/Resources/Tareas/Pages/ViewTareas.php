<?php

namespace App\Filament\Maestros\Resources\Tareas\Pages;

use App\Filament\Maestros\Resources\Tareas\TareasResource;
use Filament\Actions\EditAction;
use Filament\Resources\Pages\ViewRecord;

class ViewTareas extends ViewRecord
{
    protected static string $resource = TareasResource::class;

    protected function getHeaderActions(): array
    {
        return [
            EditAction::make(),
        ];
    }
}
