<?php

namespace App\Filament\Resources\Mensajes\Schemas;

use Filament\Infolists\Components\TextEntry;
use Filament\Schemas\Schema;

class MensajeInfolist
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextEntry::make('nombre'),
                TextEntry::make('email')
                    ->label('Email address')
                    ->placeholder('-'),
                TextEntry::make('telefono'),
                TextEntry::make('asunto'),
                TextEntry::make('mensaje')
                    ->columnSpanFull(),
                TextEntry::make('estado')
                    ->badge(),
                TextEntry::make('created_at')
                    ->dateTime()
                    ->placeholder('-'),
                TextEntry::make('updated_at')
                    ->dateTime()
                    ->placeholder('-'),
            ]);
    }
}
