<?php

namespace App\Http\Controllers;
use App\Models\Perfil;
use Illuminate\Http\Request;

class ArtistaController extends Controller
{
    public function perfil(){
        $perfiles = Perfil::all();
        return view('Artista.perfil', compact('perfiles'));
    }
}
