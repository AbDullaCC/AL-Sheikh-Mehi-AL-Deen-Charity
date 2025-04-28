<?php

namespace App\Services;
use Wever\Laradot\App\Services\DotService;
use App\Models\Meet;

class MeetService extends DotService
{
    public function __construct()
    {
        parent::__construct(Meet::class);
    }
}

