<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Entrega;

class calificacion extends Model
{
    protected $table = 'calificaciones';

    protected $fillable = [
        'entregas_id',
        'puntuacion',
        'retroalimentacion',
        'fecha_calificacion',
    ];

    public function entrega()
    {
        return $this->belongsTo(Entrega::class, 'entregas_id');
    }
}
