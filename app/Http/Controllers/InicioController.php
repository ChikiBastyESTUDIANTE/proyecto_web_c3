<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Cuenta;
use App\Models\Imangen;
use App\Models\Perfil;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;

class InicioController extends Controller
{
    public function login(){
        return view('login.login');
    }

    public function inicio(Request $request)
    {
        $user = $request->user;
        $contrasena = $request->contrasena;

        if(Auth::attempt(['user'=>$user,'password'=>$contrasena])){
            $cuentaLogeada = Cuenta::where('user',$user)->first();
            if($cuentaLogeada->perfil_id = 1){ //Si es admin
                $cuentas = Cuenta::all();
                $perfiles = Perfil::all();
                return view('Admin.listar_perfiles', compact(['cuentaLogeada','cuentas','perfiles']));
            }
        }

        return back()->withErrors([
            'user' => 'Error!',
        ])->onlyInput('user');
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
