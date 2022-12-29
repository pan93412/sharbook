<?php

namespace Database\Factories;

use App\Enums\BookStatus;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Database\Eloquent\Factories\Sequence;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Book>
 */
class BookFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        $fak = fake("zh_Hant_TW");
        static $languages = new Sequence("繁體中文", "簡體中文", "英文");
        static $status = new Sequence(BookStatus::New, BookStatus::SecondHanded, BookStatus::Unknown);

        return [
            'name' => $fak->text(32),
            'brief' => $fak->sentence(6),
            'alternative_name' => array_rand([$fak->text(12), null]),
            'description' => $fak->sentences(30, true),
            // ISBN 是從 11 碼到 13 碼。
            'isbn' => mt_rand(pow(10, 11), pow(10, 14) - 1) . '',
            'author' => $fak->name(),
            'publisher' => $fak->company(),
            'published_at' => $fak->date(),
            'language' => $languages,
            'status' => $status,
        ];
    }
}
