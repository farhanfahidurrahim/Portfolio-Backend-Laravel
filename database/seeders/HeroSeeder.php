<?php

namespace Database\Seeders;

use App\Models\Hero;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Factory as Faker;

class HeroSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = Faker::create();

        Hero::create([
            'name' => "Md. Fahidur Rahim",
            'designation' => "Software Engineer",
            'phone' => "01675717825",
            'email' => "farhan.fahidurrahim@gmail.com",
            'image' => $faker->imageUrl(500, 250, 'people', true, 'Fahidur Rahim'),
            'status' => "active",
        ]);
    }
}
