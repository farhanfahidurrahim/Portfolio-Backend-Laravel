<?php

namespace Database\Seeders;

use App\Models\About;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class AboutSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        About::create([
            'description' => 'I am Md. Fahidur Rahim, a passionate Software Developer with a strong background in PHP, Laravel, MySQL, RestAPI, JavaScript, and Vue.js. With over 1 years of experience in the industry, I have developed and maintained web applications, built APIs for frontend and mobile developers, and led teams to deliver high-quality projects on time. Currently, I am working at Classic IT, where I continue to hone my skills and contribute to exciting projects.',
            'status' => "1"
        ]);
    }
}
