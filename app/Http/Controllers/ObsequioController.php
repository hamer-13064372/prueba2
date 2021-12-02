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

        
        $obsequio= new Obsequio();
        $obsequio->fecha=$request->fecha;
        $obsequio->valor_obs=$request->valorObs;
        $obsequio->estado=$request->edo;

        $obsequio->id_prod=$request->idProducto;

        $obsequio->save();
    } 
    
}
