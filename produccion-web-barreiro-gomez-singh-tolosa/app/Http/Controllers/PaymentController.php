<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Carrito;
class PaymentController extends Controller
{
    public function index()
    {
        return view('payment');
    }

    public function return()
    {
        Carrito::whereNotNull('id')->delete();
        return redirect()
        ->route('carrito.index')
        ->with('status', 'Pago realizado con éxito. Pronto nos contactaremos con usted para coordinar la entrega.');
    }
}
