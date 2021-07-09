<?php

namespace Epigra\Payload\Repositories\Payload;

use Epigra\Payload\Models\Payload;
use Epigra\Core\Repositories\Base\BaseEloquentRepository;
use Illuminate\Database\Eloquent\Model;

class PayloadRepository extends BaseEloquentRepository implements PayloadRepositoryInterface
{
    /**
     * PayloadRepository constructor.
     */
    public function __construct()
    {
        parent::__construct(Payload::class);
    }

    public function updateOrCreate(array $attributes, array $values): Model
    {
        return $this->model::updateOrCreate($attributes, $values);
    }
}
