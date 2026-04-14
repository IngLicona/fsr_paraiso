<?php

namespace App\Filament\Maestros\Resources\Entregas\Schemas;

use Filament\Infolists\Components\TextEntry;
use Filament\Schemas\Schema;

class EntregaInfolist
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextEntry::make('tarea.titulo')
                    ->label('Tarea'),
                TextEntry::make('persona.nombre_completo')
                    ->label('Persona'),
                TextEntry::make('fecha_entrega')
                    ->date(),
                TextEntry::make('comentario_entrega')
                    ->columnSpanFull(),
                TextEntry::make('estado')
                    ->badge(),
                TextEntry::make('archivos')
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
                TextEntry::make('calificacion.puntuacion')
                    ->label('Calificación')
                    ->badge(),
                TextEntry::make('calificacion.retroalimentacion')
                    ->label('Retroalimentación')
                    ->columnSpanFull(),
                TextEntry::make('created_at')
                    ->dateTime()
                    ->placeholder('-'),
                TextEntry::make('updated_at')
                    ->dateTime()
                    ->placeholder('-'),
            ]);
    }
}
