<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

class ClasesController extends Controller
{

    public function __construct()
    {
        $this->middleware('can:esAdmin')->only('create','show');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $usuario = Auth::user();
        $clases = DB::select("SELECT clase.idclase, clase.nombre_clase, clase.cupos, usuario.nombre, usuario.apellido, horario.dia, horario.hora_inicio, horario.hora_fin
        FROM clase 
        JOIN profesor ON profesor.idprofesor = clase.idprofesor 
        JOIN usuario ON profesor.idusuario = usuario.id
        JOIN horario ON clase.idclase = horario.idclase WHERE profesor.estado='activo'");
        return view('clases/clases', [
            "clases" => $clases,
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
        $profesores = DB::select("SELECT usuario.id, usuario.nombre, usuario.apellido FROM usuario WHERE usuario.rol = 3");
        return view('clases/clase',[
            'profesores' => $profesores,
            "usuario" => $usuario
        ]);
    }

    public function anotarse($id)
    {
        $cupos = DB::select("SELECT cupos FROM clase WHERE clase.idclase ='$id'")[0];
        DB::update('UPDATE clase SET cupos = ? where clase.idclase = ?',[
            max(($cupos->cupos)-1, 0),
            $id
        ]);

        return redirect(route('clases.index'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
            $iduser = $request->post('id');
            $idProfesor = DB::select("SELECT idprofesor FROM profesor WHERE profesor.idusuario = '$iduser'")[0];
        try {
            DB::transaction(function() use ($request,$idProfesor){
                DB::insert('INSERT INTO clase (nombre_clase, idprofesor, cupos) values (?,?,?)',[
                    $request->post('nombre_clase'),
                    $idProfesor->idprofesor,
                    $request->post('cupos')
                ]);
            });
        } 
        catch (\Exception $exception){         
            echo $exception->getMessage();  
        }
          $nombreclase = $request->post('nombre_clase');
          $idclase = DB::select("SELECT idclase FROM clase WHERE clase.nombre_clase = '$nombreclase'")[0];
          try {
            DB::transaction(function() use ($request,$idclase){
                DB::insert('INSERT INTO horario (dia, hora_inicio, hora_fin, idclase) values (?,?,?,?)',[
                    $request->post('dia'),
                    $request->post('hora_inicio'),
                    $request->post('hora_fin'),
                    $idclase->idclase
                ]);
            });
        } 
        catch (\Exception $exception){         
            echo $exception->getMessage();  
        }

        return redirect(route('clases.index'));
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
        $clase = DB::selectOne("SELECT clase.idclase, clase.nombre_clase, clase.cupos, usuario.nombre, usuario.apellido, horario.dia, horario.hora_inicio, horario.hora_fin, usuario.id
        FROM clase 
        JOIN profesor ON profesor.idprofesor = clase.idprofesor 
        JOIN usuario ON profesor.idusuario = usuario.id
        JOIN horario ON clase.idclase = horario.idclase WHERE profesor.estado='activo' and clase.idclase={$id}");
        $profesores = DB::select("SELECT usuario.id, usuario.nombre, usuario.apellido FROM usuario WHERE usuario.rol = 3");
        return view('clases/clase',[
            'clase' => $clase,
            'profesores' => $profesores,
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
