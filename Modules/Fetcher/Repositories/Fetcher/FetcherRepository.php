<?php

namespace Epigra\Fetcher\Repositories\Fetcher;

use Epigra\Fetcher\Models\Fetcher;
use Epigra\Core\Repositories\Base\BaseEloquentRepository;

class FetcherRepository extends BaseEloquentRepository implements FetcherRepositoryInterface
{
    /**
     * FetcherRepository constructor.
     */
    public function __construct()
    {
        parent::__construct(Fetcher::class);
    }
}
