<?php

namespace App\Filament\Resources\GruposHogares\Schemas;

use Filament\Infolists\Components\TextEntry;
use Filament\Schemas\Schema;

class GruposHogaresInfolist
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextEntry::make('nombre_grupo_hogar'),
                TextEntry::make('lider'),
                TextEntry::make('direccion'),
                TextEntry::make('reunion'),
                TextEntry::make('edad'),
                TextEntry::make('contacto'),
                TextEntry::make('created_at')
                    ->dateTime(),
                TextEntry::make('updated_at')
                    ->dateTime(),
            ]);
    }
}
