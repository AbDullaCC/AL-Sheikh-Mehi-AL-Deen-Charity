<?php

namespace App\Http\Resources;
use Wever\Laradot\App\Traits\ResourcePaginator;
use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;
use App\Http\Resources\RequestTypeResource;
use App\Http\Resources\MeetResource;

class RequestResource extends JsonResource
{
    use ResourcePaginator;
    public function toArray($request)
    {
        $showPrivate = true;
        $public = [
            'status' => $this->status,
            'requestType' => RequestTypeResource::make($this->whenLoaded('requestType')),
            'meet' => MeetResource::make($this->whenLoaded('meet')),
        ];

        return $public;
    }
}
