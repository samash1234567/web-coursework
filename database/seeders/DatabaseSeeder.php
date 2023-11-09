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
        $this->call(UserTableSeeder::class);

        $this->call(ThreadTableSeeder::class);

        $this->call(CategoryTableSeeder::class);

        $this->call(CategoryThreadTableSeeder::class);

        $this->call(PostTableSeeder::class);

    }
}
