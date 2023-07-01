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
        if(auth()->user()->perfil_id == 1){
        $cuentas = Cuenta::all();
        $perfiles = Perfil::all();
        return view('admin.listar_perfiles',compact(['perfiles','cuentas']));
        }else{
            return redirect()->route('logout');
        }
    }

    public function imagenes(){
        if(auth()->user()->perfil_id == 1){
        $imagenes = Imagen::all();
        return view('admin.banear_desbanear',compact('imagenes'));
        }else{
            return redirect()->route('logout');
        }
    }

    public function eliminar(Cuenta $cuenta){
        if(auth()->user()->perfil_id == 1){
        $imagenesEliminadas = Imagen::where('cuenta_user',$cuenta->user)->get();
        foreach($imagenesEliminadas as $imagenEliminada){
            $imagenEliminada->delete();
        }
        $cuenta->delete();
        return redirect()->route('admin.listarPerfiles');
        }else{
            return redirect()->route('logout');
        }
    }

    public function modificar(Cuenta $cuenta){
        if(auth()->user()->perfil_id == 1){
        return view('admin.modificar_cuenta',compact('cuenta'));
        }else{
            return redirect()->route('logout');
        }
    }

    public function modificarConfirmado(Cuenta $cuenta,Request $request){
        if(auth()->user()->perfil_id == 1){
        $cuenta->user = $request->nombreUsuarioM;
        $cuenta->nombre = $request->nombreM;
        $cuenta->apellido = $request->apellidoM;
        $cuenta->save();
        return redirect()->route('admin.listarPerfiles');
        }else{
            return redirect()->route('logout');
        }
    }
}
