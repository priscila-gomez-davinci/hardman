<?php

namespace App\Http\Controllers;
use App\Models\Ingreso;
use Illuminate\Http\Request;

class IngresosController extends Controller
{
    public function ingresos()
    {
        return view('ingresos');
    }

    public function getNews(){
        $newProducts = Ingreso::all();
        return $newProducts;
        
    }
}
