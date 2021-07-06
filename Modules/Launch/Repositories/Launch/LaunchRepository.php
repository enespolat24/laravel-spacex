<?php

namespace Epigra\Launch\Repositories\Launch;

use Epigra\Launch\Models\Launch;
use Epigra\Core\Repositories\Base\BaseEloquentRepository;

class LaunchRepository extends BaseEloquentRepository implements LaunchRepositoryInterface
{
    /**
     * LaunchRepository constructor.
     */
    public function __construct()
    {
        parent::__construct(Launch::class);
    }

}
