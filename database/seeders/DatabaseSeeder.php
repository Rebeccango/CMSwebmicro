<?php

use Illuminate\Database\Seeder;
use Database\Seeders\MenusTableSeeder;
use Database\Seeders\RolesTableSeeder;
use Database\Seeders\DataRowsTableSeeder;
use Database\Seeders\SettingsTableSeeder;
use Database\Seeders\DataTypesTableSeeder;
use Database\Seeders\MenuItemsTableSeeder;
use Database\Seeders\PermissionsTableSeeder;
use Database\Seeders\PermissionRoleTableSeeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
			  //using iseed to transfer voyager data from dev to prod
        $this->call(DataTypesTableSeeder::class);
        $this->call(DataRowsTableSeeder::class);
        $this->call(MenusTableSeeder::class);
        $this->call(MenuItemsTableSeeder::class);
        $this->call(RolesTableSeeder::class);
        $this->call(PermissionsTableSeeder::class);
        $this->call(PermissionRoleTableSeeder::class);
        $this->call(SettingsTableSeeder::class);
    }
}
