<?php

namespace App\Filament\Resources\GruposHogares\Schemas;

use Filament\Forms\Components\TextInput;
use Filament\Schemas\Schema;

class GruposHogaresForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('nombre_grupo_hogar')
                    ->required(),
                TextInput::make('lider')
                    ->required(),
                TextInput::make('direccion')
                    ->required(),
                TextInput::make('reunion')
                    ->required(),
                TextInput::make('edad')
                    ->numeric()
                    ->default(null),
                TextInput::make('contacto')
                    ->required(),
            ]);
    }
}
