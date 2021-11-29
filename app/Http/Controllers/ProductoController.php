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
        $producto->cod_prod=$request->codProd;
        $producto->nombre=$request->nombre;
        $producto->precio=$request->precio;
        $producto->cantidad=$request->cant;
        $producto->tipo_ser=$request->tipoServ;
        $producto->stock=$request->stock;
        $producto->fecha_venc=$request->fecVenc;
        $producto->estado=$request->edo;

        $producto->save();
    }

    public function update(Request $request) {
        $producto= Producto::findOrFail($request->id);
        $producto->cod_prod=$request->codProd;
        $producto->nombre=$request->nombre;
        $producto->precio=$request->precio;
        $producto->cantidad=$request->cant;
        $producto->tipo_serv=$request->tipoServ;
        $producto->stock=$request->stock;
        $producto->fecha_venc=$request->fecVenc;
        $producto->estado=$request->edo;

        $producto->save();

    }

    public function destroy(Request $request) {
        $producto= Producto::findOrFail($request->id);
        $producto->delate();
    }

    public function getProducto(Request $request) {
        $edo=$request->edo;
        $producto= Producto::select('id','nombre')->where('estado',$edo)->get();

        return ['prod'=>$producto];
    }
}
