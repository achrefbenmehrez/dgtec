<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;

class RolesPermissionsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Role::create(['name' => 'admin']);
        Role::create(['name' => 'client']);
        Role::create(['name' => 'super-admin']);

        Permission::create(['name' => 'gerer paniers']);
        Permission::create(['name' => 'gerer devis']);
        Permission::create(['name' => 'gerer commandes']);
        Permission::create(['name' => 'gerer factures']);
        Permission::create(['name' => 'gerer contrats']);
        Permission::create(['name' => 'gerer societes']);
        Permission::create(['name' => 'gerer adresses']);
        Permission::create(['name' => 'gerer utilisateurs']);
        Permission::create(['name' => 'gerer catalogues']);
        Permission::create(['name' => 'gerer savs']);
    }
}
