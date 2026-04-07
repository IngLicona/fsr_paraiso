<?php

namespace App\Http\Controllers;

use App\Models\GruposHogares;

class GruposController extends Controller
{
    public function jovenes()
    {
        $grupos = GruposHogares::all();
        
        return view('pages.servicios.grupos.jovenes', compact('grupos'));
    }

    public function adultos()
    {
        $grupos = GruposHogares::all();
        
        return view('pages.servicios.grupos.adultos', compact('grupos'));
    }
}
