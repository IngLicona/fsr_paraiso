<?php

namespace App\Filament\Resources\GruposHogares;

use App\Filament\Resources\GruposHogares\Pages\CreateGruposHogares;
use App\Filament\Resources\GruposHogares\Pages\EditGruposHogares;
use App\Filament\Resources\GruposHogares\Pages\ListGruposHogares;
use App\Filament\Resources\GruposHogares\Pages\ViewGruposHogares;
use App\Filament\Resources\GruposHogares\Schemas\GruposHogaresForm;
use App\Filament\Resources\GruposHogares\Schemas\GruposHogaresInfolist;
use App\Filament\Resources\GruposHogares\Tables\GruposHogaresTable;
use App\Models\GruposHogares;
use BackedEnum;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Support\Icons\Heroicon;
use Filament\Tables\Table;
class GruposHogaresResource extends Resource
{
    protected static ?string $model = GruposHogares::class;

    protected static string|BackedEnum|null $navigationIcon = Heroicon::OutlinedRectangleStack;

    protected static ?string $recordTitleAttribute = 'nombre_grupo_hogar';

    public static function form(Schema $schema): Schema
    {
        return GruposHogaresForm::configure($schema);
    }

    public static function infolist(Schema $schema): Schema
    {
        return GruposHogaresInfolist::configure($schema);
    }

    public static function table(Table $table): Table
    {
        return GruposHogaresTable::configure($table);
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
            'index' => ListGruposHogares::route('/'),
            'create' => CreateGruposHogares::route('/create'),
            'view' => ViewGruposHogares::route('/{record}'),
            'edit' => EditGruposHogares::route('/{record}/edit'),
        ];
    }
}
