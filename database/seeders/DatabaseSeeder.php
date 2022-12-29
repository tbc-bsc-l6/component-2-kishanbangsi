<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Product;
use App\Models\Category;
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
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        // Seed to the category table
        Category::factory(3)->state(new Sequence(
            ['category' => 'book'],
            ['category' => 'game'],
            ['category' => 'cd']
        ))
        ->create();

        // Seed to the user table
        $user = User::factory()->create();

        // Seed to the product table
        Product::factory(150)
        ->state(new Sequence(
            ['category_id' => 1],
            ['category_id' => 2],
            ['category_id' => 3]
        ))
        ->create([
            'user_id' => $user
        ]);
    }
}
