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
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        //call seeders here (if no data then check this)

        $this->call(UserTableSeeder::class);

        $this->call(ThreadTableSeeder::class);

        $this->call(CategoryTableSeeder::class);

        $this->call(PostTableSeeder::class);

        //call the cat_thread factory here

      




    }
}
