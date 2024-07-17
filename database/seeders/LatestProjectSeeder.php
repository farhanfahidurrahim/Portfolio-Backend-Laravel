<?php

namespace Database\Seeders;

use App\Models\LatestProject;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class LatestProjectSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $projects = [
            [
                'project_name' => "Creation Edge",
                'project_description' => "Short Desc Here",
                'live_link' => "www.creation.com",
                'status' => "1",
            ],

            [
                'project_name' => "Sunshine",
                'project_description' => "Short Desc Here",
                'live_link' => "www.creation.com",
                'status' => "1",
            ],

            [
                'project_name' => "Porichoy",
                'project_description' => "Short Desc Here",
                'live_link' => "www.creation.com",
                'status' => "1",
            ]
        ];

        foreach ($projects as $project) {
            LatestProject::create($project);
        }
    }
}
