<?php

namespace App\Filament\Resources\Personas\Schemas;

use Filament\Infolists\Components\TextEntry;
use Filament\Schemas\Schema;

class PersonaInfolist
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextEntry::make('grupos_hogares_id')
                    ->numeric(),
                TextEntry::make('generaciones_id')
                    ->numeric(),
                TextEntry::make('nombre'),
                TextEntry::make('paterno'),
                TextEntry::make('materno'),
                TextEntry::make('telefono')
                    ->placeholder('-'),
                TextEntry::make('fecha_nacimiento')
                    ->date()
                    ->placeholder('-'),
                TextEntry::make('created_at')
                    ->dateTime()
                    ->placeholder('-'),
                TextEntry::make('updated_at')
                    ->dateTime()
                    ->placeholder('-'),
            ]);
    }
}
