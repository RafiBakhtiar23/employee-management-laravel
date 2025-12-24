<?php

namespace Database\Seeders;

use App\Models\Employee;
use Illuminate\Database\Seeder;

class EmployeeSeeder extends Seeder
{
    public function run(): void
    {
        Employee::create([
            'name' => 'Andi Pratama',
            'email' => 'andi@company.com',
            'phone' => '081234567890',
            'position' => 'Software Engineer',
            'department' => 'IT',
            'status' => 'active',
            'joined_at' => '2023-01-10',
        ]);

        Employee::create([
            'name' => 'Siti Aisyah',
            'email' => 'siti@company.com',
            'phone' => '082345678901',
            'position' => 'HR Officer',
            'department' => 'Human Resource',
            'status' => 'active',
            'joined_at' => '2022-07-15',
        ]);

        Employee::create([
            'name' => 'Budi Santoso',
            'email' => 'budi@company.com',
            'phone' => '083456789012',
            'position' => 'Finance Staff',
            'department' => 'Finance',
            'status' => 'inactive',
            'joined_at' => '2021-03-20',
        ]);
    }
}
