<?php

namespace App\Http\Controllers;
use Wever\Laradot\App\Http\Controllers\DotController;
use App\Http\Requests\CreateRequestRequest;
use App\Http\Requests\UpdateRequestRequest;
use App\Http\Resources\RequestResource;
use App\Services\RequestService;


class RequestController extends DotController
{
    public function __construct() {
        parent::__construct(
            RequestService::class,
            CreateRequestRequest::class,
            UpdateRequestRequest::class,
            RequestResource::class
        );
    }
}
