<?php

namespace App\Http\Controllers;

use App\Models\Producto;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;

class ProductosController extends Controller
{
    public function index(){
        $productos = Producto::where('is_visible', true)
        ->orderByDesc('id')
        ->paginate(10);
        return view('productos.index', [
            'productos' => $productos
        ]);
    }
    public function show(Producto $producto){
        return view('productos.show', [
            'producto' => $producto
        ]);
    }
    public function create(){
        return view('productos.create');
    }

    public function edit(Producto $producto)
    {
        return view('productos.edit', [
            'producto' => $producto
        ]);
    }


    public function store(Request $request)
    {

        $validator = Validator::make($request->all(), [
            'marca' => 'required',
            'producto' => 'required',
            'descripcion' => 'required',
            'precio' => 'required',
            'imagen' => 'required|mimes:jpg,bmp,png',
        ]);

        if($validator->fails()){
            return redirect()
                ->route('producto.create')
                ->withErrors($validator)
                ->withInput();
        }

        //Guardamos el nombre del archivo, modificando el nombre original del cliente con time.
        $imagen_nombre = time() . $request->file('imagen')->getClientOriginalName();

        //Subimos el archivo a una carpeta del proyecto y guardamos el nombre con el que subió el archivo.
        $imagen = $request->file('imagen')->storeAs('producto', $imagen_nombre, 'public');
        
        Producto::create([
            'titulo' => $request->titulo,
            'descripcion' => $request->descripcion,
            'imagen' => $imagen
        ]);

        return redirect()
            ->route('productos.index')
            ->with('status', 'El producto se ha agregado correctamente.');
    }



    public function update(Request $request, Producto $producto)
    {

        $rules = [
            'marca' => 'required',
            'producto' => 'required',
            'descripcion' => 'required',
            'precio' => 'required'
        ];

        //Solamente valido la imagen si el usuario están intentando subirla.
        if($request->file('imagen')){
            $rules['imagen'] = 'required|mimes:jpg,bmp,png';
        }

        $validator = Validator::make($request->all(), $rules);

        if($validator->fails()){
            return redirect()
                ->route('productos.edit', $producto)
                ->withErrors($validator)
                ->withInput();
        }

        $data = [
            'marca' => $request->marca,
            'producto' => $request->producto,
            'descripcion' => $request->descripcion,
            'precio' => $request->precio,
            'imagen' => 'required|mimes:jpg,bmp,png',
            
        ];

        //Guardamos el nuevo archivo.
        if($request->file('imagen')){
            //Guardamos el nombre del archivo, modificando el nombre original del cliente con time.
            $imagen_nombre = time() . $request->file('imagen')->getClientOriginalName();
            //Subimos el archivo a una carpeta del proyecto y guardamos el nombre con el que subió el archivo.
            $imagen = $request->file('imagen')->storeAs('productos', $imagen_nombre, 'public');
            //Elimina la imagen vieja.
            Storage::delete('public/' . $producto->imagen);
            $data['imagen'] = $imagen;
        }

        $producto->update($data);

        return redirect()
            ->route('productos.index')
            ->with('status', 'El producto se ha modificado correctamente.');
    }



    public function destroy(Producto $producto)
    {
        $producto->update([
            'is_visible' => false,
        ]);
        return redirect()
            ->route('productos.index')
            ->with('status', 'El producto se ha eliminado correctamente.');
    }

    
}
