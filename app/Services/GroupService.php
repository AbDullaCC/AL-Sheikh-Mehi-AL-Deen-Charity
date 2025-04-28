<?php

namespace App\Services;
use Wever\Laradot\App\Services\DotService;
use App\Models\Group;

class GroupService extends DotService
{
    public function __construct()
    {
        parent::__construct(Group::class);
    }
}

