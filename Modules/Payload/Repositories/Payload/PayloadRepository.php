<?php

namespace Epigra\Payload\Repositories\Payload;

use Epigra\Payload\Models\Payload;
use Epigra\Core\Repositories\Base\BaseEloquentRepository;

class PayloadRepository extends BaseEloquentRepository implements PayloadRepositoryInterface
{
    /**
     * PayloadRepository constructor.
     */
    public function __construct()
    {
        parent::__construct(Payload::class);
    }
}
