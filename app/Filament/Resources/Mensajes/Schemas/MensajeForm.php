<?php

namespace App\Filament\Resources\Mensajes\Schemas;

use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Textarea;
use Filament\Schemas\Schema;

class MensajeForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('nombre')
                    ->required(),
                TextInput::make('email')
                    ->label('Email address')
                    ->email()
                    ->default(null),
                TextInput::make('telefono')
                    ->tel()
                    ->required(),
                TextInput::make('asunto')
                    ->required(),
                Textarea::make('mensaje')
                    ->required()
                    ->columnSpanFull(),
                Select::make('estado')
                    ->options(['pendiente' => 'Pendiente', 'leido' => 'Leido'])
                    ->default('pendiente')
                    ->required(),
            ]);
    }
}
