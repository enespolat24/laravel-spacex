<?php

namespace Epigra\Launch\Services\Launch;

use Epigra\Fetcher\Services\Fetcher\FetcherService;
use Epigra\Launch\DTO\Launch\LaunchDTO;
use Epigra\Launch\Repositories\Launch\LaunchRepositoryInterface;
use Epigra\Launch\Services\Launch\LaunchServiceInterface;
use Epigra\Core\Services\Base\BaseService;
use Illuminate\Support\Facades\Http;

class LaunchService extends BaseService implements LaunchServiceInterface
{
    private FetcherService $fetcher;

    /**
     * @var LaunchRepositoryInterface
     */
    private LaunchRepositoryInterface $repository;

    /**
     * LaunchService constructor.
     * @param LaunchRepositoryInterface $repository
     * @param $fetcher
     */
    public function __construct(LaunchRepositoryInterface $repository)
    {
        parent::__construct($repository, LaunchDTO::class);
        $this->repository = $repository;
    }
    public function getLaunchesFromApi():array
    {
        $response = Http::get('https://api.spacexdata.com/v4/launches/');
        return $response->json();
    }

    public function getLaunchById(string $id):array
    {
        $response = Http::get('https://api.spacexdata.com/v4/launches/'.$id);
        return $response->json();
    }
}

