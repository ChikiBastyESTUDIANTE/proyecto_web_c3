<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class InicioController extends Controller
{
    public function login(){
        return view('login.login');
    }
    public function crearCuenta(){
        return view('login.crear_cuenta');
    }
}
