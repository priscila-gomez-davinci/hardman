<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Carrito;

class CarritoController extends Controller
{
    public function index(){
        $productos = Carrito::where('is_visible', true)
        ->orderByDesc('id')
        ->paginate(10);
        return view('carrito.index', [
            'productos' => $productos
        ]);
    }
}
