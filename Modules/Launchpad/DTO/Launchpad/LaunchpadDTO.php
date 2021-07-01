<?php

namespace Epigra\Launchpad\DTO\Launchpad;

use Epigra\Core\DTO\Base\BaseDTO;

/**
 * Class LaunchpadDTO
 */
class LaunchpadDTO extends BaseDTO
{
    /**
     * LaunchpadDTO constructor.
     * @param array $parameters
     */
    public function __construct(array $parameters = [])
    {
        parent::__construct($parameters, self::class);
    }

    /**
     * @var int
     */
    public int $id;

    /**
     * @var int
     */
    public int $sample;

    /**
     * @param $dto
     * @param array $originalData
     * @return LaunchpadDTO
     */
    public function mapToDTO($dto, array $originalData): self
    {
        //you can make a change for each field on
        return $dto;
    }

    /**
     * @param array $parameters
     * @param bool $updateMode
     * @return array
     */
    public function validate(array $parameters, bool $updateMode)
    {
        return $this->validator($parameters, [
            //'name' => 'required|string'
        ]);
    }
}
