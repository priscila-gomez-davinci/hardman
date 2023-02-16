<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Carrito;
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
        return redirect()
        ->route('carrito.index')
        ->with('status', 'El producto se ha agregado correctamente al carrito.');
    }

    public function destroy($id)
    { 
        Carrito::where('id', $id)->delete();
        return redirect('carrito');
     }

    public function handle()
    {
        Carrito::whereNotNull('id')->delete();
    }
}
