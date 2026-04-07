<?php

namespace App\Filament\Resources\Posts\Schemas;

use Filament\Forms\Components\DatePicker;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\Hidden;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Textarea;
use Filament\Schemas\Schema;
use Illuminate\Support\Facades\Auth;

class PostForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                Hidden::make('user_id')
                    ->default(Auth::id()),
                TextInput::make('titulo')
                    ->required(),
                Textarea::make('descripcion')
                    ->required()
                    ->columnSpanFull(),
                FileUpload::make('imagen')
                    ->image()
                    ->disk('public')
                    ->directory('posts')
                    ->visibility('public')
                    ->acceptedFileTypes(['image/jpeg', 'image/png']),
                DatePicker::make('fecha_publicacion')
                    ->required(),
                Select::make('estado')
                    ->options(['activo' => 'Activo', 'inactivo' => 'Inactivo'])
                    ->default('activo')
                    ->required(),
            ]);
    }
}
