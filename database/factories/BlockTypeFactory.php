<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\BlockType>
 */
class BlockTypeFactory extends Factory
{
    private static int $counter = -1;
    private array $names = ['Left', 'Right'];

    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        self::$counter += 1;
        
        return ['name' => $this->names[self::$counter]];
    }
}