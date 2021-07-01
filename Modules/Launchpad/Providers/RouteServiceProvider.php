<?php

namespace Epigra\Launchpad\Providers;

use Epigra\Core\Providers\BaseRouteServiceProvider;

class RouteServiceProvider extends BaseRouteServiceProvider
{
   public function boot()
   {
       $this->setModuleName('Launchpad');
       parent::boot();
   }
}
