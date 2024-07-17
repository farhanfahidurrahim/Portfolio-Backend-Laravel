<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Resources\FrontendResource;
use App\Models\About;
use App\Models\Hero;
use Illuminate\Http\Request;

class FrontendController extends Controller
{
    public function index()
    {
        $hero = Hero::all();
        $about = About::all();

        $data = collect([
            'hero' => $hero,
            'about' => $about,
        ]);
        return new FrontendResource($data);
    }
}
