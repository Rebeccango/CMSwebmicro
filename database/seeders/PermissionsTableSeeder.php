<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class PermissionsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('permissions')->delete();
        
        \DB::table('permissions')->insert(array (
            0 => 
            array (
                'id' => 1,
                'key' => 'browse_admin',
                'table_name' => 'admin',
                'created_at' => '2017-01-03 14:46:21',
                'updated_at' => '2017-01-03 14:46:21',
                'permission_group_id' => NULL,
            ),
            1 => 
            array (
                'id' => 2,
                'key' => 'browse_database',
                'table_name' => 'admin',
                'created_at' => '2017-01-03 14:46:21',
                'updated_at' => '2017-01-03 14:46:21',
                'permission_group_id' => NULL,
            ),
            2 => 
            array (
                'id' => 3,
                'key' => 'browse_media',
                'table_name' => 'admin',
                'created_at' => '2017-01-03 14:46:21',
                'updated_at' => '2017-01-03 14:46:21',
                'permission_group_id' => NULL,
            ),
            3 => 
            array (
                'id' => 4,
                'key' => 'delete_settings',
                'table_name' => 'settings',
                'created_at' => '2017-01-03 14:46:21',
                'updated_at' => '2017-01-03 14:46:21',
                'permission_group_id' => NULL,
            ),
            4 => 
            array (
                'id' => 5,
                'key' => 'browse_menus',
                'table_name' => 'menus',
                'created_at' => '2017-01-03 14:46:21',
                'updated_at' => '2017-01-03 14:46:21',
                'permission_group_id' => NULL,
            ),
            5 => 
            array (
                'id' => 6,
                'key' => 'read_menus',
                'table_name' => 'menus',
                'created_at' => '2017-01-03 14:46:21',
                'updated_at' => '2017-01-03 14:46:21',
                'permission_group_id' => NULL,
            ),
            6 => 
            array (
                'id' => 7,
                'key' => 'edit_menus',
                'table_name' => 'menus',
                'created_at' => '2017-01-03 14:46:21',
                'updated_at' => '2017-01-03 14:46:21',
                'permission_group_id' => NULL,
            ),
            7 => 
            array (
                'id' => 8,
                'key' => 'add_menus',
                'table_name' => 'menus',
                'created_at' => '2017-01-03 14:46:21',
                'updated_at' => '2017-01-03 14:46:21',
                'permission_group_id' => NULL,
            ),
            8 => 
            array (
                'id' => 9,
                'key' => 'delete_menus',
                'table_name' => 'menus',
                'created_at' => '2017-01-03 14:46:21',
                'updated_at' => '2017-01-03 14:46:21',
                'permission_group_id' => NULL,
            ),
            9 => 
            array (
                'id' => 10,
                'key' => 'browse_pages',
                'table_name' => 'pages',
                'created_at' => '2017-01-03 14:46:21',
                'updated_at' => '2017-01-03 14:46:21',
                'permission_group_id' => NULL,
            ),
            10 => 
            array (
                'id' => 11,
                'key' => 'read_pages',
                'table_name' => 'pages',
                'created_at' => '2017-01-03 14:46:21',
                'updated_at' => '2017-01-03 14:46:21',
                'permission_group_id' => NULL,
            ),
            11 => 
            array (
                'id' => 12,
                'key' => 'edit_pages',
                'table_name' => 'pages',
                'created_at' => '2017-01-03 14:46:21',
                'updated_at' => '2017-01-03 14:46:21',
                'permission_group_id' => NULL,
            ),
            12 => 
            array (
                'id' => 13,
                'key' => 'add_pages',
                'table_name' => 'pages',
                'created_at' => '2017-01-03 14:46:21',
                'updated_at' => '2017-01-03 14:46:21',
                'permission_group_id' => NULL,
            ),
            13 => 
            array (
                'id' => 14,
                'key' => 'delete_pages',
                'table_name' => 'pages',
                'created_at' => '2017-01-03 14:46:21',
                'updated_at' => '2017-01-03 14:46:21',
                'permission_group_id' => NULL,
            ),
            14 => 
            array (
                'id' => 15,
                'key' => 'browse_roles',
                'table_name' => 'roles',
                'created_at' => '2017-01-03 14:46:21',
                'updated_at' => '2017-01-03 14:46:21',
                'permission_group_id' => NULL,
            ),
            15 => 
            array (
                'id' => 16,
                'key' => 'read_roles',
                'table_name' => 'roles',
                'created_at' => '2017-01-03 14:46:21',
                'updated_at' => '2017-01-03 14:46:21',
                'permission_group_id' => NULL,
            ),
            16 => 
            array (
                'id' => 17,
                'key' => 'edit_roles',
                'table_name' => 'roles',
                'created_at' => '2017-01-03 14:46:21',
                'updated_at' => '2017-01-03 14:46:21',
                'permission_group_id' => NULL,
            ),
            17 => 
            array (
                'id' => 18,
                'key' => 'add_roles',
                'table_name' => 'roles',
                'created_at' => '2017-01-03 14:46:21',
                'updated_at' => '2017-01-03 14:46:21',
                'permission_group_id' => NULL,
            ),
            18 => 
            array (
                'id' => 19,
                'key' => 'delete_roles',
                'table_name' => 'roles',
                'created_at' => '2017-01-03 14:46:21',
                'updated_at' => '2017-01-03 14:46:21',
                'permission_group_id' => NULL,
            ),
            19 => 
            array (
                'id' => 20,
                'key' => 'browse_users',
                'table_name' => 'users',
                'created_at' => '2017-01-03 14:46:21',
                'updated_at' => '2017-01-03 14:46:21',
                'permission_group_id' => NULL,
            ),
            20 => 
            array (
                'id' => 21,
                'key' => 'read_users',
                'table_name' => 'users',
                'created_at' => '2017-01-03 14:46:21',
                'updated_at' => '2017-01-03 14:46:21',
                'permission_group_id' => NULL,
            ),
            21 => 
            array (
                'id' => 22,
                'key' => 'edit_users',
                'table_name' => 'users',
                'created_at' => '2017-01-03 14:46:21',
                'updated_at' => '2017-01-03 14:46:21',
                'permission_group_id' => NULL,
            ),
            22 => 
            array (
                'id' => 23,
                'key' => 'add_users',
                'table_name' => 'users',
                'created_at' => '2017-01-03 14:46:21',
                'updated_at' => '2017-01-03 14:46:21',
                'permission_group_id' => NULL,
            ),
            23 => 
            array (
                'id' => 24,
                'key' => 'delete_users',
                'table_name' => 'users',
                'created_at' => '2017-01-03 14:46:22',
                'updated_at' => '2017-01-03 14:46:22',
                'permission_group_id' => NULL,
            ),
            24 => 
            array (
                'id' => 25,
                'key' => 'browse_posts',
                'table_name' => 'posts',
                'created_at' => '2017-01-03 14:46:22',
                'updated_at' => '2017-01-03 14:46:22',
                'permission_group_id' => NULL,
            ),
            25 => 
            array (
                'id' => 26,
                'key' => 'read_posts',
                'table_name' => 'posts',
                'created_at' => '2017-01-03 14:46:22',
                'updated_at' => '2017-01-03 14:46:22',
                'permission_group_id' => NULL,
            ),
            26 => 
            array (
                'id' => 27,
                'key' => 'edit_posts',
                'table_name' => 'posts',
                'created_at' => '2017-01-03 14:46:22',
                'updated_at' => '2017-01-03 14:46:22',
                'permission_group_id' => NULL,
            ),
            27 => 
            array (
                'id' => 28,
                'key' => 'add_posts',
                'table_name' => 'posts',
                'created_at' => '2017-01-03 14:46:22',
                'updated_at' => '2017-01-03 14:46:22',
                'permission_group_id' => NULL,
            ),
            28 => 
            array (
                'id' => 29,
                'key' => 'delete_posts',
                'table_name' => 'posts',
                'created_at' => '2017-01-03 14:46:22',
                'updated_at' => '2017-01-03 14:46:22',
                'permission_group_id' => NULL,
            ),
            29 => 
            array (
                'id' => 30,
                'key' => 'browse_categories',
                'table_name' => 'categories',
                'created_at' => '2017-01-03 14:46:22',
                'updated_at' => '2017-01-03 14:46:22',
                'permission_group_id' => NULL,
            ),
            30 => 
            array (
                'id' => 31,
                'key' => 'read_categories',
                'table_name' => 'categories',
                'created_at' => '2017-01-03 14:46:22',
                'updated_at' => '2017-01-03 14:46:22',
                'permission_group_id' => NULL,
            ),
            31 => 
            array (
                'id' => 32,
                'key' => 'edit_categories',
                'table_name' => 'categories',
                'created_at' => '2017-01-03 14:46:22',
                'updated_at' => '2017-01-03 14:46:22',
                'permission_group_id' => NULL,
            ),
            32 => 
            array (
                'id' => 33,
                'key' => 'add_categories',
                'table_name' => 'categories',
                'created_at' => '2017-01-03 14:46:22',
                'updated_at' => '2017-01-03 14:46:22',
                'permission_group_id' => NULL,
            ),
            33 => 
            array (
                'id' => 34,
                'key' => 'delete_categories',
                'table_name' => 'categories',
                'created_at' => '2017-01-03 14:46:22',
                'updated_at' => '2017-01-03 14:46:22',
                'permission_group_id' => NULL,
            ),
            34 => 
            array (
                'id' => 55,
                'key' => 'browse_comments',
                'table_name' => 'comments',
                'created_at' => '2017-01-03 16:48:50',
                'updated_at' => '2017-01-03 16:48:50',
                'permission_group_id' => NULL,
            ),
            35 => 
            array (
                'id' => 56,
                'key' => 'read_comments',
                'table_name' => 'comments',
                'created_at' => '2017-01-03 16:48:50',
                'updated_at' => '2017-01-03 16:48:50',
                'permission_group_id' => NULL,
            ),
            36 => 
            array (
                'id' => 57,
                'key' => 'edit_comments',
                'table_name' => 'comments',
                'created_at' => '2017-01-03 16:48:50',
                'updated_at' => '2017-01-03 16:48:50',
                'permission_group_id' => NULL,
            ),
            37 => 
            array (
                'id' => 58,
                'key' => 'add_comments',
                'table_name' => 'comments',
                'created_at' => '2017-01-03 16:48:50',
                'updated_at' => '2017-01-03 16:48:50',
                'permission_group_id' => NULL,
            ),
            38 => 
            array (
                'id' => 59,
                'key' => 'delete_comments',
                'table_name' => 'comments',
                'created_at' => '2017-01-03 16:48:50',
                'updated_at' => '2017-01-03 16:48:50',
                'permission_group_id' => NULL,
            ),
            39 => 
            array (
                'id' => 80,
                'key' => 'browse_locations',
                'table_name' => 'locations',
                'created_at' => '2017-01-05 20:36:09',
                'updated_at' => '2017-01-05 20:36:09',
                'permission_group_id' => NULL,
            ),
            40 => 
            array (
                'id' => 81,
                'key' => 'read_locations',
                'table_name' => 'locations',
                'created_at' => '2017-01-05 20:36:09',
                'updated_at' => '2017-01-05 20:36:09',
                'permission_group_id' => NULL,
            ),
            41 => 
            array (
                'id' => 82,
                'key' => 'edit_locations',
                'table_name' => 'locations',
                'created_at' => '2017-01-05 20:36:09',
                'updated_at' => '2017-01-05 20:36:09',
                'permission_group_id' => NULL,
            ),
            42 => 
            array (
                'id' => 83,
                'key' => 'add_locations',
                'table_name' => 'locations',
                'created_at' => '2017-01-05 20:36:09',
                'updated_at' => '2017-01-05 20:36:09',
                'permission_group_id' => NULL,
            ),
            43 => 
            array (
                'id' => 84,
                'key' => 'delete_locations',
                'table_name' => 'locations',
                'created_at' => '2017-01-05 20:36:09',
                'updated_at' => '2017-01-05 20:36:09',
                'permission_group_id' => NULL,
            ),
            44 => 
            array (
                'id' => 105,
                'key' => 'browse_events',
                'table_name' => 'events',
                'created_at' => '2017-01-09 20:32:30',
                'updated_at' => '2017-01-09 20:32:30',
                'permission_group_id' => NULL,
            ),
            45 => 
            array (
                'id' => 106,
                'key' => 'read_events',
                'table_name' => 'events',
                'created_at' => '2017-01-09 20:32:30',
                'updated_at' => '2017-01-09 20:32:30',
                'permission_group_id' => NULL,
            ),
            46 => 
            array (
                'id' => 107,
                'key' => 'edit_events',
                'table_name' => 'events',
                'created_at' => '2017-01-09 20:32:30',
                'updated_at' => '2017-01-09 20:32:30',
                'permission_group_id' => NULL,
            ),
            47 => 
            array (
                'id' => 108,
                'key' => 'add_events',
                'table_name' => 'events',
                'created_at' => '2017-01-09 20:32:30',
                'updated_at' => '2017-01-09 20:32:30',
                'permission_group_id' => NULL,
            ),
            48 => 
            array (
                'id' => 109,
                'key' => 'delete_events',
                'table_name' => 'events',
                'created_at' => '2017-01-09 20:32:30',
                'updated_at' => '2017-01-09 20:32:30',
                'permission_group_id' => NULL,
            ),
            49 => 
            array (
                'id' => 110,
                'key' => 'browse_testimonials',
                'table_name' => 'testimonials',
                'created_at' => '2017-01-23 16:01:10',
                'updated_at' => '2017-01-23 16:01:10',
                'permission_group_id' => NULL,
            ),
            50 => 
            array (
                'id' => 111,
                'key' => 'read_testimonials',
                'table_name' => 'testimonials',
                'created_at' => '2017-01-23 16:01:10',
                'updated_at' => '2017-01-23 16:01:10',
                'permission_group_id' => NULL,
            ),
            51 => 
            array (
                'id' => 112,
                'key' => 'edit_testimonials',
                'table_name' => 'testimonials',
                'created_at' => '2017-01-23 16:01:10',
                'updated_at' => '2017-01-23 16:01:10',
                'permission_group_id' => NULL,
            ),
            52 => 
            array (
                'id' => 113,
                'key' => 'add_testimonials',
                'table_name' => 'testimonials',
                'created_at' => '2017-01-23 16:01:10',
                'updated_at' => '2017-01-23 16:01:10',
                'permission_group_id' => NULL,
            ),
            53 => 
            array (
                'id' => 114,
                'key' => 'delete_testimonials',
                'table_name' => 'testimonials',
                'created_at' => '2017-01-23 16:01:10',
                'updated_at' => '2017-01-23 16:01:10',
                'permission_group_id' => NULL,
            ),
            54 => 
            array (
                'id' => 115,
                'key' => 'browse_products',
                'table_name' => 'products',
                'created_at' => '2017-02-15 21:37:48',
                'updated_at' => '2017-02-15 21:37:48',
                'permission_group_id' => NULL,
            ),
            55 => 
            array (
                'id' => 116,
                'key' => 'read_products',
                'table_name' => 'products',
                'created_at' => '2017-02-15 21:37:48',
                'updated_at' => '2017-02-15 21:37:48',
                'permission_group_id' => NULL,
            ),
            56 => 
            array (
                'id' => 117,
                'key' => 'edit_products',
                'table_name' => 'products',
                'created_at' => '2017-02-15 21:37:48',
                'updated_at' => '2017-02-15 21:37:48',
                'permission_group_id' => NULL,
            ),
            57 => 
            array (
                'id' => 118,
                'key' => 'add_products',
                'table_name' => 'products',
                'created_at' => '2017-02-15 21:37:48',
                'updated_at' => '2017-02-15 21:37:48',
                'permission_group_id' => NULL,
            ),
            58 => 
            array (
                'id' => 119,
                'key' => 'delete_products',
                'table_name' => 'products',
                'created_at' => '2017-02-15 21:37:48',
                'updated_at' => '2017-02-15 21:37:48',
                'permission_group_id' => NULL,
            ),
            59 => 
            array (
                'id' => 120,
                'key' => 'browse_coupons',
                'table_name' => 'coupons',
                'created_at' => '2017-03-08 19:05:42',
                'updated_at' => '2017-03-08 19:05:42',
                'permission_group_id' => NULL,
            ),
            60 => 
            array (
                'id' => 121,
                'key' => 'read_coupons',
                'table_name' => 'coupons',
                'created_at' => '2017-03-08 19:05:42',
                'updated_at' => '2017-03-08 19:05:42',
                'permission_group_id' => NULL,
            ),
            61 => 
            array (
                'id' => 122,
                'key' => 'edit_coupons',
                'table_name' => 'coupons',
                'created_at' => '2017-03-08 19:05:42',
                'updated_at' => '2017-03-08 19:05:42',
                'permission_group_id' => NULL,
            ),
            62 => 
            array (
                'id' => 123,
                'key' => 'add_coupons',
                'table_name' => 'coupons',
                'created_at' => '2017-03-08 19:05:42',
                'updated_at' => '2017-03-08 19:05:42',
                'permission_group_id' => NULL,
            ),
            63 => 
            array (
                'id' => 124,
                'key' => 'delete_coupons',
                'table_name' => 'coupons',
                'created_at' => '2017-03-08 19:05:42',
                'updated_at' => '2017-03-08 19:05:42',
                'permission_group_id' => NULL,
            ),
            64 => 
            array (
                'id' => 155,
                'key' => 'browse_provinces',
                'table_name' => 'provinces',
                'created_at' => '2017-03-17 14:44:11',
                'updated_at' => '2017-03-17 14:44:11',
                'permission_group_id' => NULL,
            ),
            65 => 
            array (
                'id' => 156,
                'key' => 'read_provinces',
                'table_name' => 'provinces',
                'created_at' => '2017-03-17 14:44:11',
                'updated_at' => '2017-03-17 14:44:11',
                'permission_group_id' => NULL,
            ),
            66 => 
            array (
                'id' => 157,
                'key' => 'edit_provinces',
                'table_name' => 'provinces',
                'created_at' => '2017-03-17 14:44:11',
                'updated_at' => '2017-03-17 14:44:11',
                'permission_group_id' => NULL,
            ),
            67 => 
            array (
                'id' => 158,
                'key' => 'add_provinces',
                'table_name' => 'provinces',
                'created_at' => '2017-03-17 14:44:11',
                'updated_at' => '2017-03-17 14:44:11',
                'permission_group_id' => NULL,
            ),
            68 => 
            array (
                'id' => 159,
                'key' => 'delete_provinces',
                'table_name' => 'provinces',
                'created_at' => '2017-03-17 14:44:11',
                'updated_at' => '2017-03-17 14:44:11',
                'permission_group_id' => NULL,
            ),
            69 => 
            array (
                'id' => 160,
                'key' => 'browse_careers',
                'table_name' => 'careers',
                'created_at' => '2017-04-07 14:53:11',
                'updated_at' => '2017-04-07 14:53:11',
                'permission_group_id' => NULL,
            ),
            70 => 
            array (
                'id' => 161,
                'key' => 'read_careers',
                'table_name' => 'careers',
                'created_at' => '2017-04-07 14:53:11',
                'updated_at' => '2017-04-07 14:53:11',
                'permission_group_id' => NULL,
            ),
            71 => 
            array (
                'id' => 162,
                'key' => 'edit_careers',
                'table_name' => 'careers',
                'created_at' => '2017-04-07 14:53:11',
                'updated_at' => '2017-04-07 14:53:11',
                'permission_group_id' => NULL,
            ),
            72 => 
            array (
                'id' => 163,
                'key' => 'add_careers',
                'table_name' => 'careers',
                'created_at' => '2017-04-07 14:53:11',
                'updated_at' => '2017-04-07 14:53:11',
                'permission_group_id' => NULL,
            ),
            73 => 
            array (
                'id' => 164,
                'key' => 'delete_careers',
                'table_name' => 'careers',
                'created_at' => '2017-04-07 14:53:11',
                'updated_at' => '2017-04-07 14:53:11',
                'permission_group_id' => NULL,
            ),
            74 => 
            array (
                'id' => 165,
                'key' => 'browse_orders',
                'table_name' => 'orders',
                'created_at' => '2017-04-17 15:37:46',
                'updated_at' => '2017-04-17 15:37:46',
                'permission_group_id' => NULL,
            ),
            75 => 
            array (
                'id' => 166,
                'key' => 'read_orders',
                'table_name' => 'orders',
                'created_at' => '2017-04-17 15:37:46',
                'updated_at' => '2017-04-17 15:37:46',
                'permission_group_id' => NULL,
            ),
            76 => 
            array (
                'id' => 167,
                'key' => 'edit_orders',
                'table_name' => 'orders',
                'created_at' => '2017-04-17 15:37:46',
                'updated_at' => '2017-04-17 15:37:46',
                'permission_group_id' => NULL,
            ),
            77 => 
            array (
                'id' => 168,
                'key' => 'add_orders',
                'table_name' => 'orders',
                'created_at' => '2017-04-17 15:37:46',
                'updated_at' => '2017-04-17 15:37:46',
                'permission_group_id' => NULL,
            ),
            78 => 
            array (
                'id' => 169,
                'key' => 'delete_orders',
                'table_name' => 'orders',
                'created_at' => '2017-04-17 15:37:46',
                'updated_at' => '2017-04-17 15:37:46',
                'permission_group_id' => NULL,
            ),
            79 => 
            array (
                'id' => 170,
                'key' => 'browse_landings',
                'table_name' => 'landings',
                'created_at' => '2017-04-24 10:48:32',
                'updated_at' => '2017-04-24 10:48:32',
                'permission_group_id' => NULL,
            ),
            80 => 
            array (
                'id' => 171,
                'key' => 'read_landings',
                'table_name' => 'landings',
                'created_at' => '2017-04-24 10:48:32',
                'updated_at' => '2017-04-24 10:48:32',
                'permission_group_id' => NULL,
            ),
            81 => 
            array (
                'id' => 172,
                'key' => 'edit_landings',
                'table_name' => 'landings',
                'created_at' => '2017-04-24 10:48:32',
                'updated_at' => '2017-04-24 10:48:32',
                'permission_group_id' => NULL,
            ),
            82 => 
            array (
                'id' => 173,
                'key' => 'add_landings',
                'table_name' => 'landings',
                'created_at' => '2017-04-24 10:48:32',
                'updated_at' => '2017-04-24 10:48:32',
                'permission_group_id' => NULL,
            ),
            83 => 
            array (
                'id' => 174,
                'key' => 'delete_landings',
                'table_name' => 'landings',
                'created_at' => '2017-04-24 10:48:32',
                'updated_at' => '2017-04-24 10:48:32',
                'permission_group_id' => NULL,
            ),
            84 => 
            array (
                'id' => 180,
                'key' => 'browse_banners',
                'table_name' => 'banners',
                'created_at' => '2017-10-10 13:20:53',
                'updated_at' => '2017-10-10 13:20:53',
                'permission_group_id' => NULL,
            ),
            85 => 
            array (
                'id' => 181,
                'key' => 'read_banners',
                'table_name' => 'banners',
                'created_at' => '2017-10-10 13:20:53',
                'updated_at' => '2017-10-10 13:20:53',
                'permission_group_id' => NULL,
            ),
            86 => 
            array (
                'id' => 182,
                'key' => 'edit_banners',
                'table_name' => 'banners',
                'created_at' => '2017-10-10 13:20:53',
                'updated_at' => '2017-10-10 13:20:53',
                'permission_group_id' => NULL,
            ),
            87 => 
            array (
                'id' => 183,
                'key' => 'add_banners',
                'table_name' => 'banners',
                'created_at' => '2017-10-10 13:20:53',
                'updated_at' => '2017-10-10 13:20:53',
                'permission_group_id' => NULL,
            ),
            88 => 
            array (
                'id' => 184,
                'key' => 'delete_banners',
                'table_name' => 'banners',
                'created_at' => '2017-10-10 13:20:53',
                'updated_at' => '2017-10-10 13:20:53',
                'permission_group_id' => NULL,
            ),
            89 => 
            array (
                'id' => 186,
                'key' => 'add_settings',
                'table_name' => 'settings',
                'created_at' => '2017-01-03 14:46:21',
                'updated_at' => '2017-01-03 14:46:21',
                'permission_group_id' => NULL,
            ),
            90 => 
            array (
                'id' => 187,
                'key' => 'edit_settings',
                'table_name' => 'settings',
                'created_at' => '2017-01-03 14:46:21',
                'updated_at' => '2017-01-03 14:46:21',
                'permission_group_id' => NULL,
            ),
            91 => 
            array (
                'id' => 188,
                'key' => 'browse_app_usage',
                'table_name' => 'app_usage',
                'created_at' => '2017-11-20 15:04:03',
                'updated_at' => '2017-11-20 15:04:03',
                'permission_group_id' => NULL,
            ),
            92 => 
            array (
                'id' => 189,
                'key' => 'read_app_usage',
                'table_name' => 'app_usage',
                'created_at' => '2017-11-20 15:04:03',
                'updated_at' => '2017-11-20 15:04:03',
                'permission_group_id' => NULL,
            ),
            93 => 
            array (
                'id' => 190,
                'key' => 'edit_app_usage',
                'table_name' => 'app_usage',
                'created_at' => '2017-11-20 15:04:03',
                'updated_at' => '2017-11-20 15:04:03',
                'permission_group_id' => NULL,
            ),
            94 => 
            array (
                'id' => 191,
                'key' => 'add_app_usage',
                'table_name' => 'app_usage',
                'created_at' => '2017-11-20 15:04:03',
                'updated_at' => '2017-11-20 15:04:03',
                'permission_group_id' => NULL,
            ),
            95 => 
            array (
                'id' => 192,
                'key' => 'delete_app_usage',
                'table_name' => 'app_usage',
                'created_at' => '2017-11-20 15:04:03',
                'updated_at' => '2017-11-20 15:04:03',
                'permission_group_id' => NULL,
            ),
            96 => 
            array (
                'id' => 193,
                'key' => 'browse_shipments',
                'table_name' => 'shipments',
                'created_at' => '2018-03-15 11:34:58',
                'updated_at' => '2018-03-15 11:34:58',
                'permission_group_id' => NULL,
            ),
            97 => 
            array (
                'id' => 194,
                'key' => 'read_shipments',
                'table_name' => 'shipments',
                'created_at' => '2018-03-15 11:34:58',
                'updated_at' => '2018-03-15 11:34:58',
                'permission_group_id' => NULL,
            ),
            98 => 
            array (
                'id' => 195,
                'key' => 'edit_shipments',
                'table_name' => 'shipments',
                'created_at' => '2018-03-15 11:34:58',
                'updated_at' => '2018-03-15 11:34:58',
                'permission_group_id' => NULL,
            ),
            99 => 
            array (
                'id' => 196,
                'key' => 'add_shipments',
                'table_name' => 'shipments',
                'created_at' => '2018-03-15 11:34:58',
                'updated_at' => '2018-03-15 11:34:58',
                'permission_group_id' => NULL,
            ),
            100 => 
            array (
                'id' => 197,
                'key' => 'delete_shipments',
                'table_name' => 'shipments',
                'created_at' => '2018-03-15 11:34:58',
                'updated_at' => '2018-03-15 11:34:58',
                'permission_group_id' => NULL,
            ),
            101 => 
            array (
                'id' => 198,
                'key' => 'browse_packaging_boxes',
                'table_name' => 'packaging_boxes',
                'created_at' => '2018-03-15 11:41:57',
                'updated_at' => '2018-03-15 11:41:57',
                'permission_group_id' => NULL,
            ),
            102 => 
            array (
                'id' => 199,
                'key' => 'read_packaging_boxes',
                'table_name' => 'packaging_boxes',
                'created_at' => '2018-03-15 11:41:57',
                'updated_at' => '2018-03-15 11:41:57',
                'permission_group_id' => NULL,
            ),
            103 => 
            array (
                'id' => 200,
                'key' => 'edit_packaging_boxes',
                'table_name' => 'packaging_boxes',
                'created_at' => '2018-03-15 11:41:57',
                'updated_at' => '2018-03-15 11:41:57',
                'permission_group_id' => NULL,
            ),
            104 => 
            array (
                'id' => 201,
                'key' => 'add_packaging_boxes',
                'table_name' => 'packaging_boxes',
                'created_at' => '2018-03-15 11:41:57',
                'updated_at' => '2018-03-15 11:41:57',
                'permission_group_id' => NULL,
            ),
            105 => 
            array (
                'id' => 202,
                'key' => 'delete_packaging_boxes',
                'table_name' => 'packaging_boxes',
                'created_at' => '2018-03-15 11:41:57',
                'updated_at' => '2018-03-15 11:41:57',
                'permission_group_id' => NULL,
            ),
            106 => 
            array (
                'id' => 203,
                'key' => 'browse_checkouts',
                'table_name' => 'checkouts',
                'created_at' => '2018-03-15 11:53:11',
                'updated_at' => '2018-03-15 11:53:11',
                'permission_group_id' => NULL,
            ),
            107 => 
            array (
                'id' => 204,
                'key' => 'read_checkouts',
                'table_name' => 'checkouts',
                'created_at' => '2018-03-15 11:53:11',
                'updated_at' => '2018-03-15 11:53:11',
                'permission_group_id' => NULL,
            ),
            108 => 
            array (
                'id' => 205,
                'key' => 'edit_checkouts',
                'table_name' => 'checkouts',
                'created_at' => '2018-03-15 11:53:11',
                'updated_at' => '2018-03-15 11:53:11',
                'permission_group_id' => NULL,
            ),
            109 => 
            array (
                'id' => 206,
                'key' => 'add_checkouts',
                'table_name' => 'checkouts',
                'created_at' => '2018-03-15 11:53:11',
                'updated_at' => '2018-03-15 11:53:11',
                'permission_group_id' => NULL,
            ),
            110 => 
            array (
                'id' => 207,
                'key' => 'delete_checkouts',
                'table_name' => 'checkouts',
                'created_at' => '2018-03-15 11:53:11',
                'updated_at' => '2018-03-15 11:53:11',
                'permission_group_id' => NULL,
            ),
            111 => 
            array (
                'id' => 208,
                'key' => 'browse_bread',
                'table_name' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
                'permission_group_id' => NULL,
            ),
            112 => 
            array (
                'id' => 209,
                'key' => 'browse_product_groups',
                'table_name' => 'product_groups',
                'created_at' => '2018-12-12 13:39:25',
                'updated_at' => '2018-12-12 13:39:25',
                'permission_group_id' => NULL,
            ),
            113 => 
            array (
                'id' => 210,
                'key' => 'read_product_groups',
                'table_name' => 'product_groups',
                'created_at' => '2018-12-12 13:39:25',
                'updated_at' => '2018-12-12 13:39:25',
                'permission_group_id' => NULL,
            ),
            114 => 
            array (
                'id' => 211,
                'key' => 'edit_product_groups',
                'table_name' => 'product_groups',
                'created_at' => '2018-12-12 13:39:25',
                'updated_at' => '2018-12-12 13:39:25',
                'permission_group_id' => NULL,
            ),
            115 => 
            array (
                'id' => 212,
                'key' => 'add_product_groups',
                'table_name' => 'product_groups',
                'created_at' => '2018-12-12 13:39:25',
                'updated_at' => '2018-12-12 13:39:25',
                'permission_group_id' => NULL,
            ),
            116 => 
            array (
                'id' => 213,
                'key' => 'delete_product_groups',
                'table_name' => 'product_groups',
                'created_at' => '2018-12-12 13:39:25',
                'updated_at' => '2018-12-12 13:39:25',
                'permission_group_id' => NULL,
            ),
            117 => 
            array (
                'id' => 214,
                'key' => 'browse_resource_categories',
                'table_name' => 'resource_categories',
                'created_at' => '2019-01-21 11:19:54',
                'updated_at' => '2019-01-21 11:19:54',
                'permission_group_id' => NULL,
            ),
            118 => 
            array (
                'id' => 215,
                'key' => 'read_resource_categories',
                'table_name' => 'resource_categories',
                'created_at' => '2019-01-21 11:19:54',
                'updated_at' => '2019-01-21 11:19:54',
                'permission_group_id' => NULL,
            ),
            119 => 
            array (
                'id' => 216,
                'key' => 'edit_resource_categories',
                'table_name' => 'resource_categories',
                'created_at' => '2019-01-21 11:19:54',
                'updated_at' => '2019-01-21 11:19:54',
                'permission_group_id' => NULL,
            ),
            120 => 
            array (
                'id' => 217,
                'key' => 'add_resource_categories',
                'table_name' => 'resource_categories',
                'created_at' => '2019-01-21 11:19:54',
                'updated_at' => '2019-01-21 11:19:54',
                'permission_group_id' => NULL,
            ),
            121 => 
            array (
                'id' => 218,
                'key' => 'delete_resource_categories',
                'table_name' => 'resource_categories',
                'created_at' => '2019-01-21 11:19:54',
                'updated_at' => '2019-01-21 11:19:54',
                'permission_group_id' => NULL,
            ),
            122 => 
            array (
                'id' => 219,
                'key' => 'browse_resource_types',
                'table_name' => 'resource_types',
                'created_at' => '2019-01-21 11:20:51',
                'updated_at' => '2019-01-21 11:20:51',
                'permission_group_id' => NULL,
            ),
            123 => 
            array (
                'id' => 220,
                'key' => 'read_resource_types',
                'table_name' => 'resource_types',
                'created_at' => '2019-01-21 11:20:51',
                'updated_at' => '2019-01-21 11:20:51',
                'permission_group_id' => NULL,
            ),
            124 => 
            array (
                'id' => 221,
                'key' => 'edit_resource_types',
                'table_name' => 'resource_types',
                'created_at' => '2019-01-21 11:20:51',
                'updated_at' => '2019-01-21 11:20:51',
                'permission_group_id' => NULL,
            ),
            125 => 
            array (
                'id' => 222,
                'key' => 'add_resource_types',
                'table_name' => 'resource_types',
                'created_at' => '2019-01-21 11:20:51',
                'updated_at' => '2019-01-21 11:20:51',
                'permission_group_id' => NULL,
            ),
            126 => 
            array (
                'id' => 223,
                'key' => 'delete_resource_types',
                'table_name' => 'resource_types',
                'created_at' => '2019-01-21 11:20:51',
                'updated_at' => '2019-01-21 11:20:51',
                'permission_group_id' => NULL,
            ),
            127 => 
            array (
                'id' => 224,
                'key' => 'browse_resources',
                'table_name' => 'resources',
                'created_at' => '2019-01-21 11:22:37',
                'updated_at' => '2019-01-21 11:22:37',
                'permission_group_id' => NULL,
            ),
            128 => 
            array (
                'id' => 225,
                'key' => 'read_resources',
                'table_name' => 'resources',
                'created_at' => '2019-01-21 11:22:37',
                'updated_at' => '2019-01-21 11:22:37',
                'permission_group_id' => NULL,
            ),
            129 => 
            array (
                'id' => 226,
                'key' => 'edit_resources',
                'table_name' => 'resources',
                'created_at' => '2019-01-21 11:22:37',
                'updated_at' => '2019-01-21 11:22:37',
                'permission_group_id' => NULL,
            ),
            130 => 
            array (
                'id' => 227,
                'key' => 'add_resources',
                'table_name' => 'resources',
                'created_at' => '2019-01-21 11:22:37',
                'updated_at' => '2019-01-21 11:22:37',
                'permission_group_id' => NULL,
            ),
            131 => 
            array (
                'id' => 228,
                'key' => 'delete_resources',
                'table_name' => 'resources',
                'created_at' => '2019-01-21 11:22:37',
                'updated_at' => '2019-01-21 11:22:37',
                'permission_group_id' => NULL,
            ),
            132 => 
            array (
                'id' => 229,
                'key' => 'browse_compass',
                'table_name' => 'compass',
                'created_at' => NULL,
                'updated_at' => NULL,
                'permission_group_id' => NULL,
            ),
            133 => 
            array (
                'id' => 230,
                'key' => 'read_compass',
                'table_name' => 'compass',
                'created_at' => NULL,
                'updated_at' => NULL,
                'permission_group_id' => NULL,
            ),
            134 => 
            array (
                'id' => 231,
                'key' => 'browse_promotions',
                'table_name' => 'promotions',
                'created_at' => '2019-05-14 11:16:59',
                'updated_at' => '2019-05-14 11:16:59',
                'permission_group_id' => NULL,
            ),
            135 => 
            array (
                'id' => 232,
                'key' => 'read_promotions',
                'table_name' => 'promotions',
                'created_at' => '2019-05-14 11:16:59',
                'updated_at' => '2019-05-14 11:16:59',
                'permission_group_id' => NULL,
            ),
            136 => 
            array (
                'id' => 233,
                'key' => 'edit_promotions',
                'table_name' => 'promotions',
                'created_at' => '2019-05-14 11:16:59',
                'updated_at' => '2019-05-14 11:16:59',
                'permission_group_id' => NULL,
            ),
            137 => 
            array (
                'id' => 234,
                'key' => 'add_promotions',
                'table_name' => 'promotions',
                'created_at' => '2019-05-14 11:16:59',
                'updated_at' => '2019-05-14 11:16:59',
                'permission_group_id' => NULL,
            ),
            138 => 
            array (
                'id' => 235,
                'key' => 'delete_promotions',
                'table_name' => 'promotions',
                'created_at' => '2019-05-14 11:16:59',
                'updated_at' => '2019-05-14 11:16:59',
                'permission_group_id' => NULL,
            ),
            139 => 
            array (
                'id' => 236,
                'key' => 'browse_product_families',
                'table_name' => 'product_families',
                'created_at' => '2019-05-14 11:20:59',
                'updated_at' => '2019-05-14 11:20:59',
                'permission_group_id' => NULL,
            ),
            140 => 
            array (
                'id' => 237,
                'key' => 'read_product_families',
                'table_name' => 'product_families',
                'created_at' => '2019-05-14 11:20:59',
                'updated_at' => '2019-05-14 11:20:59',
                'permission_group_id' => NULL,
            ),
            141 => 
            array (
                'id' => 238,
                'key' => 'edit_product_families',
                'table_name' => 'product_families',
                'created_at' => '2019-05-14 11:20:59',
                'updated_at' => '2019-05-14 11:20:59',
                'permission_group_id' => NULL,
            ),
            142 => 
            array (
                'id' => 239,
                'key' => 'add_product_families',
                'table_name' => 'product_families',
                'created_at' => '2019-05-14 11:20:59',
                'updated_at' => '2019-05-14 11:20:59',
                'permission_group_id' => NULL,
            ),
            143 => 
            array (
                'id' => 240,
                'key' => 'delete_product_families',
                'table_name' => 'product_families',
                'created_at' => '2019-05-14 11:20:59',
                'updated_at' => '2019-05-14 11:20:59',
                'permission_group_id' => NULL,
            ),
            144 => 
            array (
                'id' => 246,
                'key' => 'browse_meta_tags',
                'table_name' => 'meta_tags',
                'created_at' => '2019-12-11 16:24:10',
                'updated_at' => '2019-12-11 16:24:10',
                'permission_group_id' => NULL,
            ),
            145 => 
            array (
                'id' => 247,
                'key' => 'read_meta_tags',
                'table_name' => 'meta_tags',
                'created_at' => '2019-12-11 16:24:10',
                'updated_at' => '2019-12-11 16:24:10',
                'permission_group_id' => NULL,
            ),
            146 => 
            array (
                'id' => 248,
                'key' => 'edit_meta_tags',
                'table_name' => 'meta_tags',
                'created_at' => '2019-12-11 16:24:10',
                'updated_at' => '2019-12-11 16:24:10',
                'permission_group_id' => NULL,
            ),
            147 => 
            array (
                'id' => 249,
                'key' => 'add_meta_tags',
                'table_name' => 'meta_tags',
                'created_at' => '2019-12-11 16:24:10',
                'updated_at' => '2019-12-11 16:24:10',
                'permission_group_id' => NULL,
            ),
            148 => 
            array (
                'id' => 250,
                'key' => 'delete_meta_tags',
                'table_name' => 'meta_tags',
                'created_at' => '2019-12-11 16:24:10',
                'updated_at' => '2019-12-11 16:24:10',
                'permission_group_id' => NULL,
            ),
            149 => 
            array (
                'id' => 251,
                'key' => 'browse_resource_groups',
                'table_name' => 'resource_groups',
                'created_at' => '2019-12-16 13:36:46',
                'updated_at' => '2019-12-16 13:36:46',
                'permission_group_id' => NULL,
            ),
            150 => 
            array (
                'id' => 252,
                'key' => 'read_resource_groups',
                'table_name' => 'resource_groups',
                'created_at' => '2019-12-16 13:36:46',
                'updated_at' => '2019-12-16 13:36:46',
                'permission_group_id' => NULL,
            ),
            151 => 
            array (
                'id' => 253,
                'key' => 'edit_resource_groups',
                'table_name' => 'resource_groups',
                'created_at' => '2019-12-16 13:36:46',
                'updated_at' => '2019-12-16 13:36:46',
                'permission_group_id' => NULL,
            ),
            152 => 
            array (
                'id' => 254,
                'key' => 'add_resource_groups',
                'table_name' => 'resource_groups',
                'created_at' => '2019-12-16 13:36:46',
                'updated_at' => '2019-12-16 13:36:46',
                'permission_group_id' => NULL,
            ),
            153 => 
            array (
                'id' => 255,
                'key' => 'delete_resource_groups',
                'table_name' => 'resource_groups',
                'created_at' => '2019-12-16 13:36:46',
                'updated_at' => '2019-12-16 13:36:46',
                'permission_group_id' => NULL,
            ),
            154 => 
            array (
                'id' => 256,
                'key' => 'browse_companies',
                'table_name' => 'companies',
                'created_at' => '2019-12-16 15:17:10',
                'updated_at' => '2019-12-16 15:17:10',
                'permission_group_id' => NULL,
            ),
            155 => 
            array (
                'id' => 257,
                'key' => 'read_companies',
                'table_name' => 'companies',
                'created_at' => '2019-12-16 15:17:10',
                'updated_at' => '2019-12-16 15:17:10',
                'permission_group_id' => NULL,
            ),
            156 => 
            array (
                'id' => 258,
                'key' => 'edit_companies',
                'table_name' => 'companies',
                'created_at' => '2019-12-16 15:17:10',
                'updated_at' => '2019-12-16 15:17:10',
                'permission_group_id' => NULL,
            ),
            157 => 
            array (
                'id' => 259,
                'key' => 'add_companies',
                'table_name' => 'companies',
                'created_at' => '2019-12-16 15:17:10',
                'updated_at' => '2019-12-16 15:17:10',
                'permission_group_id' => NULL,
            ),
            158 => 
            array (
                'id' => 260,
                'key' => 'delete_companies',
                'table_name' => 'companies',
                'created_at' => '2019-12-16 15:17:10',
                'updated_at' => '2019-12-16 15:17:10',
                'permission_group_id' => NULL,
            ),
            159 => 
            array (
                'id' => 261,
                'key' => 'browse_company_products',
                'table_name' => 'company_products',
                'created_at' => '2019-12-16 15:17:34',
                'updated_at' => '2019-12-16 15:17:34',
                'permission_group_id' => NULL,
            ),
            160 => 
            array (
                'id' => 262,
                'key' => 'read_company_products',
                'table_name' => 'company_products',
                'created_at' => '2019-12-16 15:17:34',
                'updated_at' => '2019-12-16 15:17:34',
                'permission_group_id' => NULL,
            ),
            161 => 
            array (
                'id' => 263,
                'key' => 'edit_company_products',
                'table_name' => 'company_products',
                'created_at' => '2019-12-16 15:17:34',
                'updated_at' => '2019-12-16 15:17:34',
                'permission_group_id' => NULL,
            ),
            162 => 
            array (
                'id' => 264,
                'key' => 'add_company_products',
                'table_name' => 'company_products',
                'created_at' => '2019-12-16 15:17:34',
                'updated_at' => '2019-12-16 15:17:34',
                'permission_group_id' => NULL,
            ),
            163 => 
            array (
                'id' => 265,
                'key' => 'delete_company_products',
                'table_name' => 'company_products',
                'created_at' => '2019-12-16 15:17:34',
                'updated_at' => '2019-12-16 15:17:34',
                'permission_group_id' => NULL,
            ),
            164 => 
            array (
                'id' => 266,
                'key' => 'browse_settings',
                'table_name' => 'settings',
                'created_at' => '2017-01-03 14:46:21',
                'updated_at' => '2017-01-03 14:46:21',
                'permission_group_id' => NULL,
            ),
            165 => 
            array (
                'id' => 267,
                'key' => 'read_settings',
                'table_name' => 'settings',
                'created_at' => '2017-01-03 14:46:21',
                'updated_at' => '2017-01-03 14:46:21',
                'permission_group_id' => NULL,
            ),
        ));
        
        
    }
}