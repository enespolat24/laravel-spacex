<?php

namespace Epigra\Payload\DTO\Payload;

use Epigra\Core\DTO\Base\BaseDTO;

/**
 * Class PayloadDTO
 */
class PayloadDTO extends BaseDTO
{
    /**
     * PayloadDTO constructor.
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
     * @var string
     */
    public string $provider_id;

    /**
     * @var string
     */
    public string $type;

    /**
     * @var ?string
     */
    public ?string $launch_id;

    /**
     * @var bool
     */
    public bool $reused;

    /**
     * @param $dto
     * @param array $originalData
     * @return PayloadDTO
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
