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
                'genre_id' => '1',
                'title_id' => '1',
            ),
            array(
                'genre_id' => '2',
                'title_id' => '2',
            ),
            array(
                'genre_id' => '3',
                'title_id' => '3',
            ),
            array(
                'genre_id' => '4',
                'title_id' => '4',
            ),
            array(
                'id_genre' => '5',
                'title_id' => '5',
            ),
        ));
    }
}
