<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Str;
use App\Models\Category; // Make sure the model is named correctly

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = \Faker\Factory::create();

        for ($i = 1; $i <= 980; $i++) {
            $name = $faker->unique()->words(2, true); // e.g. "Modern Art"
            Category::create([
                'name' => ucfirst($name),
                'slug' => Str::slug($name),
            ]);
        }
    }
}
