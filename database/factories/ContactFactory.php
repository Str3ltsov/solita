<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Contact>
 */
class ContactFactory extends Factory
{
    private static int $counter = -1;
    private array $titles = [
        'Įmonės kodas',
        'PVM mokėtojo kodas',
        'Telefonas',
        'El. paštas',
        'Adresas'
    ];

    private array $descriptions = [
        '304764201',
        'LT100011832719',
        '+370 372 47749',
        'info@solita.lt',
        'Taikos pr. 88a, 51182 Kaunas'
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
            'title' => $this->titles[self::$counter],
            'description' => $this->descriptions[self::$counter],
            'created_at' => now()
        ];
    }
}