<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\ValidationException;

class ClientesController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $clientes = DB::select("SELECT * FROM usuario JOIN cliente ON cliente.idusuario = usuario.id JOIN suscripcion ON suscripcion.idcliente = cliente.idcliente WHERE usuario.rol=1 and suscripcion.estado='activo'");
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

    
    private function validar(Request $request)
    {
        return Validator::make($request->post(), [
            'username' => ['required'],
            'nombre' => ['required','alpha'],
            'apellido' => ['required','alpha']
        ])->validate();
    }


    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validar($request);
         try {
            DB::transaction(function() use ($request){
                DB::insert('INSERT INTO usuario (username, password, nombre, apellido, email, fecha_de_nacimiento, telefono, rol) values (?, ?, ?, ?, ?, ?, ?, ?)',[
                    $request->post("username"),
                    "test",
                    $request->post("nombre"),
                    $request->post("apellido"),
                    $request->post("email"),
                    $request->post("fecha_de_nacimiento"),
                    (int) $request->post("telefono"),
                    1
                ]);
            });
        } 
        catch(ValidationException $ex){
            //return redirect(route('clientes.create'));
        }
        catch (\Exception $exception){         
            echo $exception->getMessage();  
        }

            $user = $request->post("username");

            $idUser = (DB::select("SELECT id FROM usuario WHERE usuario.username = '$user'"))[0];

        try{
            DB::transaction(function() use ($request, $idUser){
                DB::insert('INSERT INTO cliente (idusuario) values (?)',[
                    $idUser->id
                ]);
            });
    
        }
        catch (\Exception $exception){
            echo $exception->getMessage();  
        }    

        $idCliente = (DB::select("SELECT idcliente FROM cliente WHERE cliente.idusuario = $idUser->id"))[0];

        $rango = 0;
        if(($request->post("rango_de_suscripcion") == "classic")){$rango = 1;}
        if(($request->post("rango_de_suscripcion") == "pro")){$rango = 2;}
        if(($request->post("rango_de_suscripcion") == "premium")){$rango = 3;}

        try{      
        DB::transaction(function() use ($request, $idCliente, $rango){
            DB::insert('INSERT INTO suscripcion (idcliente,fecha_de_ingreso,periodo,estado,idnivel) values (?,?,?,?,?)',[
                $idCliente->idcliente,
                $request->post("fecha_de_ingreso"),
                (int) $request->post("periodo"),
                "activo",
                $rango
            ]);

        }); 
        return redirect(route('clientes.index'));
        }
        catch (\Exception $exception){
            echo $exception->getMessage();  
        }   

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
        $this->validar($request);
         try {
            DB::transaction(function() use ($request, $id){
                DB::update('UPDATE usuario SET username = ?, password = ?, nombre = ?, apellido = ?, email = ?, fecha_de_nacimiento = ?, telefono = ?, rol = ? where id = ?',[
                    $request->post("username"),
                    "test",
                    $request->post("nombre"),
                    $request->post("apellido"),
                    $request->post("email"),
                    $request->post("fecha_de_nacimiento"),
                    (int) $request->post("telefono"),
                    1,
                    $id
                ]);
            });
        } 
        catch(ValidationException $ex){
            //return redirect(route('clientes.create'));
        }
        catch (\Exception $exception){         
            echo $exception->getMessage();  
        }

        $idCliente = (DB::select("SELECT idcliente FROM cliente WHERE cliente.idusuario = $id"))[0];

        $rango = 0;
        if(($request->post("rango_de_suscripcion") == "classic")){$rango = 1;}
        if(($request->post("rango_de_suscripcion") == "pro")){$rango = 2;}
        if(($request->post("rango_de_suscripcion") == "premium")){$rango = 3;}

        try{      
        DB::transaction(function() use ($request, $idCliente, $rango){
            DB::update('UPDATE suscripcion SET idcliente = ?, fecha_de_ingreso = ?, periodo = ?, estado = ?, idnivel = ? where idcliente = ? AND estado = ?',[
                $idCliente->idcliente,
                $request->post("fecha_de_ingreso"),
                (int) $request->post("periodo"),
                "activo",
                $rango,
                $idCliente->idcliente,
                "activo"
            ]);

        }); 
        return redirect(route('clientes.index'));
        }
        catch (\Exception $exception){
            echo $exception->getMessage();  
        }   



    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $idCliente = (DB::select("SELECT idcliente FROM cliente WHERE cliente.idusuario = $id"))[0];
         try{
        DB::transaction(function() use ($idCliente){
            DB::update("UPDATE suscripcion SET estado = 'inactivo' WHERE suscripcion.idcliente = $idCliente->idcliente AND suscripcion.estado = 'activo';");
        });
    }catch(\Exception $exception){
        echo "error";
    }
    return redirect(route('clientes.index'));
    }
}
