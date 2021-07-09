<?php

namespace Epigra\Payload\Repositories\Payload;

use Epigra\Core\Repositories\Base\BaseRepositoryInterface;
use Illuminate\Database\Eloquent\Model;

interface PayloadRepositoryInterface extends BaseRepositoryInterface
{
    public function updateOrCreate(array $attributes, array $values):Model;

}
