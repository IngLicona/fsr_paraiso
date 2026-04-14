<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Tarea;
use App\Models\Persona;
use App\Models\Calificacion;

class Entrega extends Model
{
    protected $table = 'entregas';
    protected $fillable = [
        'tareas_id',
        'persona_id',
        'fecha_entrega',
        'comentario_entrega',
        'estado',
        'archivos',
    ];

        public function tarea()
    {
        return $this->belongsTo(Tarea::class, 'tareas_id');
    }

    public function persona()
    {
        return $this->belongsTo(Persona::class, 'persona_id');
    }
    public function calificacion()
{
    return $this->hasOne(Calificacion::class, 'entregas_id');
}

}
