<?php

namespace Database\Factories;

use App\Models\StudentParent;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Student>
 */
class StudentFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $parentId = StudentParent::pluck('id')->toArray();
        return [
            'parent_id' => fake()->randomElement($parentId),
            'name' => 'John'
        ];
    }
}
