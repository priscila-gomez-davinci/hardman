<?php

namespace App\Http\Controllers;
use App\Models\Noticia;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;

class NoticiaController extends Controller
{
    public function index(){
        $noticias = Noticia::where('is_visible', true)
        ->orderByDesc('id')
        ->paginate(10);
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

    public function edit(Noticia $noticia)
    {
        return view('noticia.edit', [
            'noticia' => $noticia
        ]);
    }

    public function update(Request $request, Noticia $noticia)
    {

        $rules = [
            'nombre' => 'required|max:255',
            'descripcion' => 'required',
        ];

        //Solamente valido la imagen si el usuario están intentando subirla.
        if($request->file('imagen')){
            $rules['imagen'] = 'required|mimes:jpg,bmp,png';
        }

        $validator = Validator::make($request->all(), $rules);

        if($validator->fails()){
            return redirect()
                ->route('productos.edit', $noticia)
                ->withErrors($validator)
                ->withInput();
        }

        $data = [
            'nombre' => $request->nombre,
            'descripcion' => $request->descripcion,
        ];

        //Guardamos el nuevo archivo.
        if($request->file('imagen')){
            //Guardamos el nombre del archivo, modificando el nombre original del cliente con time.
            $imagen_nombre = time() . $request->file('imagen')->getClientOriginalName();
            //Subimos el archivo a una carpeta del proyecto y guardamos el nombre con el que subió el archivo.
            $imagen = $request->file('imagen')->storeAs('noticias', $imagen_nombre, 'public');
            //Elimina la imagen vieja.
            Storage::delete('public/' . $noticia->imagen);
            $data['imagen'] = $imagen;
        }

        $noticia->update($data);

        return redirect()
            ->route('noticias.index')
            ->with('status', 'El producto se ha modificado correctamente.');
    }



    public function destroy(Noticia $noticia)
    {
        $noticia->update([
            'is_visible' => false,
        ]);
        return redirect()
            ->route('noticias.index')
            ->with('status', 'La noticia se ha eliminado correctamente.');
    }
}
