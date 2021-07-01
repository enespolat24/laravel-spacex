<?php

namespace Epigra\Launchpad\Providers;

use Epigra\Launchpad\Repositories\Launchpad\LaunchpadRepository;
use Epigra\Launchpad\Repositories\Launchpad\LaunchpadRepositoryInterface;
use Epigra\Launchpad\Services\Launchpad\LaunchpadService;
use Epigra\Launchpad\Services\Launchpad\LaunchpadServiceInterface;
use Illuminate\Support\ServiceProvider;

class RepositoryServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        //repositories
        $this->app->bind(LaunchpadRepositoryInterface::class, LaunchpadRepository::class);

        //services
        $this->app->bind(LaunchpadServiceInterface::class, LaunchpadService::class);
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }
}
