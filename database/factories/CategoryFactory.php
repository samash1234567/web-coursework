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
            $category = Category::factory()
            ->has(Thread::factory()->count(10))
            ->create();
        ];
    }
}
