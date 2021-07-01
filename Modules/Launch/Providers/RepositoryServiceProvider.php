<?php

namespace Epigra\Launch\Providers;

use Epigra\Launch\Repositories\Launch\LaunchRepository;
use Epigra\Launch\Repositories\Launch\LaunchRepositoryInterface;
use Epigra\Launch\Services\Launch\LaunchService;
use Epigra\Launch\Services\Launch\LaunchServiceInterface;
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
        $this->app->bind(LaunchRepositoryInterface::class, LaunchRepository::class);

        //services
        $this->app->bind(LaunchServiceInterface::class, LaunchService::class);
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
