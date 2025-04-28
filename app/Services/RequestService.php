<?php

namespace App\Services;
use Wever\Laradot\App\Services\DotService;
use App\Models\Request;

class RequestService extends DotService
{
    public function __construct()
    {
        parent::__construct(Request::class);
    }
}

