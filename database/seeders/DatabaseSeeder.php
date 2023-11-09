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

        //make a CategoryThreadSeeder and call it here -> 
        /**
         * Make a category and thread (additionally have the attach method)
         * Make sure to use the model no factory needed! (using the use at the top)
         */

        $this->call(PostTableSeeder::class);

    }
}
