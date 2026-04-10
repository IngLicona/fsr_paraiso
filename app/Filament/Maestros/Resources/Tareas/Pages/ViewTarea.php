<?php

namespace App\Filament\Maestros\Resources\Tareas\Pages;

use App\Filament\Maestros\Resources\Tareas\TareaResource;
use Filament\Actions\EditAction;
use Filament\Resources\Pages\ViewRecord;

class ViewTarea extends ViewRecord
{
    protected static string $resource = TareaResource::class;

    protected function getHeaderActions(): array
    {
        return [
            EditAction::make(),
        ];
    }
}
