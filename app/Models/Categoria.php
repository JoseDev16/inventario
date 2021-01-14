<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Producto;

class Categoria extends Model
{
    //
    protected $fillable =  ['nombre_categoria'];
    protected $hidden = ['created_at', 'updated_at'];

    public function productos()
    {
        return $this->hasMany(Producto::class);

    }
}
