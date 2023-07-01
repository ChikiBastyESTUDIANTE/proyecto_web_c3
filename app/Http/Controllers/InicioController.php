<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Cuenta;
use Illuminate\Support\Facades\Hash;

class InicioController extends Controller
{
    public function login(){
        return view('login.login');
    }
    public function datosCuenta(){
        return view('login.crear_cuenta');
    }
    public function crearCuenta(Request $request){
        $cuenta = new Cuenta();
        $cuenta->user = $request->nombreUsuario;
        $cuenta->nombre = $request->nombre;
        $cuenta->apellido = $request->apellido;
        $cuenta->password = Hash::make($request->contrasena);
        $cuenta->perfil_id = 2;
        $cuenta->save();
        return redirect()->route('login');
    }
}
