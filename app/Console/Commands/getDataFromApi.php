<?php

namespace App\Console\Commands;

use Epigra\Launch\DTO\Launch\LaunchDTO;
use Epigra\Launch\Services\Launch\LaunchServiceInterface;
use Epigra\Launchpad\DTO\Launchpad\LaunchpadDTO;
use Epigra\Launchpad\Services\Launchpad\LaunchpadServiceInterface;
use Epigra\Payload\DTO\Payload\PayloadDTO;
use Epigra\Payload\Services\Payload\PayloadServiceInterface;
use Illuminate\Console\Command;


class getDataFromApi extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'update:from-api';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command description';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    protected LaunchpadServiceInterface $launchpadService;
    protected LaunchServiceInterface $launchService;
    protected PayloadServiceInterface $payloadService;

    public function __construct(LaunchServiceInterface $launchService, LaunchpadServiceInterface $launchpadService, PayloadServiceInterface $payloadService)
    {
        parent::__construct();
        $this->launchpadService = $launchpadService;
        $this->launchService = $launchService;
        $this->payloadService = $payloadService;
    }

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle(): int
    {
        $this->setLaunches();
        $this->setLaunchpads();
        $this->setPayloads();

        return 0;
    }

    private function setLaunches()
    {
        $data = $this->launchService->getLaunchesFromApi();
        foreach ($data as $launch) {
            $dto = new LaunchDTO($launch);
            $dto->provider_id = $launch['id'];
            $dto->launchpad_id = $launch['launchpad'];
            $this->launchService->create($dto);
        }
    }

    private function setLaunchpads()
    {
        $data = $this->launchpadService->getLaunchpadsFromApi();
        foreach ($data as $launchpad) {


            $dto = new LaunchpadDTO($launchpad);
            $dto->provider_id = $launchpad['id'];
            $dto->name = $launchpad['name'];
            $this->launchpadService->create($dto);

            if ($launchpad["launches"]) {
                foreach ($launchpad["launches"] as $item) {
                    $launch = $this->launchService->getLaunchById($item);

                }
            }
        }
    }

    private function setPayloads()
    {
        $data = $this->payloadService->getPayloadsFromApi();
        foreach ($data as $payload) {
            $dto = new PayloadDTO($payload);
            $dto->provider_id = $payload['id'];
            $dto->launch_id = $payload['launch'];
            $this->payloadService->create($dto);
        }
    }
}
