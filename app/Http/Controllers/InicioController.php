<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class InicioController extends Controller
{
    public function inicio(){
        $usuario = Auth::user();
        return view('inicio',[
            "usuario" => $usuario
        ]);
    }
}


