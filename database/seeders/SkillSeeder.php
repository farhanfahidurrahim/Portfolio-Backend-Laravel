<?php

namespace Database\Seeders;

use App\Models\Skill;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SkillSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $titles = ['PHP', 'Laravel', 'MySQl', 'RestAPI', 'JavaScript', 'VueJs'];

        foreach ($titles as $title) {
            Skill::create([
                'title' => $title,
                'status' => '1',
            ]);
        }
    }
}
