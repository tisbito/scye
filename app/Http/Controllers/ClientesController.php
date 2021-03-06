<?php

namespace App\Http\Controllers;

use App\Cliente;
use App\Estados;
use App\TipoIdentificacion;
use Illuminate\Http\Request;
use DB;
use Http;

class ClientesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $array_clientes = Cliente::all();
        $infoClientes = array("array_clientes" => $array_clientes); 
        return view('Clientes.Home', $infoClientes);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()

    {
        $departamentos = Http::get('https://www.datos.gov.co/resource/xdk5-pm3f.json');
        $listadoDepart = $departamentos->json();
        $tipoDocumento = TipoIdentificacion::all();
        return view('Clientes.Registro', compact( 'tipoDocumento','listadoDepart'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {      
        $tipoid = $request->input('tipodocumento');
        $estado = 1;
        $documento = $request->input('documento');
        $nombres = $request->input('nombres');
        $direccion = $request->input('direccion');
        $mail = $request->input('mail');
        $ciudad= $request->input('ciudad');
        var_dump($ciudad);
        $telefono = $request->input('telefono');
        $numEmpleados = $request->input('numEmpleados');
        $user = $request->input('usuario');
        $pass = $request->input('pass');
        $pass = password_hash($pass , PASSWORD_DEFAULT);

        $cliente = new Cliente;
        $cliente-> idTipoIdFk = $tipoid;
        $cliente-> idEstadoIdFk = $estado;
        $cliente-> identificacion = $documento;
        $cliente-> nombreCliente = $nombres;
        $cliente-> direccion = $direccion;
        $cliente-> correo = $mail;
        $cliente-> ciudad = $ciudad;
        $cliente-> telefono = $telefono ;
        $cliente-> numEmpleados = $numEmpleados;
        $cliente-> userName = $user;
        $cliente-> pass = $pass;
        $cliente-> save();

        return redirect()->route('Clientes.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Cliente  $clientes
     * @return \Illuminate\Http\Response
     */
    public function show(Clientes $clientes)
    {
        
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Cliente  $clientes
     * @return \Illuminate\Http\Response
     */
    public function edit($Clientes_id)
    {
        $Clientes = Cliente::find($Clientes_id);
        return view('Clientes.Editar', compact('Clientes'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Cliente  $clientes
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Clientes $clientes)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Cliente  $clientes
     * @return \Illuminate\Http\Response
     */
    public function destroy(Clientes $clientes)
    {
        //
    }
}
