<?php

namespace Epigra\Launch\Repositories\Launch;

use Epigra\Launch\Models\Launch;
use Epigra\Core\Repositories\Base\BaseRepositoryInterface;
use Illuminate\Database\Eloquent\Model;

interface LaunchRepositoryInterface extends BaseRepositoryInterface
{
    public function updateOrCreate(array $attributes, array $values): Model;
}
