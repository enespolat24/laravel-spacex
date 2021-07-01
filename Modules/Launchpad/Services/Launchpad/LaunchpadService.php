<?php

namespace Epigra\Launchpad\Services\Launchpad;

use Epigra\Launchpad\DTO\Launchpad\LaunchpadDTO;
use Epigra\Launchpad\Repositories\Launchpad\LaunchpadRepositoryInterface;
use Epigra\Launchpad\Services\Launchpad\LaunchpadServiceInterface;
use Epigra\Core\Services\Base\BaseService;

class LaunchpadService extends BaseService implements LaunchpadServiceInterface
{
    /**
     * @var LaunchpadRepositoryInterface
     */
    private LaunchpadRepositoryInterface $repository;


    /**
     * LaunchpadService constructor.
     * @param LaunchpadRepositoryInterface $repository
     */
    public function __construct(LaunchpadRepositoryInterface $repository)
    {
        parent::__construct($repository, LaunchpadDTO::class);
        $this->repository = $repository;
    }
}
