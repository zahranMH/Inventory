<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        User::create([
            'name' => 'Zahran Muhammad',
            'email' => 'zah@gmail.com',
            'is_admin' => 1,
            'password' => bcrypt('admin')
        ]);
        
        User::create([
            'name' => 'Agung',
            'email' => 'gung@gmail.com',
            'password' => bcrypt('password')
        ]);
        
    }
}
