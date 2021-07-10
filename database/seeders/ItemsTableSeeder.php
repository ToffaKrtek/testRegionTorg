<?php

namespace Database\Seeders;

use App\Models\Item;
use Illuminate\Database\Seeder;

class ItemsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = \Faker\Factory::create();
 
        // Create 50 product records
        for ($i = 0; $i < 50; $i++) {
            Item::create([
                'title' => $faker->title,
                'description' => $faker->paragraph,
                'price' => $faker->randomNumber(2),
                'active' => $faker->boolean(50),
                'sold' => $faker->boolean(50)
            ]);
        }
    }
}
