<?php

namespace App\Http\Controllers;
use App\Models\Perfil;
use App\Models\Imagen;
use Illuminate\Http\Request;

class ArtistaController extends Controller
{
    public function perfil(){
        return view('artista.perfil');
    }

    public function galeria(){
        $imagenes = Imagen::all();
        return view('artista.vista_artista',compact('imagenes'));
    }
}
