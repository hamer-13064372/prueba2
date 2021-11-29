<?php

namespace App\Http\Controllers;

use App\Models\Factura;
use App\Models\DetFactura;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class FacturaController extends Controller
{
    //
     public function store(Request $request) {
      try {
          DB::beginTransaction();

          $fecha=Carbon::now('America/Bogota');
          
          $fact= new Factura();
          $fact->id_cliente=$request->idCliente;
          $fact->fecha=$fecha;
          $fact->valor_pago=$request->valorPago;
          $fact->forma_pago=$request->formaPago;
          $fact->iva=$request->iva;
          $fact->estado=$request->edo;

          $fact->save();

          $detalles=$request->data;

          foreach($detalles as $ep=>$det) {
            $detalle= new DetFactura();
             
            $detalle->id_fact=$fact->id;
            $detalle->id_prod=$det['idprod'];
            
            $detalle->precio=$det['precio'];
            $detalle->cant=$det['cant'];
            $detalle->fecha=$det['fecha'];
            $detalle->total=$det['total'];

            $detalle->save();

          }

          DB::commit();
      } catch (Exception $e) {
         DB::rollBack(); 
      } 
        
     }


    

    
    
}
