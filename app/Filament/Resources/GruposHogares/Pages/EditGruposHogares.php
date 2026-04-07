<?php

namespace App\Filament\Resources\GruposHogares\Pages;

use App\Filament\Resources\GruposHogares\GruposHogaresResource;
use Filament\Actions\DeleteAction;
use Filament\Actions\ForceDeleteAction;
use Filament\Actions\RestoreAction;
use Filament\Actions\ViewAction;
use Filament\Resources\Pages\EditRecord;

class EditGruposHogares extends EditRecord
{
    protected static string $resource = GruposHogaresResource::class;

    protected function getHeaderActions(): array
    {
        return [
            ViewAction::make(),
            DeleteAction::make(),
            ForceDeleteAction::make(),
            RestoreAction::make(),
        ];
    }
}
