<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class LoginController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('registro/registro');
    }

    public function registro(Request $request){
        DB::insert('INSERT INTO usuario (username, password) values (?, ?)',[
            $request->post('username'),
            Hash::make($request->post('password'))
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        if(Auth::attempt([
            'username' => $request->post('username'),
            'password' => $request->post('password')
        ])){
            $request->session()->regenerate();
            
            return redirect()->intended(route('index'));
    }
        else {
            return back()->withErrors([
                'username' => 'El nombre de usuario no existe en la base de datos',
                'password' => 'la contraseña no coincide con el nombre de usuario proporcionado'
            ]);
        }

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request)
    {
        $request->session()->invalidate();
        return redirect(route('index'));
    }
}
