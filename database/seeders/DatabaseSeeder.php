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

        $user = [
            [
                'username' => 'tata',
                'name' => 'Thalita',
                'email' => 'tata@gmail.com',
                'password' => bcrypt('12345678'),
                'job' => 'admin'
            ],
            [
                'username' => 'ais',
                'name' => 'Aisyah',
                'email' => 'ais@gmail.com',
                'password' => bcrypt('12345678'),
                'job' => 'user'
            ],
        ];

        foreach ($user as $key => $value) {
            User::create($value);
        }

    }
}