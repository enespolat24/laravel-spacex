<?php

namespace Epigra\Payload\Services\Payload;

use Epigra\Fetcher\Services\Fetcher\FetcherService;
use Epigra\Payload\DTO\Payload\PayloadDTO;
use Epigra\Payload\Repositories\Payload\PayloadRepositoryInterface;
use Epigra\Payload\Services\Payload\PayloadServiceInterface;
use Epigra\Core\Services\Base\BaseService;
use Illuminate\Support\Facades\Http;

class PayloadService extends BaseService implements PayloadServiceInterface
{
    /**
     * @var PayloadRepositoryInterface
     */
    private PayloadRepositoryInterface $repository;
    private FetcherService $fetcher;


    /**
     * PayloadService constructor.
     * @param PayloadRepositoryInterface $repository
     * @param $fetcher
     */
    public function __construct(PayloadRepositoryInterface $repository)
    {
        parent::__construct($repository, PayloadDTO::class);
        $this->repository = $repository;

    }

    public function getPayloadsFromApi():array
    {
        $response = Http::get('https://api.spacexdata.com/v4/payloads/');
        return $response->json();
    }
}
