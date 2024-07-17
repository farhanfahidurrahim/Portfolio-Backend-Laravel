<?php

namespace Database\Seeders;

use App\Models\WorkExperience;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class WorkExperienceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $workExperiences = [
            [
                'company_name' => 'Classic IT',
                'designation' => 'Software Developer',
                'duration' => '2023-Present',
                'key_point' => 'Developed various web applications.',
                'status' => '1',
            ],
            [
                'company_name' => 'LinkTech IT',
                'designation' => 'Software Developer',
                'duration' => '2018-2020',
                'key_point' => 'Led a team of developers.',
                'status' => '1',
            ],
            [
                'company_name' => 'Codeless Technologies',
                'designation' => 'Internsip',
                'duration' => '2020-Present',
                'key_point' => 'Implemented new technologies.',
                'status' => '1',
            ],
        ];

        foreach ($workExperiences as $workExperience) {
            WorkExperience::create($workExperience);
        }
    }
}
