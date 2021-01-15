<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Categoria;
use App\Models\Bodega;
class Producto extends Model
{
    //
    protected $fillable = ['nombre_producto', 'precio','inStock','sku'];
    public $timestamps = false;
    protected $hidden = ['created_at', 'updated_at'];

    public function bodegas()
    {
        return $this->belongsToMany(Bodega::class, 'producto_bodegas', 'producto_id', 'bodega_id');

    }
}
