<?php

namespace Epigra\Launchpad\Repositories\Launchpad;

use Epigra\Launchpad\Models\Launchpad;
use Epigra\Core\Repositories\Base\BaseRepositoryInterface;
use Illuminate\Database\Eloquent\Model;

interface LaunchpadRepositoryInterface extends BaseRepositoryInterface
{
    public function updateOrCreate(array $attributes, array $values): Model;
}
