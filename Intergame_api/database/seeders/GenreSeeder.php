<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class GenreSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('genres')->insert(array(
            array(
                'name' => 'Action',
            ),
            array(
                'name' => 'Adventure',
            ),
            array(
                'name' => 'RPG',
            ),
            array(
                'name' => 'Simulation',
            ),
            array(
                'name' => 'Racing',
            ),
        ));
    }
}
