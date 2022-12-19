<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LoginController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('login');
    }


    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //

        if(Auth::attempt([
            'nombre' => $request->post('usuario')
            'contrasenia' => $request->post('contrasenia')
            
        ])){
            $request->session()->regenerate();
            
            return redirect()->intended(route('index.blade.php'));
    }
        else {
            return back()->withErrors([
                'nombre' => 'El email/nombre de usuario no existe en la base de datos',
                'contrasenia' => 'la contrasenia no coincide con el email/nombre de usuario proporcionado'
            ])
            //NO COINCIDE NOMBRE DE USUARIO Y/O CONTRASENIA
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
        //
    }
}
