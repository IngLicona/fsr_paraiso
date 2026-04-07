<?php

namespace App\Filament\Resources\GruposHogares\Schemas;

use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Schemas\Schema;

class GruposHogaresForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                Select::make('tipo_hogar')
                    ->options([
                        'jovenes' => 'Jóvenes',
                        'adultos' => 'Adultos',
                    ])
                    ->required(),
                TextInput::make('nombre_grupo_hogar')
                    ->required(),
                TextInput::make('lider')
                    ->required(),
                TextInput::make('direccion')
                    ->required(),
                TextInput::make('reunion')
                    ->required(),
                TextInput::make('edad')
                    ->label('Rango de Edad')
                    ->placeholder('Ej: 15-20')
                    ->default(null),
                TextInput::make('contacto')
                    ->required(),
            ]);
    }
}
