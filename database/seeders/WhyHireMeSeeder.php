<?php

namespace Database\Seeders;

use App\Models\WhyHireMe;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class WhyHireMeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        WhyHireMe::create([
            'description' => "I bring a unique blend of technical expertise and practical experience to the table. With a proven track record of delivering high-quality projects, I am committed to continuously honing my skills and staying up-to-date with the latest industry trends. My ability to lead a team and collaborate effectively makes me a valuable asset to any organization. Here are some reasons why you should consider hiring me:",
            'status' =>"1",
        ]);
    }
}
