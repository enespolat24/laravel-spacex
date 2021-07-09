<?php

namespace Epigra\Launch\Repositories\Launch;

use Epigra\Launch\Models\Launch;
use Epigra\Core\Repositories\Base\BaseEloquentRepository;
use Illuminate\Database\Eloquent\Model;

class LaunchRepository extends BaseEloquentRepository implements LaunchRepositoryInterface
{
    /**
     * LaunchRepository constructor.
     */
    public function __construct()
    {
        parent::__construct(Launch::class);
    }

    public function updateOrCreate(array $attributes, array $values): Model
    {
        return $this->model::updateOrCreate($attributes, $values);
    }
}
