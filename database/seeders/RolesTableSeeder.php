<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class RolesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('roles')->delete();
        
        \DB::table('roles')->insert(array (
            0 => 
            array (
                'id' => 1,
                'name' => 'admin',
                'display_name' => 'Administrator',
                'created_at' => '2017-01-03 14:46:20',
                'updated_at' => '2017-01-03 14:46:20',
            ),
            1 => 
            array (
                'id' => 2,
                'name' => 'user',
                'display_name' => 'Normal User',
                'created_at' => '2017-01-03 14:46:20',
                'updated_at' => '2017-01-03 14:46:20',
            ),
            2 => 
            array (
                'id' => 3,
                'name' => 'moderator',
                'display_name' => 'Moderator',
                'created_at' => '2017-05-16 16:34:53',
                'updated_at' => '2017-05-16 16:34:53',
            ),
            3 => 
            array (
                'id' => 4,
                'name' => 'marketing',
                'display_name' => 'Marketing',
                'created_at' => '2019-12-09 16:11:55',
                'updated_at' => '2020-01-28 13:53:33',
            ),
            4 => 
            array (
                'id' => 5,
                'name' => 'events',
                'display_name' => 'Event Manager',
                'created_at' => '2020-02-24 13:01:10',
                'updated_at' => '2020-02-24 13:01:22',
            ),
        ));
        
        
    }
}