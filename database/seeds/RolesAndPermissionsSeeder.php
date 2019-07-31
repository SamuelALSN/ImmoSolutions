<?php

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

class RolesAndPermissionsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {// Reset cached roles and permissions
        app()[\Spatie\Permission\PermissionRegistrar::class]->forgetCachedPermissions();

        // create permissions for all customer
        Permission::create(['name' => 'add advert']);
        Permission::create(['name' => 'edit advert']);
        Permission::create(['name' => 'consult advert']);
        Permission::create(['name' => 'delete advert']);
        Permission::create(['name' => 'publish advert']);
        Permission::create(['name' => 'unpublish advert']);

        // create roles and assign created permissions

        // this can be done as separate statements
        $role = Role::create(['name' => 'customer']);
        $role->givePermissionTo('add advert');
        $role->givePermissionTo('consult advert');
        $role->givePermissionTo('edit advert');
        $role->givePermissionTo('delete advert');
//        $role->givePermissionTo('publish advert ');
//        $role->givePermissionTo('unpublish advert ');

        // or may be done by chaining
        $role = Role::create(['name' => 'moderator'])
            ->givePermissionTo(['publish advert', 'unpublish advert']);

        $role = Role::create(['name' => 'super-admin']);
        $role->givePermissionTo(Permission::all());
    }
}
