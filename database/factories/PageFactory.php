<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Page>
 */
class PageFactory extends Factory
{
    private static int $counter = -1;
    private array $names = [
        'Pagrindinis',
        'Apie mus',
        'ES projektai',
        'Paslaugos'
    ];

    private array $routes = [
        '',
        'apie-mus',
        'es-projektai',
        'paslaugos'
    ];

    private array $titles = [
        '',
        'Įmonės misija',
        'ES projektai',
        'Įmonės veiklos sritys'
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
            'route' => $this->routes[self::$counter],
            'title' => self::$counter === 0 ? null : $this->titles[self::$counter],
            'text' => null,
            'image' => null,
            'experience_years' => self::$counter === 2 ? 5 : 0,
            'show_experience' => self::$counter === 2,
            'created_at' => now()
        ];
    }
}