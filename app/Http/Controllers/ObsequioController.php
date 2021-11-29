<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Obsequio;

class ObsequioController extends Controller
{
    //
   public function index() {
    $obseq= Obsequio::join('productos','obsequios.id_prod','=','obsequios.id')
    ->select('obsequio.fecha','obsequios.valor_obs','productos.nombe.as')->get();
    return ['obsq'=>$obseq];   
   }



    public function store(Request $request) {

        
        $obseq= new Obsequio();
        $obseq->fecha=$request->fecha;
        $obseq->valor_obs=$request->valorObs;
        $obseq->estado=$request->edo;

        $obseq->id_prod=$request->idProducto;

        $obseq->save();
    } 
    
}
