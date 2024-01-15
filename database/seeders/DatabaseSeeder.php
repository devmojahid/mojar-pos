<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Constants\{
    Role,
    Status
};
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {

        $users =  [
            [
                'name' => 'Admin',
                'username' => 'admin', // 'username' => 'admin
                'email' => 'admin@test.com',
                'password' => bcrypt('password'),
                'usertype' => Role::ADMIN,
                'status' => Status::ACTIVE,
                'phone' => '1234567890',
                'country' => 'Bangladesh',
                'address' => 'Comilla',
            ],
            [
                'name' => 'Sales',
                'username' => 'sales', // 'username' => 'sales
                'email' => 'sales@test.com',
                'password' => bcrypt('password'),
                'usertype' => Role::SALES,
                'status' => Status::ACTIVE,
                'phone' => '1234567890',
                'country' => 'Bangladesh',
                'address' => 'Comilla',
            ],
            [
                'name' => 'Purchase',
                'username' => 'purchase', // 'username' => 'purchase
                'email' => 'purchase@test.com',
                'password' => bcrypt('password'),
                'usertype' => Role::PURCHASE,
                'status' => Status::ACTIVE,
                'phone' => '1234567890',
                'country' => 'Bangladesh',
                'address' => 'Comilla',
            ],
            [
                'name' => 'Customer',
                'username' => 'customer', // 'username' => 'customer
                'email' => 'customer@test.com',
                'password' => bcrypt('password'),
                'usertype' => Role::CUSTOMER,
                'status' => Status::ACTIVE,
                'phone' => '1234567890',
                'country' => 'Bangladesh',
                'address' => 'Comilla',
            ],
        ];
        foreach ($users as $user) {
            \App\Models\User::create($user);
        }

        \App\Models\Upload::factory(10)->create();
        $this->call(RolePermissionSeeder::class);
    }
}
