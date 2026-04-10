<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Tarea extends Model
{
    protected $fillable = [
        'generaciones_id',
        'titulo',
        'descripcion',
        'fecha_creacion',
        'fecha_vencimiento',
        'archivos',
        'links',
        'estado',
    ];

    protected $casts = [
    'archivos' => 'array',
];

public function generacion()
    {
        return $this->belongsTo(Generacion::class, 'generaciones_id');
    }
}
