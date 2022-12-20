<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

class ProductosController extends Controller
{

    public function productos(){
        $usuario = Auth::user();
        return view('productos',[
            "usuario" => $usuario
        ]);
    }

public function mostrar($id)
    {
        $usuario = Auth::user();
        $productos =  DB::selectOne("select * from gymriachuelo.producto where idproducto = :id", ["id" => $id]);
        $imagen =  DB::selectOne("select url from gymriachuelo.imagen where idproducto = :id", ["id" => $id]);

        return view("mostrarp", [
            "productos" => $productos,
            "imagen" => $imagen,
            "usuario" => $usuario
        ]);


    }


}


