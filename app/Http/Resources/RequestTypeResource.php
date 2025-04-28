<?php

namespace App\Http\Resources;
use Wever\Laradot\App\Traits\ResourcePaginator;
use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;
use App\Http\Resources\RequestResource;

class RequestTypeResource extends JsonResource
{
    use ResourcePaginator;
    public function toArray($request)
    {
        $showPrivate = true;
        $public = [
            'name' => $this->name,
            'requests' => RequestResource::collection($this->whenLoaded('requests')),
        ];

        return $public;
    }
}
