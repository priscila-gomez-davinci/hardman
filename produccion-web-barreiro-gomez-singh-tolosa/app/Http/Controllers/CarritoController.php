<?php

namespace App\Http\Controllers;

use App\Models\Producto;
use App\Models\Carrito;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;

class CarritoController extends Controller
{
    public function index()
    {
        $carritos = Carrito::where('is_visible', true)
        ->orderByDesc('id')
        ->paginate(10);
        return view('carrito', [
            'carrito' => $carritos
        ]);
    }
    
    public function store(Request $request)
    {
        Carrito::create([
            'marca' => $request->marca,
            'producto' => $request->producto,
            'precio' => $request->precio,
            'imagen' =>  $request->imagen
        ]);
    }

    public function destroy(Carrito $carrito)
    {
        $carrito->update([
            'is_visible' => false,
        ]);
    }

}
