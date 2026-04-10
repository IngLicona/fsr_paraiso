<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Generacion extends Model
{
    protected $table = 'generaciones';


    protected $fillable = ['nombre'];

    public function tareas()
    {
        return $this->hasMany(Tarea::class, 'generaciones_id');
    }
}
