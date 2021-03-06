<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        
        DB::table('users')->insert(array(
            array(
                'name' => 'Alberto',
                'email' => 'matu@gmail.com',
                'password' => hash::make('Alb3rt0'),
                'role_id' => '1',
            ),
            array(
                'name' => 'Eduardo',
                'email' => 'cadena@gmail.com',
                'password' => hash::make('C4d3n4'),
                'role_id' => '1',
            ),
            array(
                'name' => 'Francisco',
                'email' => 'paco@gmail.com',
                'password' => hash::make('Fr4nc1sc0'),
                'role_id' => '1',
            ),
            array(
                'name' => 'Alberto',
                'email' => 'matu@gmailasd.com',
                'password' => hash::make('Alb3rt0'),
                'role_id' => '2',
            ),
            array(
                'name' => 'Eduardo',
                'email' => 'cadena@gmaasdil.com',
                'password' => hash::make('C4d3n4'),
                'role_id' => '2',
            ),
            array(
                'name' => 'Francisco',
                'email' => 'paco@gmaasdil.com',
                'password' => hash::make('Fr4nc1sc0'),
                'role_id' => '2',
            ),
        ));
    }
}
