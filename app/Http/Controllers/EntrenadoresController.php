<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\ValidationException;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;

class EntrenadoresController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $usuario = Auth::user();
        $entrenadores = DB::select("SELECT * FROM usuario JOIN entrenador_personal ON entrenador_personal.idusuario = usuario.id WHERE usuario.rol=2 and entrenador_personal.estado='activo'");
        //dd($entrenadores);
        return view('entrenadores/entrenadores', [
            "entrenadores" => $entrenadores,
            "usuario" => $usuario
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $usuario = Auth::user();
        return view('entrenadores/entrenador',[
            "usuario" => $usuario
        ]);
    }

    private function validar(Request $request)
    {
        return Validator::make($request->post(), [
            'username' => ['required'],
            'nombre' => ['required','alpha'],
            'apellido' => ['required','alpha'],
            'salario' => ['required']
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
        $hashedUsername = Hash::make($request->post("username"));
        try {
           DB::transaction(function() use ($request, $hashedUsername){
               DB::insert('INSERT INTO usuario (username, password, nombre, apellido, email, fecha_de_nacimiento, telefono, rol) values (?, ?, ?, ?, ?, ?, ?, ?)',[
                   $request->post("username"),
                   $hashedUsername,
                   $request->post("nombre"),
                   $request->post("apellido"),
                   $request->post("email"),
                   $request->post("fecha_de_nacimiento"),
                   (int) $request->post("telefono"),
                   2
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
               DB::insert('INSERT INTO entrenador_personal (idusuario, fecha_ingreso, salario, estado) values (?, ?, ?, ?)',[
                   $idUser->id,
                   $request->post('fecha_ingreso'),
                   $request->post('salario'),
                   "activo"
               ]);
           });
          return redirect(route('entrenadores.index'));
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
        $usuario = Auth::user();
        $entrenador = DB::selectOne("SELECT * FROM usuario 
        JOIN entrenador_personal ON usuario.id = entrenador_personal.idusuario
        WHERE usuario.rol=2 AND entrenador_personal.estado='activo' AND entrenador_personal.idusuario = '$id'");
        return view('entrenadores/entrenador',[
            'entrenador' => $entrenador,
            "usuario" => $usuario
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
               DB::update('UPDATE usuario SET nombre = ?, apellido = ?, email = ?, fecha_de_nacimiento = ?, telefono = ? where id = ?',[
                   $request->post("nombre"),
                   $request->post("apellido"),
                   $request->post("email"),
                   $request->post("fecha_de_nacimiento"),
                   (int) $request->post("telefono"),
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

       $idEntrenador = (DB::select("SELECT identrenador_personal FROM entrenador_personal WHERE entrenador_personal.idusuario = $id"))[0];

       try{      
       DB::transaction(function() use ($request, $idEntrenador){
           DB::update('UPDATE entrenador_personal SET salario = ?, fecha_ingreso = ? where identrenador_personal = ? AND estado = ?',[
               $request->post("salario"),
               $request->post("fecha_ingreso"),
               $idEntrenador->identrenador_personal,
               "activo"
           ]);

       }); 
       return redirect(route('entrenadores.index'));
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
        $idEntrenador = (DB::select("SELECT identrenador_personal FROM entrenador_personal WHERE entrenador_personal.idusuario = $id"))[0];
         try{
        DB::transaction(function() use ($idEntrenador){
            DB::update("UPDATE entrenador_personal SET estado = 'inactivo' 
            WHERE entrenador_personal.identrenador_personal = $idEntrenador->identrenador_personal AND entrenador_personal.estado = 'activo';");
        });
    }catch(\Exception $exception){
        echo "error";
    }
    return redirect(route('entrenadores.index'));
    }
}
