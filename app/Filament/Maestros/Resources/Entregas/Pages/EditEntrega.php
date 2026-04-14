<?php

namespace App\Filament\Maestros\Resources\Entregas\Pages;

use App\Filament\Maestros\Resources\Entregas\EntregaResource;
use Filament\Actions\DeleteAction;
use Filament\Actions\ViewAction;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\TextInput;
use Filament\Resources\Pages\EditRecord;
use Filament\Schemas\Components\Section;

class EditEntrega extends EditRecord
{
    protected static string $resource = EntregaResource::class;
    protected function getFormSchema(): array
{
    return [
        Section::make('Calificación')
            ->schema([
                TextInput::make('calificacion.puntuacion')->numeric(),
                Textarea::make('calificacion.retroalimentacion'),
            ]),
    ];
}

protected function afterSave(): void
{
    $data = $this->form->getState();

    $this->record->calificacion()->updateOrCreate(
        [], // condición (puedes dejar vacío porque es hasOne)
        [
            'puntuacion' => $data['calificacion']['puntuacion'] ?? null,
            'retroalimentacion' => $data['calificacion']['retroalimentacion'] ?? null,
        ]
    );
}

    protected function getHeaderActions(): array
    {
        return [
            ViewAction::make(),
            DeleteAction::make(),
        ];
    }
    protected function mutateFormDataBeforeSave(array $data): array
{
    if (isset($data['calificacion'])) {
        $data['calificacion']['fecha_calificacion'] = now();
    }

    return $data;
}
}
