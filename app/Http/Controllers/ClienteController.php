<?php

namespace App\Http\Controllers;

use App\Models\Cliente;


use Illuminate\Http\Request;

class ClienteController extends Controller
{
    //
    public function index() {
        $cliente= Cliente::all();

        return ['clien'=>$cliente];
    }
        



    public function store(Request $request) {
        $cliente= new Cliente;
        $cliente->tp_doc=$request->tp_doc;
        $cliente->num_doc=$request->num_doc;
        $cliente->nombres=$request->nombres;
        $cliente->telefono=$request->telefono;
        $cliente->dieccion=$request->direccion;
        $cliente->email=$request->email;
        $cliente->estado=$request->edo;

        $cliente->save();
    }

    public function update(Request $request) {
        $cliente= Cliente::findOrFail($request->id);
        $cliente->tp_doc=$request->tp_doc;
        $cliente->num_doc=$request->num_doc;
        $cliente->nombres=$request->nombres;
        $cliente->telefono=$request->telefono;
        $cliente->dieccion=$request->direccion;
        $cliente->email=$request->email;
        $cliente->estado=$request->edo;

        $cliente->save();
    }

    public function destroy(Request $request) {
       $cliente= Cliente::findOrFail($request->id);
       $cliente->delate();
    }
}
