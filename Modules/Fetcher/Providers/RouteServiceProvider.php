<?php

namespace Epigra\Fetcher\Providers;

use Epigra\Core\Providers\BaseRouteServiceProvider;

class RouteServiceProvider extends BaseRouteServiceProvider
{
   public function boot()
   {
       $this->setModuleName('Fetcher');
       parent::boot();
   }
}
