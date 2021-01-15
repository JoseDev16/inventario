<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;


class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // $this->call('UsersTableSeeder');
        $this->call(ProductosTableSeeder::class);
        $this->call(UsersTableSeeder::class);
        $this->call(BodegaTableSeeder::class);
        $this->call(ProductoBodegaTableSeeder::class);
    }
}
