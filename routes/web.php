<?php

use Illuminate\Support\Facades\Route;

// Página de inicio
Route::get('/', function () {
    return view('pages.index');
})->name('home');

// Páginas públicas
Route::get('/nosotros', function () {
    return view('pages.nosotros');
})->name('about');

Route::get('/servicios', function () {
    return view('pages.servicios.index');
})->name('services');

// Departamentos
Route::get('/servicios/rock-kids', function () {
    return view('pages.servicios.departamentos.rock-kids');
})->name('services.rock-kids');

Route::get('/servicios/media', function () {
    return view('pages.servicios.departamentos.media');
})->name('services.media');

Route::get('/servicios/bienvenida', function () {
    return view('pages.servicios.departamentos.bienvenida');
})->name('services.bienvenida');

// Grupos de Hogares
Route::get('/servicios/grupos-jovenes', function () {
    return view('pages.servicios.grupos.jovenes');
})->name('services.grupos-jovenes');

Route::get('/servicios/grupos-adultos', function () {
    return view('pages.servicios.grupos.adultos');
})->name('services.grupos-adultos');

Route::get('/eventos', function () {
    return view('pages.eventos');
})->name('events');

Route::get('/contacto', function () {
    return view('pages.contacto');
})->name('contact');

Route::post('/contacto', function () {
    // Validar datos del formulario
    $validated = request()->validate([
        'nombre' => 'required|string|max:255',
        'email' => 'required|email|max:255',
        'telefono' => 'nullable|string|max:20',
        'asunto' => 'required|string|max:255',
        'mensaje' => 'required|string|max:5000',
        'privacidad' => 'accepted',
    ]);

    // Aquí puedes guardar el mensaje en la base de datos o enviarlo por email
    // Por ahora, redirigimos con éxito
    return redirect()->back()->with('success', '¡Mensaje enviado exitosamente! Pronto nos comunicaremos contigo.');
});

Route::get('/visitanos', function () {
    return view('pages.visitanos');
})->name('visit');

