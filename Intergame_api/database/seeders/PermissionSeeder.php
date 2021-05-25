<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Hash;

class PermissionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('permissions')->insert(array(
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
