<?php

namespace App\Filament\Resources\Generacions;

use App\Filament\Resources\Generacions\Pages\CreateGeneracion;
use App\Filament\Resources\Generacions\Pages\EditGeneracion;
use App\Filament\Resources\Generacions\Pages\ListGeneracions;
use App\Filament\Resources\Generacions\Pages\ViewGeneracion;
use App\Filament\Resources\Generacions\Schemas\GeneracionForm;
use App\Filament\Resources\Generacions\Schemas\GeneracionInfolist;
use App\Filament\Resources\Generacions\Tables\GeneracionsTable;
use App\Models\Generacion;
use BackedEnum;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Support\Icons\Heroicon;
use Filament\Tables\Table;

class GeneracionResource extends Resource
{
    protected static ?string $navigationLabel = 'Generaciones';
    protected static ?string $pluralLabel = 'Generaciones';
    protected static ?string $modelLabel = 'Generación';
    protected static ?string $model = Generacion::class;

    protected static string|BackedEnum|null $navigationIcon = Heroicon::OutlinedRectangleStack;

    protected static ?string $recordTitleAttribute = 'Generaciones';

    public static function form(Schema $schema): Schema
    {
        return GeneracionForm::configure($schema);
    }

    public static function infolist(Schema $schema): Schema
    {
        return GeneracionInfolist::configure($schema);
    }

    public static function table(Table $table): Table
    {
        return GeneracionsTable::configure($table);
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
            'index' => ListGeneracions::route('/'),
            'create' => CreateGeneracion::route('/create'),
            'view' => ViewGeneracion::route('/{record}'),
            'edit' => EditGeneracion::route('/{record}/edit'),
        ];
    }
}
