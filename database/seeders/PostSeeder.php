<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
Use DB;
use App\Models\User;
use Faker\Factory as Faker;

class PostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void

    {
        $faker = Faker::create();
DB::table("post")->insert([
    'user_id' => User::inRandomOrder()->first()->id ?? User::factory(), // موجودہ user لے گا یا نیا بنائے گا
    'content' => $faker->paragraph(2),
    'media_url' => $faker->boolean(30) ? $faker->imageUrl(640, 480, 'nature') : null,
    'privacy' => $faker->randomElement(['public', 'friends', 'only_me']),
]);
    }
}
