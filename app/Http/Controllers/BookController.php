<?php

namespace App\Http\Controllers;
use Wever\Laradot\App\Http\Controllers\DotController;
use App\Http\Requests\CreateBookRequest;
use App\Http\Requests\UpdateBookRequest;
use App\Http\Resources\BookResource;
use App\Services\BookService;


class BookController extends DotController
{
    public function __construct() {
        parent::__construct(
            BookService::class,
            CreateBookRequest::class,
            UpdateBookRequest::class,
            BookResource::class
        );
    }
}
