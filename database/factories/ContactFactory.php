<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Database\Eloquent\Factories\Sequence;


/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Contact>
 */
class ContactFactory extends Factory
{

    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        static $platforms = new Sequence("Telegram", "Discord", "LINE", "Facebook", "Twitter");

        return [
            'type' => $platforms,
            'identifier' => '@' . fake()->firstName(),
        ];
    }
}
