<?php

namespace App\Filament\Resources\GruposHogares\Tables;

use Filament\Actions\BulkActionGroup;
use Filament\Actions\DeleteBulkAction;
use Filament\Actions\EditAction;
use Filament\Actions\ViewAction;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;

class GruposHogaresTable
{
    public static function configure(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('nombre_grupo_hogar')
                    ->label('Nombre Grupo')
                    ->searchable(),
                TextColumn::make('lider')
                    ->searchable(),
                TextColumn::make('direccion'),
                TextColumn::make('reunion'),
                TextColumn::make('edad'),
                TextColumn::make('contacto'),
            ])
            ->filters([
                //
            ])
            ->recordActions([
                ViewAction::make(),
                EditAction::make(),
            ])
            ->toolbarActions([
                BulkActionGroup::make([
                    DeleteBulkAction::make(),
                ]),
            ]);
    }
}
