<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;

class RolePermissionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
         // Reset cached roles and permissions
         app()[\Spatie\Permission\PermissionRegistrar::class]->forgetCachedPermissions();
        // Create permissions
        $permissions = [
            //user permission
            [
                "group_name" => "user",
                "permissions" => [
                    "user-list",
                    "user-create",
                    "user-edit",
                    "user-delete"
                ]
            ],
            //blog permission
            [
                "group_name" => "blog",
                "permissions" => [
                    "blog-list",
                    "blog-create",
                    "blog-edit",
                    "blog-delete"
                ]
            ],
            //role permission
            [
                "group_name" => "role",
                "permissions" => [
                    "role-list",
                    "role-create",
                    "role-edit",
                    "role-delete"
                ]
            ],
            //dashboard permission
            [
                "group_name" => "dashboard",
                "permissions" => [
                    "dashboard-list",
                    "dashboard-create",
                    "dashboard-edit",
                    "dashboard-delete"
                ]
            ],
        ];

        foreach ($permissions as $permission) {
            $group_name = $permission['group_name'];
            foreach ($permission['permissions'] as $permission) {
                Permission::create([
                    'name' => $permission,
                    'group_name' => $group_name
                ]);
            }
        }
        // Create roles and assign created permissions
        $role = Role::create(['name' => 'admin']);
        $role->givePermissionTo(Permission::all());

        $user = User::where('usertype', 'admin')->first();
        $user->assignRole('admin');
    }
}
