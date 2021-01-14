<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Producto;

class ProductoController extends Controller
{
    //

    public function index()
    {
        $producto = Producto::all();
        return view('producto.index', \compact("producto"));


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
            'nombre_producto'=> 'required|max:10|unique:productos,nombre_producto'
        ]);

            Producto::create($request->all());
        return response("registro creado", 201);



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



}
