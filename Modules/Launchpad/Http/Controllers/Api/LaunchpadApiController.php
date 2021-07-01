<?php

namespace Epigra\Launchpad\Http\Controllers\Api;

use Epigra\Core\Controller\BaseApiController;
use Epigra\Launchpad\DTO\Launchpad\LaunchpadDTO;
use Epigra\Launchpad\Services\Launchpad\LaunchpadServiceInterface;

class LaunchpadApiController extends BaseApiController
{
    public function __construct(LaunchpadServiceInterface $service)
    {
        $this->service = $service;
        $this->dtoClass = LaunchpadDTO::class;
    }
}
