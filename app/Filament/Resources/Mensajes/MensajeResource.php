<?php

namespace App\Filament\Resources\Mensajes;

use App\Filament\Resources\Mensajes\Pages\CreateMensaje;
use App\Filament\Resources\Mensajes\Pages\EditMensaje;
use App\Filament\Resources\Mensajes\Pages\ListMensajes;
use App\Filament\Resources\Mensajes\Pages\ViewMensaje;
use App\Filament\Resources\Mensajes\Schemas\MensajeForm;
use App\Filament\Resources\Mensajes\Schemas\MensajeInfolist;
use App\Filament\Resources\Mensajes\Tables\MensajesTable;
use App\Models\Mensaje;
use BackedEnum;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Support\Icons\Heroicon;
use Filament\Tables\Table;

class MensajeResource extends Resource
{
    protected static ?string $model = Mensaje::class;

    protected static string|BackedEnum|null $navigationIcon = Heroicon::OutlinedRectangleStack;

    protected static ?string $recordTitleAttribute = 'mensajes';

    public static function form(Schema $schema): Schema
    {
        return MensajeForm::configure($schema);
    }

    public static function infolist(Schema $schema): Schema
    {
        return MensajeInfolist::configure($schema);
    }

    public static function table(Table $table): Table
    {
        return MensajesTable::configure($table);
    }

    public static function getRelations(): array
    {
        return [
            //
        ];
    }

    public static function canCreate(): bool
    {
        return false;
    }


    public static function canEdit($record): bool
    {
        return false;
    }
    public static function getPages(): array
    {
        return [
            'index' => ListMensajes::route('/'),
            'create' => CreateMensaje::route('/create'),
            'view' => ViewMensaje::route('/{record}'),
            'edit' => EditMensaje::route('/{record}/edit'),
        ];
    }
}
