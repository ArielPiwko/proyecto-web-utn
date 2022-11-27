<?php

namespace App\Http\Controllers;

use App\Models\Entities\Cliente;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ClientesController extends Controller
{
    //private $clientes = [];

    public function __construct()
    {
        /*$unCliente = new Cliente();
        $unCliente->setNombre("juan");
        $unCliente->setApellido("perez");
        $unCliente->setEmail("juanperez534@hotmail.com");
        $unCliente->setUsername("juanperez53");
        $unCliente->setId(1);

        $otroCliente = new Cliente();
        $otroCliente->setNombre("mario");
        $otroCliente->setApellido("balboa");
        $otroCliente->setEmail("mariobalboa@hotmail.com");
        $otroCliente->setUsername("mbalb514");
        $otroCliente->setId(2);

        $otroClientemas = new Cliente();
        $otroClientemas->setNombre("nahuel");
        $otroClientemas->setApellido("nunez");
        $otroClientemas->setEmail("nahuelnunez54@hotmail.com");
        $otroClientemas->setUsername("nnunez4");
        $otroClientemas->setId(3);

        array_push($this->clientes, $unCliente);
        array_push($this->clientes, $otroCliente);
        array_push($this->clientes, $otroClientemas);
        */
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $clientes = DB::select("SELECT * FROM usuario JOIN cliente ON cliente.idusuario = usuario.id JOIN suscripcion ON suscripcion.idcliente = cliente.idcliente WHERE usuario.rol=1 and suscripcion.estado='activo'");
        //dd($clientes);
        return view('clientes/clientes', [
            "clientes" => $clientes
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('clientes/cliente');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        echo "we goooooood";
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $cliente = DB::selectOne("SELECT * FROM usuario 
        JOIN cliente ON cliente.idusuario = usuario.id 
        JOIN suscripcion ON suscripcion.idcliente = cliente.idcliente 
        JOIN nivel_de_suscripcion ON nivel_de_suscripcion.idnivel_de_suscripcion = suscripcion.idnivel
        WHERE usuario.rol=1 and suscripcion.estado='activo' and usuario.id={$id}");
        return view('clientes/cliente',[
            'cliente' => $cliente
        ]);
    }
    

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
