<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Producto;
use App\Models\Bodega;
use DB;

class BodegaController extends Controller
{
    //

    public function index ()
    {
        
        $productos = DB::table('producto_bodegas')
            ->join('productos','productos.id', '=', 'producto_bodegas.producto_id')
            ->join('bodegas','bodegas.id', '=', 'producto_bodegas.bodega_id')
            ->select('productos.sku','productos.nombre_producto', 'productos.precio',
                        'bodegas.nombre_bodega','producto_bodegas.cantidad','producto_bodegas.area')->get();
                       // dd($productos);
        
        return view('bodega.index', \compact("productos"));
    }
}

