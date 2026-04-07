<?php

namespace App\Http\Controllers;

use App\Models\Post;

class EventosController extends Controller
{
    public function index()
    {
        $posts = Post::where('estado', 'activo')->orderBy('fecha_publicacion', 'desc')->get();
        
        return view('pages.eventos', compact('posts'));
    }
}
