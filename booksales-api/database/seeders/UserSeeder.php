<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::create([
            'name' => 'Admin',
            'email' => 'admin@example.com',
            'password' => bcrypt('password'),
            'role' => 'admin',
        ]);

        User::create([
            'name' => 'Customer',
            'email' => 'costomer@example.com',
            'password' => bcrypt('pass123'),
            'role' => 'customer',
        ]);

        User::create([
            'name' => 'Nisa',
            'email' => 'nisa@example.com',
            'password' => bcrypt('nisa123'),
            'role' => 'customer',
        ]);

        User::create([
            'name' => 'Kris',
            'email' => 'kris@example.com',
            'password' => bcrypt('kris456'),
            'role' => 'customer',
        ]);

        User::create([
            'name' => 'Customer 2',
            'email' => 'costomer2@example.com',
            'password' => bcrypt('pass000'),
            'role' => 'customer',
        ]);

        User::create([
            'name' => 'Customer3',
            'email' => 'costomer3@example.com',
            'password' => bcrypt('pass111'),
            'role' => 'customer',
        ]);

        User::create([
            'name' => 'Customer4',
            'email' => 'costomer4@example.com',
            'password' => bcrypt('pass222'),
            'role' => 'customer',
        ]);
    }
}