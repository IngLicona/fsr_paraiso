<?php

namespace App\Filament\Maestros\Resources\Entregas\Schemas;

use App\Models\Persona;
use App\Models\Tarea;
use Filament\Forms\Components\DatePicker;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Textarea;
use Filament\Infolists\Components\TextEntry;
use Filament\Schemas\Schema;
use Filament\Schemas\Components\Section as ComponentsSection;

class EntregaForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema->schema([

    Select::make('tareas_id')
        ->label('Tarea')
        ->options(
            Tarea::all()->pluck('titulo', 'id')
        )
        ->disabled(),

    Select::make('persona_id')
                    ->label('Alumno')
                    ->options(
                        Persona::all()->mapWithKeys(function ($persona) {
                            return [
                                $persona->id => $persona->nombre_completo
                            ];
                        })
                    )
                    ->disabled(),

    DatePicker::make('fecha_entrega')
        ->disabled(),

    Textarea::make('comentario_entrega')
    ->disabled(),

    TextEntry::make('archivos')
    ->label('Archivos')
    ->formatStateUsing(function ($state) {
        if (!$state) return '-';

        $files = is_array($state) ? $state : json_decode($state, true);

        return collect($files)->map(function ($file) {
            $url = asset('storage/' . $file);
            return "<a href='{$url}' target='_blank'>Ver archivo</a>";
        })->implode('<br>');
    })
    ->html()
    ->columnSpanFull(),

    Select::make('estado')
        ->options([
            'pendiente' => 'Pendiente',
            'calificado' => 'Calificado',
        ])
        ->disabled(),

    ComponentsSection::make('Calificación')
    ->relationship('calificacion')
    ->schema([

        TextInput::make('puntuacion')
            ->numeric()
            ->label('Puntuación'),

        Textarea::make('retroalimentacion')
            ->label('Retroalimentación'),

    ])
    ->visible(fn ($context) => $context === 'edit'),

]);

    }
}
