<?php

namespace App\Http\Controllers;

use App\RegistroUsuarios;
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
        return view('RegistroUsuarios.RegistroUsuarios');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
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
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\RegistroUsuarios  $registroUsuarios
     * @return \Illuminate\Http\Response
     */
    public function show(RegistroUsuarios $registroUsuarios)
    {
        //
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
