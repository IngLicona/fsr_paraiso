<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $fillable = [
        'user_id',
        'titulo',
        'descripcion',
        'imagen',
        'fecha_publicacion',
        'estado',
    ];

    protected $casts = [
        'fecha_publicacion' => 'date',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
