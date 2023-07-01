<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Perfil;
use App\Models\Imagen;
use App\Models\Cuenta;

class AdminController extends Controller
{
    public function __construct(){
        $this->middleware('auth');
    }
    
    public function listarPerfiles(){
        $cuentas = Cuenta::all();
        $perfiles = Perfil::all();
        return view('admin.listar_perfiles',compact(['perfiles','cuentas']));
    }

    public function imagenes(){
        $imagenes = Imagen::all();
        return view('admin.banear_desbanear',compact('imagenes'));
    }

    public function eliminar(Cuenta $cuenta){
        $imagenesEliminadas = Imagen::where('cuenta_user',$cuenta->user)->get();
        foreach($imagenesEliminadas as $imagenEliminada){
            $imagenEliminada->delete();
        }
        $cuenta->delete();
        return redirect()->route('admin.listarPerfiles');
    }

    public function modificar(Cuenta $cuenta){
        return view('admin.modificar_cuenta',compact('cuenta'));
    }

    public function modificarConfirmado(Cuenta $cuenta,Request $request){
        $cuenta->user = $request->nombreUsuarioM;
        $cuenta->nombre = $request->nombreM;
        $cuenta->apellido = $request->apellidoM;
        $cuenta->save();
        return redirect()->route('admin.listarPerfiles');
    }
}
