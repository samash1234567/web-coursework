<?php

namespace Database\Factories;
use App\Models\Category;
use App\Models\Thread;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Category>
 */
class CategoryFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name' => fake()->name(),
            'catdescription'=> fake()->sentence(),
            // create a factory (category_threadfactory) with this and category thread
            //'thread_id'=> \App\Models\Thread::inRandomOrder()->first()->id,
            //'category_id'=> \App\Models\Category::inRandomOrder()->first()->id,
        ];
    }
}
