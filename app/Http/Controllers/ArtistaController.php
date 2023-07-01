<?php

namespace App\Http\Controllers;
use App\Models\Perfil;
use App\Models\Imagen;
use Illuminate\Http\Request;

class ArtistaController extends Controller
{
    public function __construct(){
        $this->middleware('auth');
    }
    
    public function perfil(){
        return view('artista.perfil');
    }

    public function galeria(){
        $imagenes = Imagen::all();
        return view('artista.vista_artista',compact('imagenes'));
    }

    public function subirArchivo(Request $request){
        $request->file('archivo')->storeAs('',$request->file('archivo')->getClientOriginalName()); 
        $imagenes = new Imagen();
        $imagenes->documento = $request->file('archivo')->getClientOriginalName();
        $imagenes->id =
        $imagenes->titulo =
        $imagenes->archivo =
        $imagenes->baneada =
        $imagenes->motivo_ban =
        $imagenes->cuenta_user =
        $imagenes->save();
        return redirect()->route('artista.perfil');
    }
}
