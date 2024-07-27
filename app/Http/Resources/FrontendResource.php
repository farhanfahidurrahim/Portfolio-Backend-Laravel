<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class FrontendResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        return [
            'hero' => new HeroResource($this->get('hero')),
            'about' => new AboutResource($this->get('about')),
            'skills' => SkillResource::collection($this->get('skills')),
            'workExp' => WorkExperienceResource::collection($this->get('workExp')),
            'latestProject' => LatestProjectResource::collection($this->get('latestProject')),
        ];
    }
}
