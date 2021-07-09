<?php

namespace Epigra\Payload\Services\Payload;

use Epigra\Core\DTO\Base\BaseDTO;
use Epigra\Payload\Models\Payload;
use Epigra\Core\Services\Base\BaseServiceInterface;
use Illuminate\Support\Facades\Http;

/**
 * Interface PayloadServiceInterface
 * @package Epigra\Payload\Services\Payload\Payload
 */
interface PayloadServiceInterface extends BaseServiceInterface
{
    public function getPayloadsFromApi():array;

    public function updateOrCreate($dto);
}
