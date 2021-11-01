<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DataTypesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('data_types')->delete();
        
        \DB::table('data_types')->insert(array (
            0 => 
            array (
                'id' => 1,
                'controller' => '',
                'name' => 'posts',
                'slug' => 'posts',
                'display_name_singular' => 'Post',
                'display_name_plural' => 'Posts',
                'icon' => 'voyager-news',
                'model_name' => 'TCG\\Voyager\\Models\\Post',
                'policy_name' => '',
                'description' => '',
                'generate_permissions' => 1,
                'server_side' => 1,
                'details' => '{"order_column":"","order_display_column":"","order_direction":"desc","default_search_key":"","scope":""}',
                'created_at' => '2017-01-03 14:46:17',
                'updated_at' => '2021-04-23 13:15:29',
            ),
            1 => 
            array (
                'id' => 2,
                'controller' => '',
                'name' => 'pages',
                'slug' => 'pages',
                'display_name_singular' => 'Page',
                'display_name_plural' => 'Pages',
                'icon' => 'voyager-file-text',
                'model_name' => 'TCG\\Voyager\\Models\\Page',
                'policy_name' => '',
                'description' => '',
                'generate_permissions' => 1,
                'server_side' => 0,
                'details' => NULL,
                'created_at' => '2017-01-03 14:46:17',
                'updated_at' => '2017-11-01 10:00:51',
            ),
            2 => 
            array (
                'id' => 3,
                'controller' => '',
                'name' => 'users',
                'slug' => 'users',
                'display_name_singular' => 'User',
                'display_name_plural' => 'Users',
                'icon' => 'voyager-person',
                'model_name' => 'App\\User',
                'policy_name' => '',
                'description' => '',
                'generate_permissions' => 1,
                'server_side' => 0,
                'details' => '{"order_column":"","order_display_column":"","order_direction":"desc","default_search_key":"","scope":""}',
                'created_at' => '2017-01-03 14:46:17',
                'updated_at' => '2020-01-28 13:45:01',
            ),
            3 => 
            array (
                'id' => 4,
                'controller' => '',
                'name' => 'categories',
                'slug' => 'categories',
                'display_name_singular' => 'Category',
                'display_name_plural' => 'Categories',
                'icon' => 'voyager-categories',
                'model_name' => 'TCG\\Voyager\\Models\\Category',
                'policy_name' => '',
                'description' => '',
                'generate_permissions' => 1,
                'server_side' => 0,
                'details' => NULL,
                'created_at' => '2017-01-03 14:46:17',
                'updated_at' => '2018-04-06 10:42:18',
            ),
            4 => 
            array (
                'id' => 5,
                'controller' => NULL,
                'name' => 'menus',
                'slug' => 'menus',
                'display_name_singular' => 'Menu',
                'display_name_plural' => 'Menus',
                'icon' => 'voyager-list',
                'model_name' => 'TCG\\Voyager\\Models\\Menu',
                'policy_name' => NULL,
                'description' => '',
                'generate_permissions' => 1,
                'server_side' => 0,
                'details' => NULL,
                'created_at' => '2017-01-03 14:46:17',
                'updated_at' => '2017-01-03 14:46:17',
            ),
            5 => 
            array (
                'id' => 6,
                'controller' => '',
                'name' => 'roles',
                'slug' => 'roles',
                'display_name_singular' => 'Role',
                'display_name_plural' => 'Roles',
                'icon' => 'voyager-lock',
                'model_name' => 'TCG\\Voyager\\Models\\Role',
                'policy_name' => '',
                'description' => '',
                'generate_permissions' => 1,
                'server_side' => 0,
                'details' => '{"order_column":"","order_display_column":""}',
                'created_at' => '2017-01-03 14:46:17',
                'updated_at' => '2018-12-10 15:31:47',
            ),
            6 => 
            array (
                'id' => 11,
                'controller' => '',
                'name' => 'comments',
                'slug' => 'comments',
                'display_name_singular' => 'Comment',
                'display_name_plural' => 'Comments',
                'icon' => 'voyager-bubble',
                'model_name' => 'App\\Comments',
                'policy_name' => '',
                'description' => '',
                'generate_permissions' => 1,
                'server_side' => 1,
                'details' => NULL,
                'created_at' => '2017-01-03 16:48:50',
                'updated_at' => '2017-11-22 15:57:12',
            ),
            7 => 
            array (
                'id' => 16,
                'controller' => '',
                'name' => 'locations',
                'slug' => 'locations',
                'display_name_singular' => 'Location',
                'display_name_plural' => 'Locations',
                'icon' => 'voyager-shop',
                'model_name' => 'App\\Locations',
                'policy_name' => NULL,
                'description' => '',
                'generate_permissions' => 1,
                'server_side' => 0,
                'details' => NULL,
                'created_at' => '2017-01-05 20:36:09',
                'updated_at' => '2017-03-17 12:39:23',
            ),
            8 => 
            array (
                'id' => 21,
                'controller' => '',
                'name' => 'events',
                'slug' => 'events',
                'display_name_singular' => 'Event',
                'display_name_plural' => 'Events',
                'icon' => 'voyager-calendar',
                'model_name' => 'App\\Events',
                'policy_name' => '',
                'description' => '',
                'generate_permissions' => 1,
                'server_side' => 1,
                'details' => '{"order_column":"","order_display_column":"","order_direction":"desc","default_search_key":"","scope":""}',
                'created_at' => '2017-01-09 20:32:30',
                'updated_at' => '2021-09-08 15:11:46',
            ),
            9 => 
            array (
                'id' => 22,
                'controller' => '',
                'name' => 'testimonials',
                'slug' => 'testimonials',
                'display_name_singular' => 'Testimonial',
                'display_name_plural' => 'Testimonials',
                'icon' => 'voyager-heart',
                'model_name' => 'App\\Testimonials',
                'policy_name' => '',
                'description' => '',
                'generate_permissions' => 1,
                'server_side' => 0,
                'details' => '{"order_column":"","order_display_column":"","order_direction":"desc","default_search_key":"","scope":""}',
                'created_at' => '2017-01-23 16:01:10',
                'updated_at' => '2021-05-26 10:45:57',
            ),
            10 => 
            array (
                'id' => 23,
                'controller' => '\\App\\Http\\Controllers\\ProductController',
                'name' => 'products',
                'slug' => 'products',
                'display_name_singular' => 'Product',
                'display_name_plural' => 'Products',
                'icon' => 'voyager-truck',
                'model_name' => 'App\\Products',
                'policy_name' => '',
                'description' => '',
                'generate_permissions' => 1,
                'server_side' => 0,
                'details' => '{"order_column":"","order_display_column":"","order_direction":"desc","default_search_key":"","scope":""}',
                'created_at' => '2017-02-15 21:37:48',
                'updated_at' => '2020-11-02 09:43:11',
            ),
            11 => 
            array (
                'id' => 24,
                'controller' => '',
                'name' => 'coupons',
                'slug' => 'coupons',
                'display_name_singular' => 'Coupon',
                'display_name_plural' => 'Coupons',
                'icon' => 'voyager-ticket',
                'model_name' => 'App\\Coupons',
                'policy_name' => '',
                'description' => '',
                'generate_permissions' => 1,
                'server_side' => 0,
                'details' => '{"order_column":"","order_display_column":"","order_direction":"desc","default_search_key":""}',
                'created_at' => '2017-03-08 19:05:42',
                'updated_at' => '2019-04-22 12:21:20',
            ),
            12 => 
            array (
                'id' => 38,
                'controller' => '',
                'name' => 'provinces',
                'slug' => 'provinces',
                'display_name_singular' => 'Province',
                'display_name_plural' => 'Provinces',
                'icon' => 'voyager-world',
                'model_name' => 'App\\Province',
                'policy_name' => NULL,
                'description' => '',
                'generate_permissions' => 1,
                'server_side' => 0,
                'details' => NULL,
                'created_at' => '2017-03-17 14:44:11',
                'updated_at' => '2017-03-17 14:44:11',
            ),
            13 => 
            array (
                'id' => 39,
                'controller' => '',
                'name' => 'careers',
                'slug' => 'careers',
                'display_name_singular' => 'Career',
                'display_name_plural' => 'Careers',
                'icon' => 'voyager-group',
                'model_name' => 'App\\Career',
                'policy_name' => NULL,
                'description' => '',
                'generate_permissions' => 1,
                'server_side' => 0,
                'details' => NULL,
                'created_at' => '2017-04-07 14:53:11',
                'updated_at' => '2017-04-07 14:53:57',
            ),
            14 => 
            array (
                'id' => 41,
                'controller' => '',
                'name' => 'orders',
                'slug' => 'orders',
                'display_name_singular' => 'Order',
                'display_name_plural' => 'Orders',
                'icon' => 'voyager-wallet',
                'model_name' => 'App\\Orders',
                'policy_name' => '',
                'description' => '',
                'generate_permissions' => 1,
                'server_side' => 1,
                'details' => NULL,
                'created_at' => '2017-04-17 15:37:46',
                'updated_at' => '2018-03-15 11:59:32',
            ),
            15 => 
            array (
                'id' => 42,
                'controller' => '',
                'name' => 'landings',
                'slug' => 'landings',
                'display_name_singular' => 'Landing',
                'display_name_plural' => 'Landings',
                'icon' => 'voyager-file-code',
                'model_name' => 'App\\Landing',
                'policy_name' => '',
                'description' => 'Landing pages from CRM - ClickDimensions.
Please paste the iframe code from the "Embed As Iframe" option in the "Embed Options" of your CRM Landing page.',
                'generate_permissions' => 1,
                'server_side' => 1,
                'details' => '{"order_column":"","order_display_column":"","order_direction":"desc","default_search_key":"","scope":""}',
                'created_at' => '2017-04-24 10:48:32',
                'updated_at' => '2021-09-09 15:22:18',
            ),
            16 => 
            array (
                'id' => 44,
                'controller' => '',
                'name' => 'banners',
                'slug' => 'banners',
                'display_name_singular' => 'Banner',
                'display_name_plural' => 'Banners',
                'icon' => 'voyager-brush',
                'model_name' => 'App\\Banner',
                'policy_name' => '',
                'description' => '',
                'generate_permissions' => 1,
                'server_side' => 0,
                'details' => '{"order_column":"order","order_display_column":"title","order_direction":"desc","default_search_key":"","scope":""}',
                'created_at' => '2017-10-10 13:20:53',
                'updated_at' => '2020-09-17 15:17:04',
            ),
            17 => 
            array (
                'id' => 45,
                'controller' => '',
                'name' => 'app_usage',
                'slug' => 'app-usage',
                'display_name_singular' => 'App Usage',
                'display_name_plural' => 'App Usages',
                'icon' => '',
                'model_name' => 'App\\AppUsage',
                'policy_name' => '',
                'description' => '',
                'generate_permissions' => 1,
                'server_side' => 0,
                'details' => NULL,
                'created_at' => '2017-11-20 15:04:03',
                'updated_at' => '2017-11-20 15:04:03',
            ),
            18 => 
            array (
                'id' => 46,
                'controller' => '',
                'name' => 'shipments',
                'slug' => 'shipments',
                'display_name_singular' => 'Shipment',
                'display_name_plural' => 'Shipments',
                'icon' => 'voyager-mail',
                'model_name' => 'App\\Shipment',
                'policy_name' => '',
                'description' => '',
                'generate_permissions' => 1,
                'server_side' => 1,
                'details' => NULL,
                'created_at' => '2018-03-15 11:34:58',
                'updated_at' => '2018-03-15 11:34:58',
            ),
            19 => 
            array (
                'id' => 47,
                'controller' => '',
                'name' => 'packaging_boxes',
                'slug' => 'packaging-boxes',
                'display_name_singular' => 'Packaging Box',
                'display_name_plural' => 'Packaging Boxes',
                'icon' => 'voyager-categories',
                'model_name' => 'App\\PackagingBox',
                'policy_name' => '',
                'description' => '',
                'generate_permissions' => 1,
                'server_side' => 0,
                'details' => NULL,
                'created_at' => '2018-03-15 11:41:57',
                'updated_at' => '2018-03-15 11:41:57',
            ),
            20 => 
            array (
                'id' => 48,
                'controller' => '',
                'name' => 'checkouts',
                'slug' => 'checkouts',
                'display_name_singular' => 'Checkout',
                'display_name_plural' => 'Checkouts',
                'icon' => 'voyager-documentation',
                'model_name' => 'App\\Checkout',
                'policy_name' => '',
                'description' => '',
                'generate_permissions' => 1,
                'server_side' => 1,
                'details' => NULL,
                'created_at' => '2018-03-15 11:53:11',
                'updated_at' => '2018-03-15 11:53:11',
            ),
            21 => 
            array (
                'id' => 50,
                'controller' => '',
                'name' => 'product_groups',
                'slug' => 'product-groups',
                'display_name_singular' => 'Product Group',
                'display_name_plural' => 'Product Groups',
                'icon' => 'voyager-categories',
                'model_name' => 'App\\ProductGroup',
                'policy_name' => '',
                'description' => '',
                'generate_permissions' => 1,
                'server_side' => 0,
                'details' => '{"order_column":"","order_display_column":""}',
                'created_at' => '2018-12-12 13:39:25',
                'updated_at' => '2018-12-12 13:47:02',
            ),
            22 => 
            array (
                'id' => 51,
                'controller' => '',
                'name' => 'resource_categories',
                'slug' => 'resource-categories',
                'display_name_singular' => 'Resource Category',
                'display_name_plural' => 'Resource Categories',
                'icon' => 'voyager-file-text',
                'model_name' => 'App\\ResourceCategory',
                'policy_name' => '',
                'description' => '',
                'generate_permissions' => 1,
                'server_side' => 0,
                'details' => '{"order_column":"order","order_display_column":"name","order_direction":"asc","default_search_key":""}',
                'created_at' => '2019-01-21 11:19:54',
                'updated_at' => '2019-12-12 09:33:34',
            ),
            23 => 
            array (
                'id' => 52,
                'controller' => '',
                'name' => 'resource_types',
                'slug' => 'resource-types',
                'display_name_singular' => 'Resource Type',
                'display_name_plural' => 'Resource Types',
                'icon' => 'voyager-file-text',
                'model_name' => 'App\\ResourceType',
                'policy_name' => '',
                'description' => '',
                'generate_permissions' => 1,
                'server_side' => 0,
                'details' => '{"order_column":"","order_display_column":"","order_direction":"asc","default_search_key":""}',
                'created_at' => '2019-01-21 11:20:51',
                'updated_at' => '2019-12-12 09:33:36',
            ),
            24 => 
            array (
                'id' => 53,
                'controller' => '',
                'name' => 'resources',
                'slug' => 'resources',
                'display_name_singular' => 'Resource',
                'display_name_plural' => 'Resources',
                'icon' => 'voyager-archive',
                'model_name' => 'App\\Resource',
                'policy_name' => '',
                'description' => '',
                'generate_permissions' => 1,
                'server_side' => 1,
                'details' => '{"order_column":"","order_display_column":"","order_direction":"asc","default_search_key":"","scope":""}',
                'created_at' => '2019-01-21 11:22:37',
                'updated_at' => '2020-03-26 12:40:05',
            ),
            25 => 
            array (
                'id' => 55,
                'controller' => '',
                'name' => 'promotions',
                'slug' => 'promotions',
                'display_name_singular' => 'Promotion',
                'display_name_plural' => 'Promotions',
                'icon' => 'voyager-ticket',
                'model_name' => 'App\\Promotion',
                'policy_name' => '',
                'description' => '',
                'generate_permissions' => 1,
                'server_side' => 0,
                'details' => '{"order_column":"","order_display_column":"","order_direction":"asc","default_search_key":"","scope":""}',
                'created_at' => '2019-05-14 11:16:59',
                'updated_at' => '2020-01-23 11:36:18',
            ),
            26 => 
            array (
                'id' => 56,
                'controller' => '',
                'name' => 'product_families',
                'slug' => 'product-families',
                'display_name_singular' => 'Product Family',
                'display_name_plural' => 'Product Families',
                'icon' => 'voyager-book-download',
                'model_name' => 'App\\ProductFamily',
                'policy_name' => '',
                'description' => '',
                'generate_permissions' => 1,
                'server_side' => 0,
                'details' => '{"order_column":"","order_display_column":"","order_direction":"asc","default_search_key":""}',
                'created_at' => '2019-05-14 11:20:59',
                'updated_at' => '2019-05-14 11:22:14',
            ),
            27 => 
            array (
                'id' => 62,
                'controller' => '',
                'name' => 'meta_tags',
                'slug' => 'meta-tags',
                'display_name_singular' => 'Meta Tag',
                'display_name_plural' => 'Meta Tags',
                'icon' => 'voyager-window-list',
                'model_name' => 'App\\MetaTags',
                'policy_name' => '',
                'description' => '',
                'generate_permissions' => 1,
                'server_side' => 0,
                'details' => '{"order_column":"","order_display_column":"","order_direction":"asc","default_search_key":""}',
                'created_at' => '2019-12-11 16:24:10',
                'updated_at' => '2019-12-11 16:26:04',
            ),
            28 => 
            array (
                'id' => 63,
                'controller' => '',
                'name' => 'resource_groups',
                'slug' => 'resource-groups',
                'display_name_singular' => 'Resource Group',
                'display_name_plural' => 'Resource Groups',
                'icon' => 'voyager-book',
                'model_name' => 'App\\ResourceGroup',
                'policy_name' => '',
                'description' => '',
                'generate_permissions' => 1,
                'server_side' => 0,
                'details' => '{"order_column":"","order_display_column":"","order_direction":"asc","default_search_key":""}',
                'created_at' => '2019-12-16 13:36:46',
                'updated_at' => '2019-12-16 13:36:46',
            ),
            29 => 
            array (
                'id' => 64,
                'controller' => '',
                'name' => 'companies',
                'slug' => 'companies',
                'display_name_singular' => 'Company',
                'display_name_plural' => 'Companies',
                'icon' => 'voyager-company',
                'model_name' => 'App\\Company',
                'policy_name' => '',
                'description' => '',
                'generate_permissions' => 1,
                'server_side' => 0,
                'details' => '{"order_column":"","order_display_column":"","order_direction":"asc","default_search_key":"","scope":""}',
                'created_at' => '2019-12-16 15:17:10',
                'updated_at' => '2020-01-28 11:58:47',
            ),
            30 => 
            array (
                'id' => 65,
                'controller' => '',
                'name' => 'company_products',
                'slug' => 'company-products',
                'display_name_singular' => 'Company Product',
                'display_name_plural' => 'Company Products',
                'icon' => 'voyager-file-text',
                'model_name' => 'App\\CompanyProduct',
                'policy_name' => '',
                'description' => '',
                'generate_permissions' => 1,
                'server_side' => 0,
                'details' => '{"order_column":"","order_display_column":"","order_direction":"asc","default_search_key":"","scope":""}',
                'created_at' => '2019-12-16 15:17:34',
                'updated_at' => '2020-01-03 13:41:51',
            ),
        ));
        
        
    }
}