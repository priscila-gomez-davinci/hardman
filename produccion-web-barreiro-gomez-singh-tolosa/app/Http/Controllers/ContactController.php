<?php

namespace App\Http\Controllers;
use App\Models\Contact;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;

class ContactController extends Controller
{

    public function index()
    {
        return view('contact.index');
    }
    public function contacted()
    {
        return view('contacted');
    }

    public function store(Request $request)
    {
        

        $validator = Validator::make($request->all(), [
            'nombre' => 'required',
            'telefono' => 'required',
            'email' => 'required',
            'mensaje' => 'required',
        ]);

        if($validator->fails()){
            return redirect()
                ->route('contact.index')
                ->withErrors($validator)
                ->withInput();
        }

        
        Contact::create([
            'nombre' => $request->nombre,
            'telefono' => $request->telefono,
            'email' => $request->email,
            'mensaje' => $request->mensaje,
        ]);

        return redirect()
            ->route('contacted')
            ->with('status', 'Su mensaje se ha enviado correctamente. Pronto nos comunicaremos con usted.');
    }
}
