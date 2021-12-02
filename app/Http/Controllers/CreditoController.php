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
        $credito= new Credito();
        $credito->valor=$request->valor;
        $credito->estado=$request->edo;

        $credito->id_clien=$request->idClien;

        $credito->save();
    }
   
    
}
