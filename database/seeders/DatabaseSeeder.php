<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        User::create([

            'email' => 'khoiruddoa@gmail.com',
            'password' => bcrypt('password'),
            'role' => true
        ]);

        User::create([
            'email' => 'fulan@gmail.com',
            'password' => bcrypt('password'),
            'role' => false
        ]);
    }
}
