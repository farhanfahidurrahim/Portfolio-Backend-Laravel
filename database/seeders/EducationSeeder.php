<?php

namespace Database\Seeders;

use App\Models\Education;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class EducationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $educations = [
            [
                'examination' => "Bsc Software Engineering",
                'institution' => "American International University-Bangladesh (AIUB)",
                'passing_year' => "2019",
                'status' => "1",
            ],
            [
                'examination' => "HSC",
                'institution' => "Gurudayal Govt College",
                'passing_year' => "2013",
                'status' => "1",
            ],
            [
                'examination' => "SSC",
                'institution' => "Kishoreganj Govt Boys High School",
                'passing_year' => "2011",
                'status' => "1",
            ]
        ];

        foreach ($educations as $education) {
            Education::create($education);
        }
    }
}
