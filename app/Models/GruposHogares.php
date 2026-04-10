<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class GruposHogares extends Model
{

    protected $primaryKey = 'id'; 
    protected $table = 'grupos_hogares'; 

    protected $fillable = [
        'tipo_hogar',
        'nombre_grupo_hogar',
        'lider',
        'direccion',
        'reunion',
        'edad',
        'contacto',
    ];

    protected $casts = [
        'tipo_hogar' => 'string',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
