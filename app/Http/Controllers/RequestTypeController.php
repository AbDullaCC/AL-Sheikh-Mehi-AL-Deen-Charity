<?php

namespace App\Http\Controllers;
use Wever\Laradot\App\Http\Controllers\DotController;
use App\Http\Requests\CreateRequestTypeRequest;
use App\Http\Requests\UpdateRequestTypeRequest;
use App\Http\Resources\RequestTypeResource;
use App\Services\RequestTypeService;


class RequestTypeController extends DotController
{
    public function __construct() {
        parent::__construct(
            RequestTypeService::class,
            CreateRequestTypeRequest::class,
            UpdateRequestTypeRequest::class,
            RequestTypeResource::class
        );
    }
}
