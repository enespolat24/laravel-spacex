<?php

namespace Epigra\Fetcher\Http\Controllers\Api;

use Epigra\Core\Controller\BaseApiController;
use Epigra\Fetcher\DTO\Fetcher\FetcherDTO;
use Epigra\Fetcher\Services\Fetcher\FetcherServiceInterface;

class FetcherApiController extends BaseApiController
{
    public function __construct(FetcherServiceInterface $service)
    {
        $this->service = $service;
        $this->dtoClass = FetcherDTO::class;
    }
}
