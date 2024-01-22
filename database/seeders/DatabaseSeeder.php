<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        \App\Models\User::factory(100)->create();

        \App\Models\User::factory()->create([
            'name' => 'Mas Admin',
            'username' => 'admin',
            'email' => 'admin@gmail.com',
            'password' => bcrypt('12345'),
            'role' => 'admin'
        ]);

        \App\Models\User::factory()->create([
            'name' => 'Mas Owner',
            'username' => 'owner',
            'email' => 'owner@gmail.com',
            'password' => bcrypt('12345'),
            'role' => 'owner'
        ]);
    }
}
