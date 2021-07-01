<?php

namespace Epigra\Launchpad\Repositories\Launchpad;

use Epigra\Launchpad\Models\Launchpad;
use Epigra\Core\Repositories\Base\BaseEloquentRepository;

class LaunchpadRepository extends BaseEloquentRepository implements LaunchpadRepositoryInterface
{
    /**
     * LaunchpadRepository constructor.
     */
    public function __construct()
    {
        parent::__construct(Launchpad::class);
    }
}
