<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use DB;
class ProductoBodegaTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('producto_bodegas')->insert([
            'producto_id' => 1,
            'bodega_id' => 1,
            'area' => 'Electronicos',
            'cantidad' => 100
        
            
        ]);
    }
}

