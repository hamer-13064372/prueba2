<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Producto;

class ProductoController extends Controller
{
    // 

    public function index() {
        $producto= Producto::all();

        return ['prod'=>$producto];
    }

    public function store(Request $request) {
        $producto= new Producto();
        $producto->cod_producto=$request->cod_prod;
        $producto->nombre=$request->nombre;
        $producto->precio=$request->precio;
        $producto->cantidad=$request->cant;
        $producto->tipo_servicio=$request->tipo_serv;
        $producto->stock=$request->stock;
        $producto->fecha_vencimiento=$request->fec_venc;
        $producto->estado=$request->edo;

        $producto->save();
    }

    public function update(Request $request) {
        $producto= Producto::findOrFail($request->id);
        $producto->cod_producto=$request->cod_prod;
        $producto->nombre=$request->nombre;
        $producto->precio=$request->precio;
        $producto->cantidad=$request->cant;
        $producto->tipo_servicio=$request->tipo_serv;
        $producto->stock=$request->stock;
        $producto->fecha_vencimiento=$request->fec_venc;
        $producto->estado=$request->edo;

        $producto->save();

    }

    public function destroy(Request $request) {
        $producto= Producto::findOrFail($request->id);
        $producto->delate();
    }
}
