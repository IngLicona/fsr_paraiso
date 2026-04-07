<?php

namespace App\Http\Controllers;

use App\Models\GruposHogares;

class GruposController extends Controller
{
    public function jovenes()
    {
        $grupos = GruposHogares::where('tipo_hogar', 'jovenes')->get();
        
        return view('pages.servicios.grupos.jovenes', compact('grupos'));
    }

    public function adultos()
    {
        $grupos = GruposHogares::where('tipo_hogar', 'adultos')->get();
        
        return view('pages.servicios.grupos.adultos', compact('grupos'));
    }
}
