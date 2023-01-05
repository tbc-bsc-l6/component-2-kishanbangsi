<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Product;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Sequence;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        User::factory(20)
            ->state(
                new Sequence(
                    ['role' => 'admin'],
                    ['role' => 'user']
                )
            )->has(
                Product::factory()->count(10)->state(
                    new Sequence(
                        ['category' => 'book'],
                        ['category' => 'game'],
                        ['category' => 'cd']
                    )
                )
            )
        ->create();

        // User::factory(1)->create();
    }
}
