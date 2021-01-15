<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use DB;

class ProductosTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('productos')->insert([
            'nombre_producto' => 'Celular',
            'sku' => '00001',
            'precio'  => 10,
            'inStock' => 1,
            
            
        ]);
    }
}
