<?php

namespace App\Http\Controllers;
use App\Models\Noticia;

class NoticiaController extends Controller
{
    public function index(){
        $noticias = Noticia::all();
        return view('noticias.index', [
            'noticias' => $noticias
        ]);
    }
    public function show(Noticia $noticia){
        return view('noticias.show', [
            'noticia' => $noticia
        ]);
    }
    public function create(){
        return view('noticias.create');
    }
}
