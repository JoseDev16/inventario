<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    //

    public function index ()
    {
        $usuarios = User::where('estado','Activo')->get();

        return view('users.index', \compact("usuarios"));

    }

    public function store(Request $request) 
    {
        $this->validate($request,
        [
            'email'=> 'required|unique:users,email'
        ]);
        $pass = $request->password ;

        $request['password']= Hash::make($pass);
            //dd($request);
        
        User::create($request->all());

        return redirect()->route('usuario.index');
    }

    public function edit_view(Request $request,$id)
    {
       // if($request->ajax()){
            $user = User::find($id);
            return response()->json($user);
        //}

    }

    public function destroy(Request $request)
    {
         $id = $request->delete_id;
         $usuario = User::find($id);
         $usuario->estado = "Inactivo";
         $usuario->update();
         return redirect()->route('usuario.index');

    }

}
