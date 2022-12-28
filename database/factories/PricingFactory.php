<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Database\Eloquent\Factories\Sequence;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Pricing>
 */
class PricingFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        static $bookType = new Sequence("實體書", "EPUB 版本", "PDF 版本");

        return [
            'type' => $bookType,
            'price' => mt_rand(11.4514, 1919.810),
        ];
    }
}
