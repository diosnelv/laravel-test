<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class GenresTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('genres')->insert(array(
            'name' => 'Comedia'
        ));

        DB::table('genres')->insert(array(
            'name' => 'Drama'
        ));

        DB::table('genres')->insert(array(
            'name' => 'Terror'
        ));

        DB::table('genres')->insert(array(
            'name' => 'Acción'
        ));
    }
}
