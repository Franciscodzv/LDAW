<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Hash;

class TitleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('titles')->insert(array(
            array(
                'name'=> 'call of duty',
                'description'=> 'Call of Duty: Modern Warfare is a 2019 first-person shooter video game developed by Infinity Ward and published by Activision.',
                'image'=> 'https://upload.wikimedia.org/wikipedia/en/thumb/e/e9/CallofDutyModernWarfare%282019%29.jpg/220px-CallofDutyModernWarfare%282019%29.jpg'
            ),
            array(
                'name' => 'Super Mario Odyssey',
                'description' => 'Super Mario Odyssey is a 2017 platform game developed and published by Nintendo for the Nintendo Switch.',
                'image' => 'https://upload.wikimedia.org/wikipedia/en/8/8d/Super_Mario_Odyssey.jpg',
            ),
            array(
                'name' => 'Fallout 4',
                'description' => 'Fallout 4 is an action role-playing game developed by Bethesda Game Studios and published by Bethesda Softworks. It is the fourth main game in the Fallout series and was released worldwide on November 10, 2015, for Microsoft Windows, PlayStation 4 and Xbox One.',
                'image' => 'https://upload.wikimedia.org/wikipedia/en/7/70/Fallout_4_cover_art.jpg',
            ),
            array(
                'name' => '1-2-Switch',
                'description' => '1-2-Switch is a party game developed and published by Nintendo as a launch title for the Nintendo Switch, which was released worldwide on March 3, 2017. The game extensively uses the system\'s Joy-Con controllers, with players facing each other performing various minigames.',
                'image' => 'https://lh3.googleusercontent.com/vnzNT53RZ5thfAZZVQ9M_HAgBOsKEyJZGfqe1v0NmpCcF5-GckV-xpxLUADUeDCAlK1OJMsgNF2EbKx1fABy9LrluQ',
            ),
            array(
                'name' => 'Forza Horizon 4',
                'description' => 'Forza Horizon 4 is a 2018 racing video game developed by Playground Games and published by Microsoft Studios. It was released on 2 October 2018 on Xbox One and Microsoft Windows after being announced at Xbox\'s E3 2018 conference. An enhanced version of the game was released on Xbox Series X/S on 10 November 2020.',
                'image' => 'https://upload.wikimedia.org/wikipedia/en/thumb/8/87/Forza_Horizon_4_cover.jpg/220px-Forza_Horizon_4_cover.jpg',
            ),
        ));
    }
}
