<?php

namespace App\Filament\Maestros\Resources\Entregas\Tables;

use Filament\Actions\BulkActionGroup;
use Filament\Actions\DeleteBulkAction;
use Filament\Actions\EditAction;
use Filament\Actions\ViewAction;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;
use Filament\Actions\Action;

class EntregasTable
{
    public static function configure(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('tarea.titulo')
                    ->numeric()
                    ->label('Tarea')
                    ->sortable(),
                TextColumn::make('persona.nombre')
                    ->label('Alumno')
                    ->formatStateUsing(fn ($record) => 
                        $record->persona?->nombre_completo ?? '-'
                    )
                    ->searchable(),
                    TextColumn::make('calificacion.puntuacion')
                    ->label('Calificación')
                    ->badge(),
                TextColumn::make('fecha_entrega')
                    ->date()
                    ->sortable(),
                TextColumn::make('estado')
                    ->badge(),
                TextColumn::make('archivos')
                    ->formatStateUsing(function ($state) {
                        if (!$state) return '-';

                        $files = is_array($state) ? $state : json_decode($state, true);

                        return collect($files)->map(function ($file) {
                            $url = asset('storage/' . $file);
                            return "<a href='{$url}' target='_blank'>Ver archivo</a>";
                        })->implode('<br>');
                    })
                    ->html()
                    ->columnSpanFull(),
                TextColumn::make('created_at')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
                TextColumn::make('updated_at')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
            ])
            ->filters([
                //
            ])
            ->recordActions([
                ViewAction::make(),
                Action::make('calificar')
                ->label('Calificar')
                ->icon('heroicon-o-check-circle')
                ->url(fn ($record) => route('filament.maestros.resources.entregas.edit', $record))
                        ])
            ->toolbarActions([
                BulkActionGroup::make([
                    DeleteBulkAction::make(),
                ]),
            ]);
    }
}
