<?php

namespace App\Http\Controllers;
use App\Models\Perfil;
use Illuminate\Http\Request;

class ArtistaController extends Controller
{
    public function perfil(){
        return view('artista.perfil');
    }
}
