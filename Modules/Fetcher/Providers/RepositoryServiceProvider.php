<?php

namespace Epigra\Fetcher\Providers;

use Epigra\Fetcher\Repositories\Fetcher\FetcherRepository;
use Epigra\Fetcher\Repositories\Fetcher\FetcherRepositoryInterface;
use Epigra\Fetcher\Services\Fetcher\FetcherService;
use Epigra\Fetcher\Services\Fetcher\FetcherServiceInterface;
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
        $this->app->bind(FetcherRepositoryInterface::class, FetcherRepository::class);

        //services
        $this->app->bind(FetcherServiceInterface::class, FetcherService::class);
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
