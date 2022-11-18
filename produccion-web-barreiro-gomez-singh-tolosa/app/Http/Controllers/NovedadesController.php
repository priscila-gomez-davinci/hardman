<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Noticia;

class NovedadesController extends Controller
{
    public function index(){
        $noticias = Noticia::where('is_visible', true)
        ->orderByDesc('id')
        ->paginate(10);
        return view('novedades', [
            'noticias' => $noticias
        ]);
    }
}
