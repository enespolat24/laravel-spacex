<?php

namespace Epigra\Launch\Http\Controllers\Api;

use Epigra\Core\Controller\BaseApiController;
use Epigra\Launch\DTO\Launch\LaunchDTO;
use Epigra\Launch\Services\Launch\LaunchServiceInterface;

class LaunchApiController extends BaseApiController
{
    public function __construct(LaunchServiceInterface $service)
    {
        $this->service = $service;
        $this->dtoClass = LaunchDTO::class;
    }
}
