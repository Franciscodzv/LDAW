<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Hash;

class PrivilegeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('privileges')->insert(array(
            array(
                'description' => 'user:update',
            ),
            array(
                'description' => 'genre:write',
            ),
            array(
                'descripcion' => 'title:write',
            ),
        ));
    }
}
