<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class SettingsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('settings')->delete();
        
        \DB::table('settings')->insert(array (
            0 => 
            array (
                'id' => 1,
                'key' => '.title',
                'display_name' => 'Site Title',
                'value' => 'CAD MicroSolutions',
                'details' => '',
                'type' => 'text',
                'order' => 1,
                'group' => NULL,
            ),
            1 => 
            array (
                'id' => 2,
                'key' => '.description',
                'display_name' => 'Site Description',
                'value' => 'Computer-Aided Drafting Software',
                'details' => '',
                'type' => 'text',
                'order' => 2,
                'group' => NULL,
            ),
            2 => 
            array (
                'id' => 3,
                'key' => '.logo',
                'display_name' => 'Site Logo',
                'value' => 'settings/January2017/ukarjJcLBilvFAjmf9wY.png',
                'details' => '',
                'type' => 'image',
                'order' => 3,
                'group' => NULL,
            ),
            3 => 
            array (
                'id' => 4,
                'key' => '.admin_bg_image',
                'display_name' => 'Admin Background Image',
                'value' => 'settings/March2017/FvWziRXGZmzKVEl5sAi6.jpg',
                'details' => '',
                'type' => 'image',
                'order' => 9,
                'group' => NULL,
            ),
            4 => 
            array (
                'id' => 5,
                'key' => '.admin_title',
                'display_name' => 'Admin Title',
                'value' => 'CMSAdmin',
                'details' => '',
                'type' => 'text',
                'order' => 4,
                'group' => NULL,
            ),
            5 => 
            array (
                'id' => 6,
                'key' => '.admin_description',
                'display_name' => 'Admin Description',
                'value' => 'Welcome to the CMS Admin Panel',
                'details' => '',
                'type' => 'text',
                'order' => 5,
                'group' => NULL,
            ),
            6 => 
            array (
                'id' => 7,
                'key' => '.admin_loader',
                'display_name' => 'Admin Loader',
                'value' => 'settings/January2017/NAWe5VqVcig6uXtmFDd6.png',
                'details' => '',
                'type' => 'image',
                'order' => 6,
                'group' => NULL,
            ),
            7 => 
            array (
                'id' => 8,
                'key' => '.admin_icon_image',
                'display_name' => 'Admin Icon Image',
                'value' => 'settings/January2017/qdJv82lIzlUIRgbIAN9S.png',
                'details' => '',
                'type' => 'image',
                'order' => 9,
                'group' => NULL,
            ),
            8 => 
            array (
                'id' => 9,
                'key' => '.google_analytics_client_id',
                'display_name' => 'Google Analytics Client ID',
                'value' => '426579740000-13vmo33b5kftnh6f5lp0oi5fdj26jfd1.apps.googleusercontent.com',
                'details' => '',
                'type' => 'text',
                'order' => 7,
                'group' => NULL,
            ),
        ));
        
        
    }
}