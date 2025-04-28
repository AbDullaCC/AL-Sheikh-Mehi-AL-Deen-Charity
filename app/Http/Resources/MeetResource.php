<?php

namespace App\Http\Resources;
use Wever\Laradot\App\Traits\ResourcePaginator;
use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;
use App\Http\Resources\RequestResource;

class MeetResource extends JsonResource
{
    use ResourcePaginator;
    public function toArray($request)
    {
        $showPrivate = true;
        $public = [
            'name' => $this->name,
            'date' => $this->date->format('Y-m-d'),
            'requests' => RequestResource::collection($this->whenLoaded('requests')),
        ];

        return $public;
    }
}
