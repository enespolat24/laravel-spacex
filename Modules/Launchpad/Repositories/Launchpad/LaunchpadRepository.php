<?php

namespace Epigra\Launchpad\Repositories\Launchpad;

use Epigra\Launchpad\Models\Launchpad;
use Epigra\Core\Repositories\Base\BaseEloquentRepository;
use Illuminate\Database\Eloquent\Model;

class LaunchpadRepository extends BaseEloquentRepository implements LaunchpadRepositoryInterface
{
    /**
     * LaunchpadRepository constructor.
     */
    public function __construct()
    {
        parent::__construct(Launchpad::class);
    }

    public function updateOrCreate(array $attributes, array $values): Model
    {
        return $this->model::updateOrCreate($attributes, $values);
    }
}
