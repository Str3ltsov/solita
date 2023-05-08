<?php

namespace Database\Factories;

use App\Enums\BlockTypeEnum;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Block>
 */
class BlockFactory extends Factory
{
    private static int $counter = -1;
    private array $names = [
        'Apie mus',
        'Paslaugos'
    ];

    private array $titles = [
        'Įmonės misija',
        'Įmonės veiklos sritys'
    ];
    
    private array $images = [
        'images/paslaugos.jpg',
        'assets/img/skill/paslaugos.jpg'
    ];

    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        self::$counter += 1;
        
        return [
            'name' => $this->names[self::$counter],
            'title' => $this->titles[self::$counter],
            'text' => null,
            'image' => $this->images[self::$counter],
            'experience_years' => self::$counter === 0 ? 5 : 0,
            'show_experience' => self::$counter === 0,
            'order' => self::$counter + 1,
            'block_type_id' => self::$counter === 0 ? BlockTypeEnum::LEFT : BlockTypeEnum::RIGHT,
            'created_at' => now()
        ];
    }
}