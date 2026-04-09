<?php

namespace App\Filament\Maestros\Resources\Tareas;

use App\Filament\Maestros\Resources\Tareas\Pages\CreateTareas;
use App\Filament\Maestros\Resources\Tareas\Pages\EditTareas;
use App\Filament\Maestros\Resources\Tareas\Pages\ListTareas;
use App\Filament\Maestros\Resources\Tareas\Pages\ViewTareas;
use App\Filament\Maestros\Resources\Tareas\Schemas\TareasForm;
use App\Filament\Maestros\Resources\Tareas\Schemas\TareasInfolist;
use App\Filament\Maestros\Resources\Tareas\Tables\TareasTable;
use App\Models\Tareas;
use BackedEnum;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Support\Icons\Heroicon;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class TareasResource extends Resource
{
    protected static ?string $model = Tareas::class;

    protected static string|BackedEnum|null $navigationIcon = Heroicon::OutlinedRectangleStack;

    protected static ?string $recordTitleAttribute = 'tareas';

    public static function form(Schema $schema): Schema
    {
        return TareasForm::configure($schema);
    }

    public static function infolist(Schema $schema): Schema
    {
        return TareasInfolist::configure($schema);
    }

    public static function table(Table $table): Table
    {
        return TareasTable::configure($table);
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
            'create' => CreateTareas::route('/create'),
            'view' => ViewTareas::route('/{record}'),
            'edit' => EditTareas::route('/{record}/edit'),
        ];
    }

    public static function getRecordRouteBindingEloquentQuery(): Builder
    {
        return parent::getRecordRouteBindingEloquentQuery()
            ->withoutGlobalScopes([
                SoftDeletingScope::class,
            ]);
    }
}
