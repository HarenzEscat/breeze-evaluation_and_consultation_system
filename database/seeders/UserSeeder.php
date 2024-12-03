<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
     
    $admins = [
        [
            'name' => 'HumanResources',
            'email' => 'HumanResources@example.com',
            'password' => Hash::make('password123'), // Replace with secure passwords
            'role' => 'admin',
        ],
        [
            'name' => 'Guidance',
            'email' => 'Guidance@example.com',
            'password' => Hash::make('password123'),
            'role' => 'admin',
        ],
        [
            'name' => 'ComputerDepartment',
            'email' => 'ComputerDepartment@example.com',
            'password' => Hash::make('password123'),
            'role' => 'admin',
        ],
    ];

    foreach ($admins as $admin) {
        User::updateOrCreate(
            ['email' => $admin['email']], // Ensure no duplicates
            $admin
        );
    }
    }
}
