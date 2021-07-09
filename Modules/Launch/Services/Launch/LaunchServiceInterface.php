<?php

namespace Epigra\Launch\Services\Launch;

use Epigra\Core\DTO\Base\BaseDTO;
use Epigra\Launch\Models\Launch;
use Epigra\Core\Services\Base\BaseServiceInterface;
use Illuminate\Support\Facades\Http;

/**
 * Interface LaunchServiceInterface
 * @package Epigra\Launch\Services\Launch\Launch
 */
interface LaunchServiceInterface extends BaseServiceInterface
{
    public function getLaunchesFromApi(): array;

    public function getLaunchById(string $id): array;

//    public function updateOrCreate(int $id, BaseDTO $dto): bool;

}
