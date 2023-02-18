<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Carrito;
use Illuminate\Support\Facades\DB;

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

    public function delete()
    {
        Carrito::whereNotNull('id')->delete();
        return redirect()
        ->route('carrito.index')
        ->with('status', 'Se ha eliminado el contenido del carrito');
    }

    public function payment()
    {
        return redirect()
        ->route('payment.index');
    }
}
