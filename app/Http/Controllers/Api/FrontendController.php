<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Resources\FrontendResource;
use App\Models\About;
use App\Models\Hero;
use App\Models\LatestProject;
use App\Models\Skill;
use App\Models\WorkExperience;
use Illuminate\Http\Request;

class FrontendController extends Controller
{
    public function index()
    {
        $hero = Hero::where('status' , 'active')->first();
        $about = About::where('status' , '1')->first();
        $skills = Skill::where('status' , '1')->limit(6)->get();
        $workExp = WorkExperience::where('status' , '1')->latest()->limit(3)->get();
        $latestProject = LatestProject::where('status' , '1')->latest()->limit(4)->get();

        $data = collect([
            'hero' => $hero,
            'about' => $about,
            'skills' => $skills,
            'workExp' => $workExp,
            'latestProject' => $latestProject,
        ]);
        return new FrontendResource($data);
    }
}
