<?php

namespace App\Http\Controllers;

use App\RegistroUsuarios;
use App\Registro;
use Illuminate\Http\Request;

class RegistroUsuariosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //return view('RegistroUsuarios.RegistroUsuarios');

         return response()->view('RegistroUsuarios.RegistroUsuarios');

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        /*  $info = request()->except('_token');
            return response()->json($info);
            RegistroUsuarios::insert($info);
        */

        $usuario = $request->input('usuario');
        $mail = $request->input('mail');
        $pass = $request->input('pass');
        $registro = new Registro;
        $registro-> usuario = $usuario;
        $registro-> mail = $mail;
        $registro-> pass = $pass;
        $registro-> save();




    }

    /**
     * Display the specified resource.
     *
     * @param  \App\RegistroUsuarios  $registroUsuarios
     * @return \Illuminate\Http\Response
     */
    public function show(RegistroUsuarios $registroUsuarios)
    {
        
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\RegistroUsuarios  $registroUsuarios
     * @return \Illuminate\Http\Response
     */
    public function edit(RegistroUsuarios $registroUsuarios)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\RegistroUsuarios  $registroUsuarios
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, RegistroUsuarios $registroUsuarios)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\RegistroUsuarios  $registroUsuarios
     * @return \Illuminate\Http\Response
     */
    public function destroy(RegistroUsuarios $registroUsuarios)
    {
        //
    }
}
