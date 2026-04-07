<?php

namespace App\Filament\Resources\GruposHogares\Pages;

use App\Filament\Resources\GruposHogares\GruposHogaresResource;
use Filament\Actions\CreateAction;
use Filament\Resources\Pages\ListRecords;

class ListGruposHogares extends ListRecords
{
    protected static string $resource = GruposHogaresResource::class;

    protected function getHeaderActions(): array
    {
        return [
            CreateAction::make(),
        ];
    }
}
