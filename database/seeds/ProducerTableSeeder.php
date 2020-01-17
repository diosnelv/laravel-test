<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProducerTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('producers')->insert(array(
            'company' => 'Universal'
        ));

        DB::table('producers')->insert(array(
            'company' => 'Walt Disney'
        ));

        DB::table('producers')->insert(array(
            'company' => 'Marvel'
        ));

        DB::table('producers')->insert(array(
            'company' => 'DreamWorks'
        ));
    }
}
