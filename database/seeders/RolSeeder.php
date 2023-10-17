<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;


class RolSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
      $role1 = Role::create(['name'=>'Admin']);
      $role2 =  Role::create(['name'=>'User']);

      Permission::create(['name' => 'admin.index'])->syncRoles([$role1, $role2]);
      Permission::create(['name' => 'admin.crudproducts'])->syncRoles([$role1, $role2]);

    }
}
