<?php

namespace App\Http\Controllers;
use Wever\Laradot\App\Http\Controllers\DotController;
use App\Http\Requests\CreateMeetRequest;
use App\Http\Requests\UpdateMeetRequest;
use App\Http\Resources\MeetResource;
use App\Services\MeetService;


class MeetController extends DotController
{
    public function __construct() {
        parent::__construct(
            MeetService::class,
            CreateMeetRequest::class,
            UpdateMeetRequest::class,
            MeetResource::class
        );
    }
}
