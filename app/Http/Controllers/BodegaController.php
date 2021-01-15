<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Producto;

class BodegaController extends Controller
{
    //

    public function productos()
    {
        return $this->hasMany(Producto::class);
    }
}

