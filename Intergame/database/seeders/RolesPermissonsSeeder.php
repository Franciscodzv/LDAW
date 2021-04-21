<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Hash;

class RolesPermissonsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('roles_permissions')->insert(array(
            array(
                'id_role' => '1',
                'id_permission' => '1',
            ),
            array(
                'id_role' => '1',
                'id_permission' => '2',
            ),
            array(
                'id_role' => '1',
                'id_permission' => '3',
            ),
        ));
    }
}
