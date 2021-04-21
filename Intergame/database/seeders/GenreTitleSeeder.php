<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Hash;

class GenreTitleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('genres_titles')->insert(array(
            array(
                'id_genre' => '1',
                'id_title' => '1',
            ),
            array(
                'id_genre' => '2',
                'id_title' => '2',
            ),
            array(
                'id_genre' => '3',
                'id_title' => '3',
            ),
            array(
                'id_genre' => '4',
                'id_title' => '4',
            ),
            array(
                'id_genre' => '5',
                'id_title' => '5',
            ),
        ));
    }
}
