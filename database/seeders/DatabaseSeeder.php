<?php

namespace Database\Seeders;

use App\Models\Book;
use App\Models\BookPictures;
use App\Models\Contact;
use App\Models\Pricing;
use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run(): void
    {
        // Placeholder
        User::factory()
            ->count(24)
            ->has(Contact::factory()->count(4))
            ->has(
                Book::factory()->count(6)
                    ->has(Pricing::factory()->count(3))
                    ->has(BookPictures::factory())
            )
            ->create();

        User::factory()->create([
            'name' => 'SharbookAdmin',
            'email' => 'admin@sharbook.io',
        ]);
    }
}
