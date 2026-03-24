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
    return view('pages.servicios');
})->name('services');

Route::get('/eventos', function () {
    return view('pages.eventos');
})->name('events');

Route::get('/contacto', function () {
    return view('pages.contacto');
})->name('contact');

Route::get('/visitanos', function () {
    return view('pages.visitanos');
})->name('visit');

