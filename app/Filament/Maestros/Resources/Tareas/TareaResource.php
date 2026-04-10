<?php

namespace App\Filament\Maestros\Resources\Tareas;

use App\Filament\Maestros\Resources\Tareas\Pages\CreateTarea;
use App\Filament\Maestros\Resources\Tareas\Pages\EditTarea;
use App\Filament\Maestros\Resources\Tareas\Pages\ListTareas;
use App\Filament\Maestros\Resources\Tareas\Pages\ViewTarea;
use App\Filament\Maestros\Resources\Tareas\Schemas\TareaForm;
use App\Filament\Maestros\Resources\Tareas\Schemas\TareaInfolist;
use App\Filament\Maestros\Resources\Tareas\Tables\TareasTable;
use App\Models\Tarea;
use BackedEnum;
use DateTime;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Support\Icons\Heroicon;
use Filament\Tables\Table;
use Filament\Forms\Components\DateTimePicker;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Textarea;
use Illuminate\Database\Eloquent\Builder;
use Filament\Forms\Form;
use Filament\Tables;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Columns\BadgeColumn;
use Illuminate\Support\Facades\Auth;
use Filament\Actions\ViewAction;
use Filament\Actions\EditAction;
class TareaResource extends Resource
{
    protected static ?string $model = Tarea::class;

    protected static string|BackedEnum|null $navigationIcon = Heroicon::OutlinedRectangleStack;

    protected static ?string $recordTitleAttribute = 'tareas';

    public static function form(Schema $schema): Schema
{
    return $schema->schema([
        TextInput::make('titulo')
            ->required()
            ->label('Título'),

        Textarea::make('descripcion')
            ->required()
            ->label('Descripción'),

        DateTimePicker::make('fecha_vencimiento')
            ->required(),

        Select::make('generaciones_id')
            ->label('Generación')
            ->relationship('generacion', 'nombre')
            ->required(),

        Textarea::make('links')
            ->label('Links')
            ->placeholder('https://youtube.com/...'),

        FileUpload::make('archivos')
            ->multiple()
            ->disk('public')
            ->directory('tareas'),

        Select::make('estado')
            ->options([
                'pendiente' => 'Pendiente',
                'en_progreso' => 'En Progreso',
                'completada' => 'Completada',
            ])
    ]);
}

    

    public static function infolist(Schema $schema): Schema
    {
        return TareaInfolist::configure($schema);
    }

public static function table(Table $table): Table
{
    return $table
        ->columns([
            TextColumn::make('generacion.nombre')
                ->label('Generación'),

            TextColumn::make('titulo')->searchable(),

            TextColumn::make('descripcion')
                ->limit(50),

            TextColumn::make('fecha_vencimiento')
                ->dateTime(),

            TextColumn::make('links')
                ->url(fn ($record) => $record->links)
                ->openUrlInNewTab(),

            TextColumn::make('archivos')
                ->formatStateUsing(function ($state) {
                    if (!$state) return 'Sin archivos';

                    return collect($state)
                        ->map(fn ($file) => "<a href='/storage/{$file}' target='_blank'>Ver archivo</a>")
                        ->implode('<br>');
                })
                ->html(),

            BadgeColumn::make('estado')
                ->colors([
                    'success' => 'completada',
                    'warning' => 'en_progreso',
                    'danger' => 'pendiente',
                ])
                ,
        ])
        ->actions([
                    ViewAction::make(),
                    EditAction::make(),
                ]);
    
}

    
    public static function getRelations(): array
    {
        return [
            //
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => ListTareas::route('/'),
            'create' => CreateTarea::route('/create'),
            'view' => ViewTarea::route('/{record}'),
            'edit' => EditTarea::route('/{record}/edit'),
        ];
    }
}
