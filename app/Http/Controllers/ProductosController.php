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
        $productos =  DB::selectOne("select * from gimnasio.productos where idProductos = :id", ["id" => $id]);
        
        return view("mostrarp", [
            "productos" => $productos
        ]);


    }

    public function prueba(){
        return view('prueba');
    }


}