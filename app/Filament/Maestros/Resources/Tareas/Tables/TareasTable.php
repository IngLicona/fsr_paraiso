<?php

namespace App\Filament\Maestros\Resources\Tareas\Tables;

use DateTime;
use Filament\Actions\BulkActionGroup;
use Filament\Actions\DeleteBulkAction;
use Filament\Actions\EditAction;
use Filament\Actions\ViewAction;
use Filament\Forms\Components\DateTimePicker;
use Filament\Tables\Table;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Columns\BadgeColumn;

class TareasTable
{
    public static function configure(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('generacion.nombre')
                    ->label('Generación')
                    ->searchable(),
                TextColumn::make('titulo')->searchable(),
                TextColumn::make('descripcion')->label('descripción'),
                DateTimePicker::make('fecha_vencimiento')->label('Fecha límite'),
                BadgeColumn::make('estado')
                    ->colors([
                        'success' => 1,
                        'danger' => 0,
                    ]),
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
