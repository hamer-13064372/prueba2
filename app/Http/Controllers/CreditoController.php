<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Credito;

class CreditoController extends Controller
{
    //

    public function index() {
     $cred= Credito::join('clientes','creditos.id_clien','=','clientes.id')
     ->select('productos.valor','clientes.nombre as clientes')->get();
     
     return ['cred'=>$cred];
    }

    public function store(Request $request) {
        $cred= new Credito();
        $cred->valor=$request->valor;
        $cred->estado=$request->edo;

        $cred->id_clien=$request->idClien;

        $cred->save();
    }
   
    
}
