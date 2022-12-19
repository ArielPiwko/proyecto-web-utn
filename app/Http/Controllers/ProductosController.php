<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ProductosController extends Controller
{

    public function productos(){
        return view('productos');
    }

public function mostrar($id)
    {
        $productos =  DB::selectOne("select * from gymriachuelo.producto where idproducto = :id", ["id" => $id]);
        $imagen =  DB::selectOne("select url from gymriachuelo.imagen where idproducto = :id", ["id" => $id]);

        return view("mostrarp", [
            "productos" => $productos, "imagen" => $imagen
        ]);


    }


}


