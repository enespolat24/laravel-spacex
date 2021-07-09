<?php

namespace Epigra\Launchpad\Services\Launchpad;

use Epigra\Core\DTO\Base\BaseDTO;
use Epigra\Launchpad\Models\Launchpad;
use Epigra\Core\Services\Base\BaseServiceInterface;
use Illuminate\Support\Facades\Http;

/**
 * Interface LaunchpadServiceInterface
 * @package Epigra\Launchpad\Services\Launchpad\Launchpad
 */
interface LaunchpadServiceInterface extends BaseServiceInterface
{
    public function getLaunchpadsFromApi():array;

//    public function updateOrCreate(BaseDTO $dto): bool;
}
