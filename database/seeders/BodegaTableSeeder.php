<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use DB;

class BodegaTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('bodegas')->insert([
            'nombre_bodega' => 'Bodega A'
        
            
        ]);

      
    }
}
