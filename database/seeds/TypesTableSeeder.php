<?php

use Illuminate\Database\Seeder;

class TypesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('types')->insert(array(
            'name' => 'Serie'
        ));

        DB::table('types')->insert(array(
            'name' => 'Película'
        ));

        DB::table('types')->insert(array(
            'name' => 'Novela'
        ));

        DB::table('types')->insert(array(
            'name' => 'Documental'
        ));
    }
}
