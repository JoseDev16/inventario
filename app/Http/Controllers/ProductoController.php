<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Producto;
use App\Models\Bodega;
class ProductoController extends Controller
{
    //

    public function index()
    {
            $productos = Producto::all();
            $bodegas = Bodega::all();

            return view('producto.index', \compact("productos","bodegas"));


    }

    public function show($id)
    {
        $producto = Producto::findOrFail($id)->with('categoria')->get();
        return response($producto,201);

       // $producto = $producto->with('categorias');
       //return
    }

    public function create(Request $request)
    {
        $this->validate($request,
        [
            'sku'=> 'required|unique:productos,sku'
        ]);

            Producto::create($request->all());
            return redirect()->route('producto.index');



    }

    public function update(Request $request, $id)
    {
        $this->validate($request,
        [
            'nombre_producto'=> 'required|max:10|unique:productos,nombre_producto'
        ]);

            $producto = Producto::find($id);
            $producto->update($request->all());
            return response("Actuaizado",200);

    }

    public function delete($id)
    {
       Producto::destroy($id);

        return response("Eliminado",200);
    }

    public function bodega (Request $request)
    {
       // dd($request);
        $idProducto = $request->producto_id2;
        $producto = Producto::find($idProducto);
        //dd($producto);
        $bodega_id = $request->bodega_id;
        $bodega = Bodega::findOrFail($bodega_id);
        $producto->bodegas()->attach($bodega, ['area' => $request->area,'cantidad' => $request->cantidad]); 

        return redirect()->route('producto.index');
        

    }



}
