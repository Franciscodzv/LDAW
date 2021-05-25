<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Hash;
use Carbon\Carbon;

class ReviewSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
         
        DB::table('reviews')->insert(array(
            array(
                'description' => 'es muy bueno',
                'user_id' => '1',
                'title_id' => '1',
                'date' => Carbon::now(),
            ),
            array(
                'description' => 'es muy bueno',
                'user_id' => '2',
                'title_id' => '1',
                'date' => Carbon::now(),
            ),
            array(
                'description' => 'es muy bueno',
                'user_id' => '1',
                'title_id' => '1',
                'date' => Carbon::now(),
            ),
            array(
                'description' => 'es muy bueno',
                'user_id' => '3',
                'title_id' => '1',
                'date' =>Carbon::now(),
            ),
            array(
                'description' => 'es muy bueno',
                'user_id' => '4',
                'title_id' => '1',
                'date' => Carbon::now(),
            ),
            array(
                'description' => 'es muy bueno',
                'user_id' => '5',
                'title_id' => '1',
                'date' => Carbon::now(),
            ),
            array(
                'description' => 'es muy bueno',
                'user_id' => '6',
                'title_id' => '1',
                'date' => Carbon::now(),
            ),
        ));
    }
}
