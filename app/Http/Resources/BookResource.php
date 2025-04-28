<?php

namespace App\Http\Resources;
use Wever\Laradot\App\Traits\ResourcePaginator;
use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;
use App\Http\Resources\AuthorResource;
use App\Http\Resources\CommentResource;

class BookResource extends JsonResource
{
    use ResourcePaginator;
    public function toArray($request)
    {
        $showPrivate = true;
        $public = [
            'title' => $this->title,
            'desc' => $this->desc,
            'published_at' => $this->published_at,
            'author' => AuthorResource::make($this->whenLoaded('author')),
        ];

        $private = [
            'comments' => CommentResource::collection($this->whenLoaded('comments')),
        ];

        return $showPrivate
            ? array_merge($public, $private)
            : $public;
    }
}
