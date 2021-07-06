<?php

namespace Epigra\Launchpad\Http\Controllers\Api;

use Epigra\Core\Controller\BaseApiController;
use Epigra\Launchpad\DTO\Launchpad\LaunchpadDTO;
use Epigra\Launchpad\Services\Launchpad\LaunchpadService;
use Epigra\Launchpad\Services\Launchpad\LaunchpadServiceInterface;
use Illuminate\Http\Request;

class LaunchpadApiController extends BaseApiController
{
    public function __construct(LaunchpadServiceInterface $service)
    {
        $this->service = $service;
        $this->dtoClass = LaunchpadDTO::class;
    }
    private LaunchpadService $launchpadService;
    public function launch($launchpadService)
    {
        $this->launchpadService = $launchpadService;
        return $launchpadService;
    }
}
