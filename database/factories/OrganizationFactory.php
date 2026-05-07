<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Organization>
 */
class OrganizationFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name' => fake()->unique()->company(),
            'is_main' => false,
        ];
    }

    /**
     * Configure the organization as the main organization.
     */
    public function main(): static
    {
        return $this->state(fn () => [
            'name' => 'Main',
            'is_main' => true,
        ]);
    }
}
