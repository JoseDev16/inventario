<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Producto;

class Bodega extends Model
{
    //

    public function productos()
    {
        return $this->belongsToMany(Producto::class, 'producto_bodegas', 'bodega_id', 'producto_id')->withPivot('area', 'cantidad');

    }
}
