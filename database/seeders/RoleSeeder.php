<?php

namespace Database\Seeders;

use App\Models\Role;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class RoleSeeder extends Seeder
{
   public function run(): void
{
    $roles = [
        ['name' => 'Admin', 'description' => 'System Administrator'],
        ['name' => 'Student', 'description' => 'Student User'],
        ['name' => 'Officer', 'description' => 'Student Officer'],
        ['name' => 'Adviser', 'description' => 'Organization Adviser'],
    ];

    foreach ($roles as $role) {
        Role::create($role);
    }
}
}
