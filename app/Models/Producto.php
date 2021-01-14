<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Categoria;
class Producto extends Model
{
    //
    protected $fillable = ['nombre_producto', 'precio','inStock','categoria_id'];
    public $timestamps = true;
    protected $hidden = ['created_at', 'updated_at'];

    public function categoria () 
    {
        return $this->belongsTo(Categoria::class);

    }
}
