<?php

namespace App\Http\Controllers;

use App\Models\Noticia;

class NoticiasController extends Controller
{
    public function index()
    {
    $noticias = Noticia::all();
        return view('noticias.index', [
            'noticias' => $noticias
        ]);
    }

    public function show(Noticia $noticia)
    {
        return view('noticias.show', [
            'noticia' => $noticia
        ]);
    }
}
