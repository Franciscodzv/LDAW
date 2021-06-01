<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();
        $this-> call(GenreSeeder::class);
        $this-> call(RolSeeder::class);
        $this-> call(PrivilegeSeeder::class);
        $this-> call(PrivilegeRolSeeder::class);
        $this-> call(UserSeeder::class);
        $this-> call(TitleSeeder::class);
        $this-> call(GenreTitleSeeder::class);
    }
}
