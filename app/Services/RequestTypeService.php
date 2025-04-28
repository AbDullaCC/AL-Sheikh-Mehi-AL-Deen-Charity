<?php

namespace App\Services;
use Wever\Laradot\App\Services\DotService;
use App\Models\RequestType;

class RequestTypeService extends DotService
{
    public function __construct()
    {
        parent::__construct(RequestType::class);
    }
}

