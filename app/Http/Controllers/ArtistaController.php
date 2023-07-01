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
        if(auth()->user()->perfil_id == 2){
            return view('artista.perfil');
        }else{
            return redirect()->route('logout');
        }
    }

    public function galeria(){
        if(auth()->user()->perfil_id == 2){
            $imagenes = Imagen::all();
            return view('artista.vista_artista',compact('imagenes'));
        }else{
            return redirect()->route('logout');
        }
    }

    public function subirArchivo(Request $request){
        if(auth()->user()->perfil_id == 2){      
            $request->file('archivo')->storeAs('',$request->file('archivo')->getClientOriginalName()); 
            $imagenes = new Imagen();
            $imagenes->archivo = $request->file('archivo')->getClientOriginalName();
        /*  $imagenes->titulo = ""
            $imagenes->baneada = ""
            $imagenes->motivo_ban = "" */
            $imagenes->cuenta_user = auth()->user()->user;
            $imagenes->save();
            return redirect()->route('artista.perfil');
        }else{
            return redirect()->route('logout');
        }
    }
}
