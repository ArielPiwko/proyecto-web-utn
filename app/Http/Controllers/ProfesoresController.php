<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\ValidationException;
use Illuminate\Support\Facades\Hash;

class ProfesoresController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $profesores = DB::select("SELECT * FROM usuario JOIN profesor ON profesor.idusuario = usuario.id JOIN clase ON clase.idprofesor = profesor.idprofesor WHERE usuario.rol=3 and profesor.estado='activo'");
        //dd($profesores);
        return view('profesores/profesores', [
            "profesores" => $profesores
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('profesores/profesor');
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
                   3
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
               DB::insert('INSERT INTO profesor (idusuario, fecha_ingreso, salario, estado) values (?, ?, ?, ?)',[
                   $idUser->id,
                   $request->post('fecha_ingreso'),
                   $request->post('salario'),
                   "activo"
               ]);
           });
          // return redirect(route('profesores.index'));
       }
       catch (\Exception $exception){
           echo $exception->getMessage();  
       }    

       $idProfesor = (DB::select("SELECT idprofesor FROM profesor WHERE profesor.idusuario = $idUser->id"))[0];
       
       try{      
        DB::transaction(function() use ($request, $idProfesor){
            DB::insert('INSERT INTO clase (idprofesor,nombre_clase,cupos) values (?,?,?)',[
                $idProfesor->idprofesor,
                $request->post('nombre_clase'),
                $request->post('cupos')
            ]);

        }); 
        }
        catch (\Exception $exception){
            echo $exception->getMessage();  
        }   
        $nombreclase = $request->post('nombre_clase');
        $idclase = (DB::select("SELECT idclase FROM clase WHERE clase.nombre_clase = '$nombreclase' AND clase.idprofesor = '$idProfesor->idprofesor'"))[0];

        try{      
            DB::transaction(function() use ($request, $idclase){
                DB::insert('INSERT INTO horario (dia, hora_inicio, hora_fin, idclase) values (?,?,?,?)',[
                    $request->post('dia'),
                    $request->post('hora_inicio'),
                    $request->post('hora_fin'),
                    $idclase->idclase
                ]);
    
            }); 
                return redirect(route('profesores.index'));
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
        $profesor = DB::selectOne("SELECT * FROM usuario 
        JOIN profesor ON profesor.idusuario = usuario.id 
        JOIN clase ON clase.idprofesor = profesor.idprofesor
        WHERE usuario.rol=3 and profesor.estado='activo' and profesor.idusuario={$id}");
        return view('profesores/profesor',[
            'profesor' => $profesor
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
                    3,
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

        $idProfesor = (DB::select("SELECT idprofesor FROM profesor WHERE profesor.idusuario = $id"))[0];

        try{      
        DB::transaction(function() use ($request, $idProfesor){
            DB::update('UPDATE profesor SET salario = ?, fecha_ingreso = ? where idprofesor = ? AND estado = ?',[
                $request->post("salario"),
                $request->post("fecha_ingreso"),
                $idProfesor->idprofesor,
                "activo"
            ]);

        }); 
        return redirect(route('profesores.index'));
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
        $idProfesor = (DB::select("SELECT idprofesor FROM profesor WHERE profesor.idusuario = $id"))[0];
         try{
        DB::transaction(function() use ($idProfesor){
            DB::update("UPDATE profesor SET estado = 'inactivo' WHERE profesor.idprofesor = $idProfesor->idprofesor AND profesor.estado = 'activo';");
        });
    }catch(\Exception $exception){
        echo "error";
    }
    return redirect(route('profesores.index'));
    }
}
