<?php

namespace App\Filament\Resources\Personas\Schemas;

use Filament\Forms\Components\DatePicker;
use Filament\Forms\Components\TextInput;
use Filament\Schemas\Schema;

class PersonaForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('grupos_hogares_id')
                    ->required()
                    ->numeric(),
                TextInput::make('generaciones_id')
                    ->required()
                    ->numeric(),
                TextInput::make('nombre')
                    ->required(),
                TextInput::make('paterno')
                    ->required(),
                TextInput::make('materno')
                    ->required(),
                TextInput::make('telefono')
                    ->tel()
                    ->default(null),
                DatePicker::make('fecha_nacimiento'),
            ]);
    }
}
