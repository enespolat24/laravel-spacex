<?php

namespace Epigra\Payload\Http\Controllers\Api;

use Epigra\Core\Controller\BaseApiController;
use Epigra\Payload\DTO\Payload\PayloadDTO;
use Epigra\Payload\Services\Payload\PayloadServiceInterface;
use Illuminate\Http\Request;

class PayloadApiController extends BaseApiController
{
    public function __construct(PayloadServiceInterface $service)
    {
        $this->service = $service;
        $this->dtoClass = PayloadDTO::class;
    }

}
