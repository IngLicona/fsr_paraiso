<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class GruposHogares extends Model
{

    protected $table = 'grupos_hogares'; 

    protected $fillable = [
        'nombre_grupo_hogar',
        'lider',
        'direccion',
        'reunion',
        'edad',
        'contacto',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
