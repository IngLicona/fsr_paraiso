<?php

namespace App\Http\Controllers;

use App\Models\Mensaje;
use Illuminate\Http\Request;

class MensajeController extends Controller
{
    public function store(Request $request)
{
    $request->validate([
        'nombre' => 'required',
        'email' => 'required|email',
        'mensaje' => 'required',
    ]);

    Mensaje::create($request->all());

    return back()->with('success', 'Mensaje enviado correctamente');
}

}
