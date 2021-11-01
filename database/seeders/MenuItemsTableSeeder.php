<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class MenuItemsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('menu_items')->delete();
        
        \DB::table('menu_items')->insert(array (
            0 => 
            array (
                'id' => 1,
                'menu_id' => 1,
                'title' => 'Dashboard',
                'url' => '/admin',
                'target' => '_self',
                'icon_class' => 'voyager-dashboard',
                'color' => '#000000',
                'parent_id' => NULL,
                'order' => 1,
                'created_at' => '2017-01-03 14:46:20',
                'updated_at' => '2017-04-20 16:00:30',
                'route' => NULL,
                'parameters' => '',
            ),
            1 => 
            array (
                'id' => 2,
                'menu_id' => 1,
                'title' => 'Media',
                'url' => '/admin/media',
                'target' => '_self',
                'icon_class' => 'voyager-images',
                'color' => NULL,
                'parent_id' => NULL,
                'order' => 5,
                'created_at' => '2017-01-03 14:46:20',
                'updated_at' => '2021-09-09 15:36:31',
                'route' => NULL,
                'parameters' => NULL,
            ),
            2 => 
            array (
                'id' => 3,
                'menu_id' => 1,
                'title' => 'Posts',
                'url' => '/admin/posts',
                'target' => '_self',
                'icon_class' => 'voyager-news',
                'color' => NULL,
                'parent_id' => 23,
                'order' => 1,
                'created_at' => '2017-01-03 14:46:20',
                'updated_at' => '2017-04-20 15:57:36',
                'route' => NULL,
                'parameters' => NULL,
            ),
            3 => 
            array (
                'id' => 4,
                'menu_id' => 1,
                'title' => 'Users',
                'url' => '/admin/users',
                'target' => '_self',
                'icon_class' => 'voyager-person',
                'color' => NULL,
                'parent_id' => NULL,
                'order' => 10,
                'created_at' => '2017-01-03 14:46:20',
                'updated_at' => '2021-09-09 15:36:31',
                'route' => NULL,
                'parameters' => NULL,
            ),
            4 => 
            array (
                'id' => 5,
                'menu_id' => 1,
                'title' => 'Categories',
                'url' => '/admin/categories',
                'target' => '_self',
                'icon_class' => 'voyager-categories',
                'color' => NULL,
                'parent_id' => 48,
                'order' => 1,
                'created_at' => '2017-01-03 14:46:20',
                'updated_at' => '2021-09-09 15:36:31',
                'route' => NULL,
                'parameters' => NULL,
            ),
            5 => 
            array (
                'id' => 7,
                'menu_id' => 1,
                'title' => 'Roles',
                'url' => '/admin/roles',
                'target' => '_self',
                'icon_class' => 'voyager-lock',
                'color' => NULL,
                'parent_id' => 8,
                'order' => 1,
                'created_at' => '2017-01-03 14:46:20',
                'updated_at' => '2017-04-20 15:58:31',
                'route' => NULL,
                'parameters' => NULL,
            ),
            6 => 
            array (
                'id' => 8,
                'menu_id' => 1,
                'title' => 'Tools',
                'url' => '',
                'target' => '_self',
                'icon_class' => 'voyager-tools',
                'color' => NULL,
                'parent_id' => NULL,
                'order' => 11,
                'created_at' => '2017-01-03 14:46:20',
                'updated_at' => '2021-09-09 15:36:31',
                'route' => NULL,
                'parameters' => NULL,
            ),
            7 => 
            array (
                'id' => 9,
                'menu_id' => 1,
                'title' => 'Menu Builder',
                'url' => '/admin/menus',
                'target' => '_self',
                'icon_class' => 'voyager-list',
                'color' => NULL,
                'parent_id' => 8,
                'order' => 2,
                'created_at' => '2017-01-03 14:46:20',
                'updated_at' => '2017-04-20 15:58:31',
                'route' => NULL,
                'parameters' => NULL,
            ),
            8 => 
            array (
                'id' => 10,
                'menu_id' => 1,
                'title' => 'Database',
                'url' => '/admin/database',
                'target' => '_self',
                'icon_class' => 'voyager-data',
                'color' => NULL,
                'parent_id' => 8,
                'order' => 3,
                'created_at' => '2017-01-03 14:46:20',
                'updated_at' => '2017-04-20 15:58:31',
                'route' => NULL,
                'parameters' => NULL,
            ),
            9 => 
            array (
                'id' => 11,
                'menu_id' => 1,
                'title' => 'Settings',
                'url' => '/admin/settings',
                'target' => '_self',
                'icon_class' => 'voyager-settings',
                'color' => NULL,
                'parent_id' => NULL,
                'order' => 12,
                'created_at' => '2017-01-03 14:46:20',
                'updated_at' => '2021-09-09 15:36:31',
                'route' => NULL,
                'parameters' => NULL,
            ),
            10 => 
            array (
                'id' => 12,
                'menu_id' => 1,
                'title' => 'Events',
                'url' => '/admin/events',
                'target' => '_self',
                'icon_class' => 'voyager-calendar',
                'color' => '#000000',
                'parent_id' => NULL,
                'order' => 2,
                'created_at' => '2017-01-03 16:39:06',
                'updated_at' => '2017-01-16 14:18:45',
                'route' => NULL,
                'parameters' => NULL,
            ),
            11 => 
            array (
                'id' => 13,
                'menu_id' => 1,
                'title' => 'Comments',
                'url' => '/admin/comments',
                'target' => '_self',
                'icon_class' => 'voyager-bubble',
                'color' => '#000000',
                'parent_id' => 23,
                'order' => 2,
                'created_at' => '2017-01-03 16:39:29',
                'updated_at' => '2017-04-20 15:57:36',
                'route' => NULL,
                'parameters' => NULL,
            ),
            12 => 
            array (
                'id' => 14,
                'menu_id' => 1,
                'title' => 'Locations',
                'url' => '/admin/locations',
                'target' => '_self',
                'icon_class' => 'voyager-shop',
                'color' => '#000000',
                'parent_id' => 24,
                'order' => 3,
                'created_at' => '2017-01-05 20:30:27',
                'updated_at' => '2021-09-09 15:34:51',
                'route' => NULL,
                'parameters' => NULL,
            ),
            13 => 
            array (
                'id' => 15,
                'menu_id' => 1,
                'title' => 'Testimonials',
                'url' => '/admin/testimonials',
                'target' => '_self',
                'icon_class' => 'voyager-heart',
                'color' => '#000000',
                'parent_id' => 42,
                'order' => 4,
                'created_at' => '2017-01-23 16:01:48',
                'updated_at' => '2021-09-09 15:34:52',
                'route' => NULL,
                'parameters' => '',
            ),
            14 => 
            array (
                'id' => 17,
                'menu_id' => 1,
                'title' => 'Products',
                'url' => '/admin/products',
                'target' => '_self',
                'icon_class' => 'voyager-truck',
                'color' => '#000000',
                'parent_id' => 48,
                'order' => 2,
                'created_at' => '2017-02-15 21:39:26',
                'updated_at' => '2021-09-09 15:36:31',
                'route' => NULL,
                'parameters' => NULL,
            ),
            15 => 
            array (
                'id' => 18,
                'menu_id' => 1,
                'title' => 'Coupons',
                'url' => '/admin/coupons',
                'target' => '_self',
                'icon_class' => 'voyager-ticket',
                'color' => '#000000',
                'parent_id' => 16,
                'order' => 3,
                'created_at' => '2017-03-08 19:06:45',
                'updated_at' => '2021-09-09 15:34:04',
                'route' => NULL,
                'parameters' => NULL,
            ),
            16 => 
            array (
                'id' => 20,
                'menu_id' => 1,
                'title' => 'Provinces/Taxes',
                'url' => '/admin/provinces',
                'target' => '_self',
                'icon_class' => 'voyager-world',
                'color' => '#000000',
                'parent_id' => 16,
                'order' => 6,
                'created_at' => '2017-03-17 14:45:23',
                'updated_at' => '2021-09-09 15:34:04',
                'route' => NULL,
                'parameters' => '',
            ),
            17 => 
            array (
                'id' => 21,
                'menu_id' => 1,
                'title' => 'Careers',
                'url' => '/admin/careers',
                'target' => '_self',
                'icon_class' => 'voyager-group',
                'color' => '#000000',
                'parent_id' => 24,
                'order' => 2,
                'created_at' => '2017-04-07 14:54:49',
                'updated_at' => '2021-09-09 15:34:51',
                'route' => NULL,
                'parameters' => '',
            ),
            18 => 
            array (
                'id' => 22,
                'menu_id' => 1,
                'title' => 'Orders',
                'url' => '/admin/orders',
                'target' => '_self',
                'icon_class' => 'voyager-wallet',
                'color' => '#000000',
                'parent_id' => 16,
                'order' => 1,
                'created_at' => '2017-04-17 15:38:14',
                'updated_at' => '2017-04-17 15:38:24',
                'route' => NULL,
                'parameters' => '',
            ),
            19 => 
            array (
                'id' => 23,
                'menu_id' => 1,
                'title' => 'Blog',
                'url' => '',
                'target' => '_self',
                'icon_class' => 'voyager-news',
                'color' => '#000000',
                'parent_id' => NULL,
                'order' => 3,
                'created_at' => '2017-04-20 15:57:08',
                'updated_at' => '2017-04-20 15:59:07',
                'route' => NULL,
                'parameters' => '',
            ),
            20 => 
            array (
                'id' => 24,
                'menu_id' => 1,
                'title' => 'Company',
                'url' => '',
                'target' => '_self',
                'icon_class' => 'voyager-company',
                'color' => '#000000',
                'parent_id' => NULL,
                'order' => 6,
                'created_at' => '2017-04-20 16:06:54',
                'updated_at' => '2021-09-09 15:36:31',
                'route' => NULL,
                'parameters' => '',
            ),
            21 => 
            array (
                'id' => 25,
                'menu_id' => 1,
                'title' => 'Landings',
                'url' => '/admin/landings',
                'target' => '_self',
                'icon_class' => 'voyager-file-code',
                'color' => '#000000',
                'parent_id' => 42,
                'order' => 2,
                'created_at' => '2017-04-24 10:50:36',
                'updated_at' => '2021-09-09 15:34:52',
                'route' => NULL,
                'parameters' => '',
            ),
            22 => 
            array (
                'id' => 27,
                'menu_id' => 1,
                'title' => 'Banners',
                'url' => '/admin/banners',
                'target' => '_self',
                'icon_class' => 'voyager-brush',
                'color' => '#000000',
                'parent_id' => 42,
                'order' => 1,
                'created_at' => '2017-10-10 13:21:29',
                'updated_at' => '2021-09-09 15:34:52',
                'route' => NULL,
                'parameters' => '',
            ),
            23 => 
            array (
                'id' => 28,
                'menu_id' => 1,
                'title' => 'Shipments',
                'url' => '/admin/shipments',
                'target' => '_self',
                'icon_class' => 'voyager-mail',
                'color' => NULL,
                'parent_id' => 16,
                'order' => 2,
                'created_at' => '2018-03-15 11:34:58',
                'updated_at' => '2018-03-15 11:54:01',
                'route' => NULL,
                'parameters' => NULL,
            ),
            24 => 
            array (
                'id' => 29,
                'menu_id' => 1,
                'title' => 'Packaging Boxes',
                'url' => '/admin/packaging-boxes',
                'target' => '_self',
                'icon_class' => 'voyager-categories',
                'color' => NULL,
                'parent_id' => 16,
                'order' => 5,
                'created_at' => '2018-03-15 11:41:57',
                'updated_at' => '2021-09-09 15:34:04',
                'route' => NULL,
                'parameters' => NULL,
            ),
            25 => 
            array (
                'id' => 30,
                'menu_id' => 1,
                'title' => 'Checkouts',
                'url' => '/admin/checkouts',
                'target' => '_self',
                'icon_class' => 'voyager-documentation',
                'color' => NULL,
                'parent_id' => 16,
                'order' => 4,
                'created_at' => '2018-03-15 11:53:11',
                'updated_at' => '2021-09-09 15:34:04',
                'route' => NULL,
                'parameters' => NULL,
            ),
            26 => 
            array (
                'id' => 31,
                'menu_id' => 1,
                'title' => 'BREAD',
                'url' => '',
                'target' => '_self',
                'icon_class' => 'voyager-bread',
                'color' => '#000000',
                'parent_id' => 8,
                'order' => 4,
                'created_at' => '2018-12-10 15:11:17',
                'updated_at' => '2018-12-10 15:14:34',
                'route' => 'voyager.bread.index',
                'parameters' => 'null',
            ),
            27 => 
            array (
                'id' => 32,
                'menu_id' => 1,
                'title' => 'Product Groups',
                'url' => '',
                'target' => '_self',
                'icon_class' => 'voyager-categories',
                'color' => NULL,
                'parent_id' => 48,
                'order' => 3,
                'created_at' => '2018-12-12 13:39:25',
                'updated_at' => '2021-09-09 15:36:31',
                'route' => 'voyager.product-groups.index',
                'parameters' => NULL,
            ),
            28 => 
            array (
                'id' => 33,
                'menu_id' => 1,
                'title' => 'Resource Categories',
                'url' => '',
                'target' => '_self',
                'icon_class' => 'voyager-file-text',
                'color' => '#000000',
                'parent_id' => 36,
                'order' => 2,
                'created_at' => '2019-01-21 11:19:54',
                'updated_at' => '2021-09-08 15:22:15',
                'route' => 'voyager.resource-categories.index',
                'parameters' => 'null',
            ),
            29 => 
            array (
                'id' => 34,
                'menu_id' => 1,
                'title' => 'Resource Types',
                'url' => '',
                'target' => '_self',
                'icon_class' => 'voyager-file-text',
                'color' => '#000000',
                'parent_id' => 36,
                'order' => 3,
                'created_at' => '2019-01-21 11:20:51',
                'updated_at' => '2021-09-08 15:22:15',
                'route' => 'voyager.resource-types.index',
                'parameters' => 'null',
            ),
            30 => 
            array (
                'id' => 35,
                'menu_id' => 1,
                'title' => 'Resources',
                'url' => '',
                'target' => '_self',
                'icon_class' => 'voyager-archive',
                'color' => '#000000',
                'parent_id' => 36,
                'order' => 1,
                'created_at' => '2019-01-21 11:22:37',
                'updated_at' => '2019-01-21 11:37:37',
                'route' => 'voyager.resources.index',
                'parameters' => 'null',
            ),
            31 => 
            array (
                'id' => 36,
                'menu_id' => 1,
                'title' => 'Resources',
                'url' => '/admin/resource',
                'target' => '_self',
                'icon_class' => 'voyager-archive',
                'color' => '#000000',
                'parent_id' => NULL,
                'order' => 8,
                'created_at' => '2019-01-21 11:24:46',
                'updated_at' => '2021-09-09 15:36:31',
                'route' => NULL,
                'parameters' => '',
            ),
            32 => 
            array (
                'id' => 37,
                'menu_id' => 1,
                'title' => 'Promotions',
                'url' => '',
                'target' => '_self',
                'icon_class' => 'voyager-ticket',
                'color' => NULL,
                'parent_id' => 24,
                'order' => 1,
                'created_at' => '2019-05-14 11:16:59',
                'updated_at' => '2019-05-14 11:23:01',
                'route' => 'voyager.promotions.index',
                'parameters' => NULL,
            ),
            33 => 
            array (
                'id' => 38,
                'menu_id' => 1,
                'title' => 'Product Families',
                'url' => '',
                'target' => '_self',
                'icon_class' => 'voyager-book-download',
                'color' => NULL,
                'parent_id' => 16,
                'order' => 7,
                'created_at' => '2019-05-14 11:20:59',
                'updated_at' => '2021-09-09 15:34:04',
                'route' => 'voyager.product-families.index',
                'parameters' => NULL,
            ),
            34 => 
            array (
                'id' => 41,
                'menu_id' => 1,
                'title' => 'Meta Tags',
                'url' => '',
                'target' => '_self',
                'icon_class' => 'voyager-window-list',
                'color' => '#000000',
                'parent_id' => 42,
                'order' => 3,
                'created_at' => '2019-12-11 16:24:10',
                'updated_at' => '2021-09-09 15:34:52',
                'route' => 'voyager.meta-tags.index',
                'parameters' => 'null',
            ),
            35 => 
            array (
                'id' => 42,
                'menu_id' => 1,
                'title' => 'SEO',
                'url' => '',
                'target' => '_self',
                'icon_class' => 'voyager-browser',
                'color' => '#000000',
                'parent_id' => NULL,
                'order' => 7,
                'created_at' => '2019-12-12 15:45:15',
                'updated_at' => '2021-09-09 15:36:31',
                'route' => NULL,
                'parameters' => '',
            ),
            36 => 
            array (
                'id' => 44,
                'menu_id' => 1,
                'title' => 'Companies',
                'url' => '',
                'target' => '_self',
                'icon_class' => 'voyager-company',
                'color' => '#000000',
                'parent_id' => 46,
                'order' => 1,
                'created_at' => '2019-12-16 15:17:10',
                'updated_at' => '2019-12-16 15:22:49',
                'route' => 'voyager.companies.index',
                'parameters' => 'null',
            ),
            37 => 
            array (
                'id' => 45,
                'menu_id' => 1,
                'title' => 'Company Products',
                'url' => '',
                'target' => '_self',
                'icon_class' => 'voyager-file-text',
                'color' => '#000000',
                'parent_id' => 46,
                'order' => 2,
                'created_at' => '2019-12-16 15:17:34',
                'updated_at' => '2019-12-16 15:22:49',
                'route' => 'voyager.company-products.index',
                'parameters' => 'null',
            ),
            38 => 
            array (
                'id' => 46,
                'menu_id' => 1,
                'title' => 'Companies',
                'url' => '',
                'target' => '_self',
                'icon_class' => 'voyager-company',
                'color' => '#000000',
                'parent_id' => NULL,
                'order' => 9,
                'created_at' => '2019-12-16 15:21:26',
                'updated_at' => '2021-09-09 15:36:31',
                'route' => NULL,
                'parameters' => '',
            ),
            39 => 
            array (
                'id' => 47,
                'menu_id' => 1,
                'title' => 'Compass',
                'url' => '/admin/compass',
                'target' => '_self',
                'icon_class' => 'voyager-compass',
                'color' => '#000000',
                'parent_id' => 8,
                'order' => 5,
                'created_at' => '2021-09-08 15:22:09',
                'updated_at' => '2021-09-08 15:22:15',
                'route' => NULL,
                'parameters' => '',
            ),
            40 => 
            array (
                'id' => 48,
                'menu_id' => 1,
                'title' => 'Products',
                'url' => '',
                'target' => '_self',
                'icon_class' => 'voyager-truck',
                'color' => '#000000',
                'parent_id' => NULL,
                'order' => 4,
                'created_at' => '2021-09-09 15:36:15',
                'updated_at' => '2021-09-09 15:36:53',
                'route' => NULL,
                'parameters' => '',
            ),
        ));
        
        
    }
}