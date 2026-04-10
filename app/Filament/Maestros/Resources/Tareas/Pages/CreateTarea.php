<?php

namespace App\Filament\Maestros\Resources\Tareas\Pages;

use App\Filament\Maestros\Resources\Tareas\TareaResource;
use Filament\Resources\Pages\CreateRecord;

class CreateTarea extends CreateRecord
{
    protected static string $resource = TareaResource::class;

    protected function mutateFormDataBeforeCreate(array $data): array
{
    $data['fecha_creacion'] = now();
    $data['estado'] = 1;

    return $data;
}
}
