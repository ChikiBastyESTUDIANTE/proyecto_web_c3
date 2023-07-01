<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Perfil;
use App\Models\Imagen;
use App\Models\Cuenta;

class AdminController extends Controller
{
    public function listarPerfiles(){
        $perfiles = Perfil::all();
        return view('Admin.listar_perfiles',compact('perfiles'));
    }
}
