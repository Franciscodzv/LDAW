<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Hash;

class PrivilegeRolSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('privileges_roles')->insert(array(
            array(
                'role_id' => '1',
                'privilege_id' => '1',
            ),
            array(
                'role_id' => '1',
                'privilege_id' => '2',
            ),
            array(
                'role_id' => '1',
                'privilege_id' => '3',
            ),
        ));
    }
}
