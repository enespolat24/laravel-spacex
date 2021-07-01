<?php

namespace Epigra\Payload\Providers;

use Epigra\Payload\Repositories\Payload\PayloadRepository;
use Epigra\Payload\Repositories\Payload\PayloadRepositoryInterface;
use Epigra\Payload\Services\Payload\PayloadService;
use Epigra\Payload\Services\Payload\PayloadServiceInterface;
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
        $this->app->bind(PayloadRepositoryInterface::class, PayloadRepository::class);

        //services
        $this->app->bind(PayloadServiceInterface::class, PayloadService::class);
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
