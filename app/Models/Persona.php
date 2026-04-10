<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Persona extends Model
{
    //
    protected $table = 'personas';
    protected $fillable = [
        'grupos_hogares_id',
        'generaciones_id',
        'nombre',
        'paterno',
        'materno',
        'telefono',
        'fecha_nacimiento',  
    ];

    public function grupoHogar()
    {
    return $this->belongsTo(GruposHogares::class, 'grupos_hogares_id', 'id');
    }

    public function generacion()
    {
        return $this->belongsTo(Generacion::class, 'generaciones_id');
    }

    public function user()
    {
        return $this->hasOne(User::class, 'persona_id');
    }

    public function getNombreCompletoAttribute()
    {
        return "{$this->nombre} {$this->paterno} {$this->materno}";
    }
}
