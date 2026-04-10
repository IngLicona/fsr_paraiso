<?php

namespace App\Filament\Resources\Personas;

use App\Filament\Resources\Personas\Pages\CreatePersona;
use App\Filament\Resources\Personas\Pages\EditPersona;
use App\Filament\Resources\Personas\Pages\ListPersonas;
use App\Filament\Resources\Personas\Pages\ViewPersona;
use App\Filament\Resources\Personas\Schemas\PersonaForm;
use App\Filament\Resources\Personas\Schemas\PersonaInfolist;
use App\Filament\Resources\Personas\Tables\PersonasTable;
use App\Models\Persona;
use BackedEnum;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Support\Icons\Heroicon;
use Filament\Tables\Table;
use Filament\Forms\Components\DatePicker;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Illuminate\Database\Eloquent\Builder;
use Filament\Forms\Form;
use Filament\Infolists\Components\TextEntry;
use Filament\Schemas\Components\Section;
use Filament\Tables;    

class PersonaResource extends Resource
{
    protected static ?string $model = Persona::class;

    protected static string|BackedEnum|null $navigationIcon = Heroicon::OutlinedRectangleStack;

    protected static ?string $recordTitleAttribute = 'personas';

    public static function form(Schema $schema): Schema
    {
        return $schema
            ->schema([
                TextInput::make('nombre')
                    ->required()
                    ->label('Nombre'),

            TextInput::make('paterno')
                ->required()
                ->label('Apellido Paterno'),

            TextInput::make('materno')
                ->required()
                ->label('Apellido Materno'),

            TextInput::make('telefono')
                ->label('Teléfono'),

            DatePicker::make('fecha_nacimiento')
                ->label('Fecha de Nacimiento'),

            Select::make('grupos_hogares_id')
                ->label('Grupo Hogar')
                ->relationship('grupoHogar', 'nombre_grupo_hogar')
                ->required(),

            Select::make('generaciones_id')
                ->label('Generación')
                ->relationship('generacion', 'nombre')
                ->required(),
        ]);
    }

    public static function infolist(Schema $schema): Schema
    {
        return $schema
            ->schema([

                    TextEntry::make('grupoHogar.nombre_grupo_hogar')
                        ->label('Grupo Hogar'),

                    TextEntry::make('generacion.nombre')
                        ->label('Generación'),

                    // 👇 puedes dejar o quitar los demás
                    TextEntry::make('nombre'),
                    TextEntry::make('paterno'),
                    TextEntry::make('materno'),
                    TextEntry::make('telefono'),
                    TextEntry::make('fecha_nacimiento')->date(),
                
        ]);
    }

    public static function table(Table $table): Table
    {
        return PersonasTable::configure($table);
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
            'index' => ListPersonas::route('/'),
            'create' => CreatePersona::route('/create'),
            'view' => ViewPersona::route('/{record}'),
            'edit' => EditPersona::route('/{record}/edit'),
        ];
    }
}
