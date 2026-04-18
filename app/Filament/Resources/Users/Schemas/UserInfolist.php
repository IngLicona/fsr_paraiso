<?php

namespace App\Filament\Resources\Users\Schemas;

use Filament\Infolists\Components\TextEntry;
use Filament\Schemas\Schema;

class UserInfolist
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextEntry::make('name')
                    ->label('Nombre'),
                TextEntry::make('email')
                    ->label('Email address'),
                TextEntry::make('roles.name')
                    ->label('Roles'),
                TextEntry::make('persona.nombre')
                    ->label('Persona')
                    ->formatStateUsing(fn ($record) => 
                        $record->persona?->nombre_completo ?? '-'
                    ),
                TextEntry::make('created_at')
                    ->dateTime()
                    ->placeholder('-'),
                TextEntry::make('updated_at')
                    ->dateTime()
                    ->placeholder('-'),
                
            ]);
    }
}
