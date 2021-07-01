<?php

namespace Epigra\Launch\Services\Launch;

use Epigra\Launch\DTO\Launch\LaunchDTO;
use Epigra\Launch\Repositories\Launch\LaunchRepositoryInterface;
use Epigra\Launch\Services\Launch\LaunchServiceInterface;
use Epigra\Core\Services\Base\BaseService;

class LaunchService extends BaseService implements LaunchServiceInterface
{
    /**
     * @var LaunchRepositoryInterface
     */
    private LaunchRepositoryInterface $repository;


    /**
     * LaunchService constructor.
     * @param LaunchRepositoryInterface $repository
     */
    public function __construct(LaunchRepositoryInterface $repository)
    {
        parent::__construct($repository, LaunchDTO::class);
        $this->repository = $repository;
    }
}
