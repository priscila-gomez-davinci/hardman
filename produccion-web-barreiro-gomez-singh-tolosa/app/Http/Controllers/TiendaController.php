<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Producto;

class TiendaController extends Controller
{
    public function index(){
        $productos = Producto::where('is_visible', true)
        ->orderByDesc('id')
        ->paginate(10);
        return view('tienda', [
            'productos' => $productos
        ]);
    }
}
