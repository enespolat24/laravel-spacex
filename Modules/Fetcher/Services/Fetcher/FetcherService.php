<?php

namespace Epigra\Fetcher\Services\Fetcher;

use Epigra\Fetcher\DTO\Fetcher\FetcherDTO;
use Epigra\Fetcher\Repositories\Fetcher\FetcherRepositoryInterface;
use Epigra\Fetcher\Services\Fetcher\FetcherServiceInterface;
use Epigra\Core\Services\Base\BaseService;
use Illuminate\Support\Facades\Http;

class FetcherService extends BaseService implements FetcherServiceInterface
{
    /**
     * @var FetcherRepositoryInterface
     */
    private FetcherRepositoryInterface $repository;


    /**
     * FetcherService constructor.
     * @param FetcherRepositoryInterface $repository
     */
    public function __construct(FetcherRepositoryInterface $repository)
    {
        parent::__construct($repository, FetcherDTO::class);
        $this->repository = $repository;
    }

    public function apiCall(string $endpoint) {
        $response = Http::get("https://api.spacexdata.com/v4/".$endpoint);
        $response->body();
    }

}
