<?php

namespace Epigra\Launchpad\Services\Launchpad;

use Epigra\Fetcher\Services\Fetcher\FetcherService;
use Epigra\Launchpad\DTO\Launchpad\LaunchpadDTO;
use Epigra\Launchpad\Repositories\Launchpad\LaunchpadRepositoryInterface;
use Epigra\Launchpad\Services\Launchpad\LaunchpadServiceInterface;
use Epigra\Core\Services\Base\BaseService;
use Illuminate\Support\Facades\Http;

class LaunchpadService extends BaseService implements LaunchpadServiceInterface
{
    private FetcherService $fetcher;
    /**
     * @var LaunchpadRepositoryInterface
     */
    private LaunchpadRepositoryInterface $repository;


    /**
     * LaunchpadService constructor.
     * @param LaunchpadRepositoryInterface $repository
     * @param $fetcher
     */
    public function __construct(LaunchpadRepositoryInterface $repository)
    {
        parent::__construct($repository, LaunchpadDTO::class);
        $this->repository = $repository;
    }
    public function getLaunchpadsFromApi():array{
        $response = Http::get('https://api.spacexdata.com/v4/launchpads/');
        return $response->json();

    }

}
